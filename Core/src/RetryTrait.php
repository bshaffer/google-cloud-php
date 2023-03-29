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

namespace Google\Cloud\Storage\Connection\Middleware;

use Google\Cloud\Core\HttpMiddleware\RetryHeadersHttpMiddleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

/**
 * RetryMiddleware is a Guzzle Middleware that allows for retrying certain error
 * codes automatically.
 *
 * Requests are accessed using the Simple API access developer key.
 */
trait RetryTrait
{
    private function setRetryOptions(array $options): array
    {
        $options['restRetryFunction'] = $this->getRetryFunction($resource, $method, $options);
        $options['httpMiddleware'] = RetryHeadersHttpMiddleware::class;

        return $options;
    }
}