<?php
/*
 * Copyright 2023 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Core\HttpMiddleware;

use Google\ApiCore\AgentHeader;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Utils;

/**
 * Add the Range headers to the request on retry.
 */
class RangeHeadersHttpMiddleware
{
    private $nextHandler;
    private $resultStream;
    private $startByte;
    private $endByte;

    public function __construct($nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return ResponseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        // This middleware only applies when "resultStream" is supplied as a request option.
        if (!isset($options['resultStream'])) {
            // Skip this middleware by immediatelly calling the next middleware
            $handler = $this->nextHandler;
            return $handler($request, $options);
        }

        // if startByte and endByte have been set, we are retrying the request
        if ($this->startByte && $this->endByte) {
            // modify the range headers to fetch the remaining data
            $options['headers']['Range'] = sprintf('bytes=%s-%s', $this->startByte, $this->endByte);

            // Set to null so we don't modify the headers again
            $this->startByte = $this->endByte = null;
        }

        try {
            // Call the next middleware
            $handler = $this->nextHandler;
            return $handler($request, $options);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                // This makes sure we honour the range headers specified by the user
                list($startByte, $endByte) = $this->getRequestedBytes($options);

                // Use the result stream passed into the request options
                $resultStream = $options['resultStream'];

                $msg = (string) $e->getResponse()->getBody();

                $fetchedStream = Utils::streamFor($msg);

                // add the partial response to our stream for the calling class
                Utils::copyToStream($fetchedStream, $resultStream);

                // Set the start and end byte on the next request (if it happens)
                $this->startByte = intval($startByte) + $resultStream->getSize();
                $this->endByte = $endByte;
            }

            throw $e;
        }
    }

    /**
     * Util function to compute the bytes requested for a download request.
     *
     * @param array $options Request options
     * @return array
     */
    private function getRequestedBytes(array $options)
    {
        $startByte = 0;
        $endByte = '';

        if (isset($options['restOptions']) && isset($options['restOptions']['headers'])) {
            $headers = $options['restOptions']['headers'];
            if (isset($headers['Range']) || isset($headers['range'])) {
                $header = isset($headers['Range']) ? $headers['Range'] : $headers['range'];
                $range = explode('=', $header);
                $bytes = explode('-', $range[1]);
                $startByte = $bytes[0];
                $endByte = $bytes[1];
            }
        }

        return compact('startByte', 'endByte');
    }
}
