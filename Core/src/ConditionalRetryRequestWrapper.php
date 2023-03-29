<?php
/**
 * Copyright 2023 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Core;

use Google\Cloud\Core\HttpMiddleware\RetryHeadersHttpMiddleware;

class ConditionalRetryRequestWrapper extends RequestWrapper
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

    /** @var CurrentAttempt */
    private $currentAttempt;

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

    public function __construct(array $config)
    {
        $config += [
            'httpHandler' => null,
            'restRetryMethod' => null,
            'retryMethod' => null,
            'httpRetryCodes' => null,
        ];
        if (!$config['retryMethods']) {
            throw new \Exception('retryMethods must be provided for conditional retries');
        }
        $this->retryMethods = $config['retryMethods'];
        if ($config['httpRetryCodes']) {
            $this->httpRetryCodes = $config['httpRetryCodes'];
        }

        // Wrap handler in Retry middleware
        $this->currentAttempt = new CurrentAttempt();
        $handler = $config['httpHandler'] ?: HttpHandlerFactory::build();
        $config['httpHandler'] = new RetryHeadersHttpMiddleware($this->currentAttempt);

        parent::__construct($config);
    }

    public function getRetryOptions(array $options)
    {
        // retry method
        return parent::getRetryOptions($options) + [
            'restRetryFunction' => $this->getRetryFunction($options['resource'], $options['method'], $options),
        ];
    }

    private function getRetryFunction($resource, $method, array $callOptions)
    {
        $methodName = $resource . '.' . $method;
        return function(\Exception $exception, $currentAttempt) use ($methodName, $callOptions) {
            // Update the current attempt used in the header middleware
            $this->currentAttempt->count = $currentAttempt;

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