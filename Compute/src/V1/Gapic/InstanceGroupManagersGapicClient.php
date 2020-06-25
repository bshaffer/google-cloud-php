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
use Google\Cloud\Compute\V1\AbandonInstancesInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\AggregatedListInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\ApplyUpdatesToInstancesInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\CreateInstancesInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\DeleteInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\DeleteInstancesInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\GetInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\InsertInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\InstanceGroupManager;
use Google\Cloud\Compute\V1\InstanceGroupManagerAggregatedList;
use Google\Cloud\Compute\V1\InstanceGroupManagerList;
use Google\Cloud\Compute\V1\InstanceGroupManagersAbandonInstancesRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersApplyUpdatesRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersCreateInstancesRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersDeleteInstancesRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersListErrorsResponse;
use Google\Cloud\Compute\V1\InstanceGroupManagersListManagedInstancesResponse;
use Google\Cloud\Compute\V1\InstanceGroupManagersRecreateInstancesRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersSetInstanceTemplateRequest;
use Google\Cloud\Compute\V1\InstanceGroupManagersSetTargetPoolsRequest;
use Google\Cloud\Compute\V1\ListErrorsInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\ListInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\ListManagedInstancesInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\RecreateInstancesInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\ResizeInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\SetInstanceTemplateInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\SetTargetPoolsInstanceGroupManagerRequest;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $instanceGroupManagersClient = new InstanceGroupManagersClient();
 * try {
 *     $response = $instanceGroupManagersClient->abandonInstances();
 * } finally {
 *     $instanceGroupManagersClient->close();
 * }
 * ```
 *
 * @experimental
 */
class InstanceGroupManagersGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.InstanceGroupManagers';

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
            'clientConfig' => __DIR__.'/../resources/instance_group_managers_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/instance_group_managers_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/instance_group_managers_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/instance_group_managers_rest_client_config.php',
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
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->abandonInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersAbandonInstancesRequest $instanceGroupManagersAbandonInstancesRequestResource
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
    public function abandonInstances(array $optionalArgs = [])
    {
        $request = new AbandonInstancesInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersAbandonInstancesRequestResource'])) {
            $request->setInstanceGroupManagersAbandonInstancesRequestResource($optionalArgs['instanceGroupManagersAbandonInstancesRequestResource']);
        }

        return $this->startCall(
            'AbandonInstances',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->aggregatedList();
     * } finally {
     *     $instanceGroupManagersClient->close();
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
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListInstanceGroupManagersRequest();
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
            InstanceGroupManagerAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->applyUpdatesToInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type InstanceGroupManagersApplyUpdatesRequest $instanceGroupManagersApplyUpdatesRequestResource
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
    public function applyUpdatesToInstances(array $optionalArgs = [])
    {
        $request = new ApplyUpdatesToInstancesInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['instanceGroupManagersApplyUpdatesRequestResource'])) {
            $request->setInstanceGroupManagersApplyUpdatesRequestResource($optionalArgs['instanceGroupManagersApplyUpdatesRequestResource']);
        }

        return $this->startCall(
            'ApplyUpdatesToInstances',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->createInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersCreateInstancesRequest $instanceGroupManagersCreateInstancesRequestResource
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
    public function createInstances(array $optionalArgs = [])
    {
        $request = new CreateInstancesInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersCreateInstancesRequestResource'])) {
            $request->setInstanceGroupManagersCreateInstancesRequestResource($optionalArgs['instanceGroupManagersCreateInstancesRequestResource']);
        }

        return $this->startCall(
            'CreateInstances',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->delete();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
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
        $request = new DeleteInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->deleteInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersDeleteInstancesRequest $instanceGroupManagersDeleteInstancesRequestResource
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
    public function deleteInstances(array $optionalArgs = [])
    {
        $request = new DeleteInstancesInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersDeleteInstancesRequestResource'])) {
            $request->setInstanceGroupManagersDeleteInstancesRequestResource($optionalArgs['instanceGroupManagersDeleteInstancesRequestResource']);
        }

        return $this->startCall(
            'DeleteInstances',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->get();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\InstanceGroupManager
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'Get',
            InstanceGroupManager::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->insert();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManager $instanceGroupManagerResource
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
        $request = new InsertInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagerResource'])) {
            $request->setInstanceGroupManagerResource($optionalArgs['instanceGroupManagerResource']);
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
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->list_();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
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
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListInstanceGroupManagersRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
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

        return $this->startCall(
            'List',
            InstanceGroupManagerList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->listErrors();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
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
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagersListErrorsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listErrors(array $optionalArgs = [])
    {
        $request = new ListErrorsInstanceGroupManagersRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
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

        return $this->startCall(
            'ListErrors',
            InstanceGroupManagersListErrorsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->listManagedInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
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
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagersListManagedInstancesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listManagedInstances(array $optionalArgs = [])
    {
        $request = new ListManagedInstancesInstanceGroupManagersRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
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

        return $this->startCall(
            'ListManagedInstances',
            InstanceGroupManagersListManagedInstancesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->patch();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManager $instanceGroupManagerResource
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
        $request = new PatchInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagerResource'])) {
            $request->setInstanceGroupManagerResource($optionalArgs['instanceGroupManagerResource']);
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
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->recreateInstances();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersRecreateInstancesRequest $instanceGroupManagersRecreateInstancesRequestResource
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
    public function recreateInstances(array $optionalArgs = [])
    {
        $request = new RecreateInstancesInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersRecreateInstancesRequestResource'])) {
            $request->setInstanceGroupManagersRecreateInstancesRequestResource($optionalArgs['instanceGroupManagersRecreateInstancesRequestResource']);
        }

        return $this->startCall(
            'RecreateInstances',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->resize();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type int $size
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
    public function resize(array $optionalArgs = [])
    {
        $request = new ResizeInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['size'])) {
            $request->setSize($optionalArgs['size']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Resize',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->setInstanceTemplate();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersSetInstanceTemplateRequest $instanceGroupManagersSetInstanceTemplateRequestResource
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
    public function setInstanceTemplate(array $optionalArgs = [])
    {
        $request = new SetInstanceTemplateInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersSetInstanceTemplateRequestResource'])) {
            $request->setInstanceGroupManagersSetInstanceTemplateRequestResource($optionalArgs['instanceGroupManagersSetInstanceTemplateRequestResource']);
        }

        return $this->startCall(
            'SetInstanceTemplate',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instanceGroupManagersClient = new InstanceGroupManagersClient();
     * try {
     *     $response = $instanceGroupManagersClient->setTargetPools();
     * } finally {
     *     $instanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $requestId
     *     @type InstanceGroupManagersSetTargetPoolsRequest $instanceGroupManagersSetTargetPoolsRequestResource
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
    public function setTargetPools(array $optionalArgs = [])
    {
        $request = new SetTargetPoolsInstanceGroupManagerRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceGroupManagersSetTargetPoolsRequestResource'])) {
            $request->setInstanceGroupManagersSetTargetPoolsRequestResource($optionalArgs['instanceGroupManagersSetTargetPoolsRequestResource']);
        }

        return $this->startCall(
            'SetTargetPools',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
