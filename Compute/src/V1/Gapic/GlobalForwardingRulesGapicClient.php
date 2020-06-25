<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Compute\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\DeleteGlobalForwardingRuleRequest;
use Google\Cloud\Compute\V1\ForwardingRule;
use Google\Cloud\Compute\V1\ForwardingRuleList;
use Google\Cloud\Compute\V1\GetGlobalForwardingRuleRequest;
use Google\Cloud\Compute\V1\InsertGlobalForwardingRuleRequest;
use Google\Cloud\Compute\V1\ListGlobalForwardingRulesRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchGlobalForwardingRuleRequest;
use Google\Cloud\Compute\V1\SetTargetGlobalForwardingRuleRequest;
use Google\Cloud\Compute\V1\TargetReference;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
 * try {
 *     $response = $globalForwardingRulesClient->delete();
 * } finally {
 *     $globalForwardingRulesClient->close();
 * }
 * ```
 *
 * @experimental
 */
class GlobalForwardingRulesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.GlobalForwardingRules';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'compute.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/compute',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/global_forwarding_rules_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/global_forwarding_rules_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/global_forwarding_rules_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/global_forwarding_rules_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->delete();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $forwardingRule
     *     @type string $project
     *     @type string $requestId
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function delete(array $optionalArgs = [])
    {
        $request = new DeleteGlobalForwardingRuleRequest();
        if (isset($optionalArgs['forwardingRule'])) {
            $request->setForwardingRule($optionalArgs['forwardingRule']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Delete',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->get();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $forwardingRule
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\ForwardingRule
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetGlobalForwardingRuleRequest();
        if (isset($optionalArgs['forwardingRule'])) {
            $request->setForwardingRule($optionalArgs['forwardingRule']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'Get',
            ForwardingRule::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->insert();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $requestId
     *     @type ForwardingRule $forwardingRuleResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function insert(array $optionalArgs = [])
    {
        $request = new InsertGlobalForwardingRuleRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['forwardingRuleResource'])) {
            $request->setForwardingRuleResource($optionalArgs['forwardingRuleResource']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'project' => $request->getProject(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'Insert',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->list_();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $filter
     *     @type int $maxResults
     *     @type string $orderBy
     *     @type string $pageToken
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\ForwardingRuleList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListGlobalForwardingRulesRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['maxResults'])) {
            $request->setMaxResults($optionalArgs['maxResults']);
        }
        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'project' => $request->getProject(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'List',
            ForwardingRuleList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->patch();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $forwardingRule
     *     @type string $project
     *     @type string $requestId
     *     @type ForwardingRule $forwardingRuleResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function patch(array $optionalArgs = [])
    {
        $request = new PatchGlobalForwardingRuleRequest();
        if (isset($optionalArgs['forwardingRule'])) {
            $request->setForwardingRule($optionalArgs['forwardingRule']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['forwardingRuleResource'])) {
            $request->setForwardingRuleResource($optionalArgs['forwardingRuleResource']);
        }

        return $this->startCall(
            'Patch',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $globalForwardingRulesClient = new GlobalForwardingRulesClient();
     * try {
     *     $response = $globalForwardingRulesClient->setTarget();
     * } finally {
     *     $globalForwardingRulesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $forwardingRule
     *     @type string $project
     *     @type string $requestId
     *     @type TargetReference $targetReferenceResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function setTarget(array $optionalArgs = [])
    {
        $request = new SetTargetGlobalForwardingRuleRequest();
        if (isset($optionalArgs['forwardingRule'])) {
            $request->setForwardingRule($optionalArgs['forwardingRule']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetReferenceResource'])) {
            $request->setTargetReferenceResource($optionalArgs['targetReferenceResource']);
        }

        return $this->startCall(
            'SetTarget',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
