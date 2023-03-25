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

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

/**
 * RetryMiddleware is a Guzzle Middleware that allows for retrying certain error
 * codes automatically.
 *
 * Requests are accessed using the Simple API access developer key.
 */
class ConditionalRetry
{
    /** @var array<int> */
    private $httpRetryCodes = [
        0, // connetion-refused OR connection-reset gives status code of 0
        200, // partial download cases
        408,
        429,
        500,
        502,
        503,
        504
    ];

    /** @var int */
    private $retryMethods;

    /** @var int */
    private static $RETRY_STRATEGY_ALWAYS = 'always';

    /**
     * Never retry an API operation.
     * @var string
     */
    private static $RETRY_STRATEGY_NEVER = 'never';

    /**
     * Retry an API operation only if it is considered idempotent
     * and the exception has a retryable error code.
     * @var string
     */
    private static $RETRY_STRATEGY_IDEMPOTENT = 'idempotent';

    public function construct(array $retryMethods, array $options)
    {
        $this->retryMethods = $retryMethods;
        $this->options = $options + [
            'retries' => 3,
            'retryStrategy' => self::$RETRY_STRATEGY_IDEMPOTENT,
        ];

        if (isset($options['httpRetryCodes'])) {
            $this->httpRetryCodes = $options['httpRetryCodes'];
        }
    }

    public function getRetryFunction($methodName, array $callOptions)
    {
        return function(\Exception $exception, $currentAttempt) use ($methodName, $callOptions) {
            // No retry if the strategy is set to NEVER
            if ($retryStrategy === self::$RETRY_STRATEGY_NEVER) {
                return false;
            }

            // No retry if maxRetries reached
            if ($this->maxRetries <= $currentAttempt) {
                return false;
            }

            $statusCode = $exception->getCode();
            // Retry if the exception status code matches
            // with one of the retriable status code and
            // the operation is either idempotent or conditionally
            // idempotent with preconditions supplied.

            if (in_array($statusCode, self::$httpRetryCodes)) {
                if ($retryStrategy == self::$RETRY_STRATEGY_ALWAYS) {
                    return true;
                }

                // The method wasn't specifified as a retry method, so return false
                if (!isset($this->retryMethods[$methodName])) {
                    return false;
                }

                // For conditionals
                if (is_array($this->retryMethods[$methodName])) {
                    return $this->isPreConditionSupplied(
                        $this->retryMethods[$methodName],
                        $callOptions
                    );
                }

                // No conditionals, return true
                return true;
            }
        };
    }

    /**
     * This function returns true when the user given
     * precondtions ($preConditions) has values that are present
     * in the precondition map ($this->condIdempotentMap) for that method.
     * eg: condIdempotentMap has entry 'objects.copy' => ['ifGenerationMatch'],
     * if the user has given 'ifGenerationMatch' in the 'objects.copy' operation,
     * it will be available in the $preConditions
     * as an array ['ifGenerationMatch']. This makes the array_intersect
     * function return a non empty result and this function returns true.
     *
     * @param string $methodName method name, eg: buckets.get.
     * @param array $callOptions arguments which include preconditions provided,
     *  eg: ['ifGenerationMatch' => 0].
     * @return bool
     */
    private function isPreConditionSupplied($methodName, array $callOptions)
    {
        if (isset(self::$condIdempotentOps[$methodName])) {
            // return true if required precondition are given.
            return !empty(array_intersect(
                self::$retryMethods[$methodName],
                array_keys($callOptions)
            ));
        }
        return false;
    }

}