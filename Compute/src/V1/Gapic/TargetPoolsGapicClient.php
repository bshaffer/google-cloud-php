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
use Google\Cloud\Compute\V1\AddHealthCheckTargetPoolRequest;
use Google\Cloud\Compute\V1\AddInstanceTargetPoolRequest;
use Google\Cloud\Compute\V1\AggregatedListTargetPoolsRequest;
use Google\Cloud\Compute\V1\DeleteTargetPoolRequest;
use Google\Cloud\Compute\V1\GetHealthTargetPoolRequest;
use Google\Cloud\Compute\V1\GetTargetPoolRequest;
use Google\Cloud\Compute\V1\InsertTargetPoolRequest;
use Google\Cloud\Compute\V1\InstanceReference;
use Google\Cloud\Compute\V1\ListTargetPoolsRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\RemoveHealthCheckTargetPoolRequest;
use Google\Cloud\Compute\V1\RemoveInstanceTargetPoolRequest;
use Google\Cloud\Compute\V1\SetBackupTargetPoolRequest;
use Google\Cloud\Compute\V1\TargetPool;
use Google\Cloud\Compute\V1\TargetPoolAggregatedList;
use Google\Cloud\Compute\V1\TargetPoolInstanceHealth;
use Google\Cloud\Compute\V1\TargetPoolList;
use Google\Cloud\Compute\V1\TargetPoolsAddHealthCheckRequest;
use Google\Cloud\Compute\V1\TargetPoolsAddInstanceRequest;
use Google\Cloud\Compute\V1\TargetPoolsRemoveHealthCheckRequest;
use Google\Cloud\Compute\V1\TargetPoolsRemoveInstanceRequest;
use Google\Cloud\Compute\V1\TargetReference;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $targetPoolsClient = new TargetPoolsClient();
 * try {
 *     $response = $targetPoolsClient->addHealthCheck();
 * } finally {
 *     $targetPoolsClient->close();
 * }
 * ```
 *
 * @experimental
 */
class TargetPoolsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.TargetPools';

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
            'clientConfig' => __DIR__.'/../resources/target_pools_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/target_pools_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/target_pools_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/target_pools_rest_client_config.php',
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
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->addHealthCheck();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type TargetPoolsAddHealthCheckRequest $targetPoolsAddHealthCheckRequestResource
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
    public function addHealthCheck(array $optionalArgs = [])
    {
        $request = new AddHealthCheckTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetPoolsAddHealthCheckRequestResource'])) {
            $request->setTargetPoolsAddHealthCheckRequestResource($optionalArgs['targetPoolsAddHealthCheckRequestResource']);
        }

        return $this->startCall(
            'AddHealthCheck',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->addInstance();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type TargetPoolsAddInstanceRequest $targetPoolsAddInstanceRequestResource
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
    public function addInstance(array $optionalArgs = [])
    {
        $request = new AddInstanceTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetPoolsAddInstanceRequestResource'])) {
            $request->setTargetPoolsAddInstanceRequestResource($optionalArgs['targetPoolsAddInstanceRequestResource']);
        }

        return $this->startCall(
            'AddInstance',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->aggregatedList();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $filter
     *     @type int $maxResults
     *     @type bool $includeAllScopes
     *     @type string $orderBy
     *     @type string $pageToken
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TargetPoolAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListTargetPoolsRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['maxResults'])) {
            $request->setMaxResults($optionalArgs['maxResults']);
        }
        if (isset($optionalArgs['includeAllScopes'])) {
            $request->setIncludeAllScopes($optionalArgs['includeAllScopes']);
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
            'AggregatedList',
            TargetPoolAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->delete();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
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
        $request = new DeleteTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->get();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TargetPool
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }

        return $this->startCall(
            'Get',
            TargetPool::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->getHealth();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type InstanceReference $instanceReferenceResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TargetPoolInstanceHealth
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getHealth(array $optionalArgs = [])
    {
        $request = new GetHealthTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['instanceReferenceResource'])) {
            $request->setInstanceReferenceResource($optionalArgs['instanceReferenceResource']);
        }

        return $this->startCall(
            'GetHealth',
            TargetPoolInstanceHealth::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->insert();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type TargetPool $targetPoolResource
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
        $request = new InsertTargetPoolRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetPoolResource'])) {
            $request->setTargetPoolResource($optionalArgs['targetPoolResource']);
        }

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
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->list_();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $region
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
     * @return \Google\Cloud\Compute\V1\TargetPoolList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListTargetPoolsRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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

        return $this->startCall(
            'List',
            TargetPoolList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->removeHealthCheck();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type TargetPoolsRemoveHealthCheckRequest $targetPoolsRemoveHealthCheckRequestResource
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
    public function removeHealthCheck(array $optionalArgs = [])
    {
        $request = new RemoveHealthCheckTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetPoolsRemoveHealthCheckRequestResource'])) {
            $request->setTargetPoolsRemoveHealthCheckRequestResource($optionalArgs['targetPoolsRemoveHealthCheckRequestResource']);
        }

        return $this->startCall(
            'RemoveHealthCheck',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->removeInstance();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type TargetPoolsRemoveInstanceRequest $targetPoolsRemoveInstanceRequestResource
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
    public function removeInstance(array $optionalArgs = [])
    {
        $request = new RemoveInstanceTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetPoolsRemoveInstanceRequestResource'])) {
            $request->setTargetPoolsRemoveInstanceRequestResource($optionalArgs['targetPoolsRemoveInstanceRequestResource']);
        }

        return $this->startCall(
            'RemoveInstance',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetPoolsClient = new TargetPoolsClient();
     * try {
     *     $response = $targetPoolsClient->setBackup();
     * } finally {
     *     $targetPoolsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetPool
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type float $failoverRatio
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
    public function setBackup(array $optionalArgs = [])
    {
        $request = new SetBackupTargetPoolRequest();
        if (isset($optionalArgs['targetPool'])) {
            $request->setTargetPool($optionalArgs['targetPool']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['failoverRatio'])) {
            $request->setFailoverRatio($optionalArgs['failoverRatio']);
        }
        if (isset($optionalArgs['targetReferenceResource'])) {
            $request->setTargetReferenceResource($optionalArgs['targetReferenceResource']);
        }

        return $this->startCall(
            'SetBackup',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
