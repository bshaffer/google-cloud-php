<?php
/*
 * Copyright 2021 Google Inc.
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

namespace Google\Cloud\Core\HttpHandler;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

/**
 * RetryMiddleware is a Guzzle Middleware that allows for retrying certain error
 * codes automatically.
 *
 * Requests are accessed using the Simple API access developer key.
 */
class RetryHttpHandler
{
    private $currentAttempt = 0;

    /**
     * Retry the response if it has retryable error codes.
     *
     *   use Google\Auth\Middleware\AuthTokenMiddleware;
     *   use Google\Auth\Middleware\RetryMiddleware;
     *   use Google\Auth\OAuth2;
     *   use GuzzleHttp\Client;
     *   use GuzzleHttp\HandlerStack;
     *
     *   $config = [..<oauth config param>.];
     *   $oauth2 = new OAuth2($config)
     *   $authMiddleware = new AuthTokenMiddleware($oauth2);
     *   $retryMiddleware = new RetryMiddleware(['retryAttempts' => 3]);
     *   $stack = HandlerStack::create();
     *   $stack->push($authMiddleware);
     *   $stack->push($retryMiddleware);
     *
     *   $client = new Client([
     *       'handler' => $stack,
     *       'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
     *       'auth' => 'google_auth' // authorize all requests
     *   ]);
     *
     *   $res = $client->get('myproject/taskqueues/myqueue');
     *
     * @param callable $handler
     * @return \Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            // Add initial retry header
            $request = $this->addRetryHeaderCallbacks($request, $options);
            // Call the next middleware
            return $handler($request, $options);
        };
    }

    /**
     * Adds the callback methods to $args which amends retry hash and attempt
     * count to the headers.
     * @param array $args
     *
     * @return array
     */
    private function addRetryHeaderCallbacks(
        RequestInterface $request,
        array $options
    ): RequestInterface {
        $requestHash = Uuid::uuid4()->toString();

        return $request
            ->addHeader(
                AgentHeader::AGENT_HEADER_KEY,
                sprintf("gccl-invocation-id/%s", $requestHash)
            )
            ->addHeader(
                AgentHeader::AGENT_HEADER_KEY,
                sprintf("gccl-attempt-count/%s", self::$currentAttempt)
            );
    }
}