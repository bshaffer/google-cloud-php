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
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AbandonInstancesRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\CreateInstancesRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\DeleteInstancesRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\DeleteRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\GetRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\InsertRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\InstanceGroupManager;
use Google\Cloud\Compute\V1\ListErrorsRegionInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\ListManagedInstancesRegionInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\ListRegionInstanceGroupManagersRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\RecreateInstancesRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagerList;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersAbandonInstancesRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersCreateInstancesRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersDeleteInstancesRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersListErrorsResponse;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersListInstancesResponse;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersRecreateRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersSetTargetPoolsRequest;
use Google\Cloud\Compute\V1\RegionInstanceGroupManagersSetTemplateRequest;
use Google\Cloud\Compute\V1\ResizeRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\SetInstanceTemplateRegionInstanceGroupManagerRequest;
use Google\Cloud\Compute\V1\SetTargetPoolsRegionInstanceGroupManagerRequest;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
 * try {
 *     $response = $regionInstanceGroupManagersClient->abandonInstances();
 * } finally {
 *     $regionInstanceGroupManagersClient->close();
 * }
 * ```
 *
 * @experimental
 */
class RegionInstanceGroupManagersGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.RegionInstanceGroupManagers';

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
            'clientConfig' => __DIR__.'/../resources/region_instance_group_managers_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/region_instance_group_managers_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/region_instance_group_managers_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/region_instance_group_managers_rest_client_config.php',
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->abandonInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersAbandonInstancesRequest $regionInstanceGroupManagersAbandonInstancesRequestResource
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
        $request = new AbandonInstancesRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersAbandonInstancesRequestResource'])) {
            $request->setRegionInstanceGroupManagersAbandonInstancesRequestResource($optionalArgs['regionInstanceGroupManagersAbandonInstancesRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->applyUpdatesToInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type RegionInstanceGroupManagersApplyUpdatesRequest $regionInstanceGroupManagersApplyUpdatesRequestResource
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
        $request = new ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['regionInstanceGroupManagersApplyUpdatesRequestResource'])) {
            $request->setRegionInstanceGroupManagersApplyUpdatesRequestResource($optionalArgs['regionInstanceGroupManagersApplyUpdatesRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->createInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersCreateInstancesRequest $regionInstanceGroupManagersCreateInstancesRequestResource
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
        $request = new CreateInstancesRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersCreateInstancesRequestResource'])) {
            $request->setRegionInstanceGroupManagersCreateInstancesRequestResource($optionalArgs['regionInstanceGroupManagersCreateInstancesRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->delete();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
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
        $request = new DeleteRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->deleteInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersDeleteInstancesRequest $regionInstanceGroupManagersDeleteInstancesRequestResource
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
        $request = new DeleteInstancesRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersDeleteInstancesRequestResource'])) {
            $request->setRegionInstanceGroupManagersDeleteInstancesRequestResource($optionalArgs['regionInstanceGroupManagersDeleteInstancesRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->get();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
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
        $request = new GetRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->insert();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $region
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
        $request = new InsertRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->list_();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
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
     * @return \Google\Cloud\Compute\V1\RegionInstanceGroupManagerList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListRegionInstanceGroupManagersRequest();
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
            RegionInstanceGroupManagerList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->listErrors();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
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
     * @return \Google\Cloud\Compute\V1\RegionInstanceGroupManagersListErrorsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listErrors(array $optionalArgs = [])
    {
        $request = new ListErrorsRegionInstanceGroupManagersRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
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
            'ListErrors',
            RegionInstanceGroupManagersListErrorsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->listManagedInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
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
     * @return \Google\Cloud\Compute\V1\RegionInstanceGroupManagersListInstancesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listManagedInstances(array $optionalArgs = [])
    {
        $request = new ListManagedInstancesRegionInstanceGroupManagersRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
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
            'ListManagedInstances',
            RegionInstanceGroupManagersListInstancesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->patch();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
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
        $request = new PatchRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->recreateInstances();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersRecreateRequest $regionInstanceGroupManagersRecreateRequestResource
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
        $request = new RecreateInstancesRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersRecreateRequestResource'])) {
            $request->setRegionInstanceGroupManagersRecreateRequestResource($optionalArgs['regionInstanceGroupManagersRecreateRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->resize();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
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
        $request = new ResizeRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->setInstanceTemplate();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersSetTemplateRequest $regionInstanceGroupManagersSetTemplateRequestResource
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
        $request = new SetInstanceTemplateRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersSetTemplateRequestResource'])) {
            $request->setRegionInstanceGroupManagersSetTemplateRequestResource($optionalArgs['regionInstanceGroupManagersSetTemplateRequestResource']);
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
     * $regionInstanceGroupManagersClient = new RegionInstanceGroupManagersClient();
     * try {
     *     $response = $regionInstanceGroupManagersClient->setTargetPools();
     * } finally {
     *     $regionInstanceGroupManagersClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instanceGroupManager
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type RegionInstanceGroupManagersSetTargetPoolsRequest $regionInstanceGroupManagersSetTargetPoolsRequestResource
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
        $request = new SetTargetPoolsRegionInstanceGroupManagerRequest();
        if (isset($optionalArgs['instanceGroupManager'])) {
            $request->setInstanceGroupManager($optionalArgs['instanceGroupManager']);
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
        if (isset($optionalArgs['regionInstanceGroupManagersSetTargetPoolsRequestResource'])) {
            $request->setRegionInstanceGroupManagersSetTargetPoolsRequestResource($optionalArgs['regionInstanceGroupManagersSetTargetPoolsRequestResource']);
        }

        return $this->startCall(
            'SetTargetPools',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
