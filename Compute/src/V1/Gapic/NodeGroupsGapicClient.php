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
use Google\Cloud\Compute\V1\AddNodesNodeGroupRequest;
use Google\Cloud\Compute\V1\AggregatedListNodeGroupsRequest;
use Google\Cloud\Compute\V1\DeleteNodeGroupRequest;
use Google\Cloud\Compute\V1\DeleteNodesNodeGroupRequest;
use Google\Cloud\Compute\V1\GetIamPolicyNodeGroupRequest;
use Google\Cloud\Compute\V1\GetNodeGroupRequest;
use Google\Cloud\Compute\V1\InsertNodeGroupRequest;
use Google\Cloud\Compute\V1\ListNodeGroupsRequest;
use Google\Cloud\Compute\V1\ListNodesNodeGroupsRequest;
use Google\Cloud\Compute\V1\NodeGroup;
use Google\Cloud\Compute\V1\NodeGroupAggregatedList;
use Google\Cloud\Compute\V1\NodeGroupList;
use Google\Cloud\Compute\V1\NodeGroupsAddNodesRequest;
use Google\Cloud\Compute\V1\NodeGroupsDeleteNodesRequest;
use Google\Cloud\Compute\V1\NodeGroupsListNodes;
use Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchNodeGroupRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\SetIamPolicyNodeGroupRequest;
use Google\Cloud\Compute\V1\SetNodeTemplateNodeGroupRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsNodeGroupRequest;
use Google\Cloud\Compute\V1\TestPermissionsRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use Google\Cloud\Compute\V1\ZoneSetPolicyRequest;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $nodeGroupsClient = new NodeGroupsClient();
 * try {
 *     $response = $nodeGroupsClient->addNodes();
 * } finally {
 *     $nodeGroupsClient->close();
 * }
 * ```
 *
 * @experimental
 */
class NodeGroupsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.NodeGroups';

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
            'clientConfig' => __DIR__.'/../resources/node_groups_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/node_groups_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/node_groups_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/node_groups_rest_client_config.php',
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
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->addNodes();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
     *     @type string $requestId
     *     @type NodeGroupsAddNodesRequest $nodeGroupsAddNodesRequestResource
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
    public function addNodes(array $optionalArgs = [])
    {
        $request = new AddNodesNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['nodeGroupsAddNodesRequestResource'])) {
            $request->setNodeGroupsAddNodesRequestResource($optionalArgs['nodeGroupsAddNodesRequestResource']);
        }

        return $this->startCall(
            'AddNodes',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->aggregatedList();
     * } finally {
     *     $nodeGroupsClient->close();
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
     * @return \Google\Cloud\Compute\V1\NodeGroupAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListNodeGroupsRequest();
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
            NodeGroupAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->delete();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
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
        $request = new DeleteNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
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
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->deleteNodes();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
     *     @type string $requestId
     *     @type NodeGroupsDeleteNodesRequest $nodeGroupsDeleteNodesRequestResource
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
    public function deleteNodes(array $optionalArgs = [])
    {
        $request = new DeleteNodesNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['nodeGroupsDeleteNodesRequestResource'])) {
            $request->setNodeGroupsDeleteNodesRequestResource($optionalArgs['nodeGroupsDeleteNodesRequestResource']);
        }

        return $this->startCall(
            'DeleteNodes',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->get();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\NodeGroup
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
        }

        return $this->startCall(
            'Get',
            NodeGroup::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->getIamPolicy();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $zone
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getIamPolicy(array $optionalArgs = [])
    {
        $request = new GetIamPolicyNodeGroupRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->insert();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type int $initialNodeCount
     *     @type string $requestId
     *     @type NodeGroup $nodeGroupResource
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
        $request = new InsertNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['initialNodeCount'])) {
            $request->setInitialNodeCount($optionalArgs['initialNodeCount']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['nodeGroupResource'])) {
            $request->setNodeGroupResource($optionalArgs['nodeGroupResource']);
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
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->list_();
     * } finally {
     *     $nodeGroupsClient->close();
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
     * @return \Google\Cloud\Compute\V1\NodeGroupList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListNodeGroupsRequest();
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
            NodeGroupList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->listNodes();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
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
     * @return \Google\Cloud\Compute\V1\NodeGroupsListNodes
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listNodes(array $optionalArgs = [])
    {
        $request = new ListNodesNodeGroupsRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
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
            'ListNodes',
            NodeGroupsListNodes::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->patch();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
     *     @type string $requestId
     *     @type NodeGroup $nodeGroupResource
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
        $request = new PatchNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['nodeGroupResource'])) {
            $request->setNodeGroupResource($optionalArgs['nodeGroupResource']);
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
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->setIamPolicy();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $zone
     *     @type string $project
     *     @type ZoneSetPolicyRequest $zoneSetPolicyRequestResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function setIamPolicy(array $optionalArgs = [])
    {
        $request = new SetIamPolicyNodeGroupRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['zoneSetPolicyRequestResource'])) {
            $request->setZoneSetPolicyRequestResource($optionalArgs['zoneSetPolicyRequestResource']);
        }

        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->setNodeTemplate();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $nodeGroup
     *     @type string $requestId
     *     @type NodeGroupsSetNodeTemplateRequest $nodeGroupsSetNodeTemplateRequestResource
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
    public function setNodeTemplate(array $optionalArgs = [])
    {
        $request = new SetNodeTemplateNodeGroupRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['nodeGroup'])) {
            $request->setNodeGroup($optionalArgs['nodeGroup']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['nodeGroupsSetNodeTemplateRequestResource'])) {
            $request->setNodeGroupsSetNodeTemplateRequestResource($optionalArgs['nodeGroupsSetNodeTemplateRequestResource']);
        }

        return $this->startCall(
            'SetNodeTemplate',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $nodeGroupsClient = new NodeGroupsClient();
     * try {
     *     $response = $nodeGroupsClient->testIamPermissions();
     * } finally {
     *     $nodeGroupsClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $zone
     *     @type string $project
     *     @type TestPermissionsRequest $testPermissionsRequestResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TestPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function testIamPermissions(array $optionalArgs = [])
    {
        $request = new TestIamPermissionsNodeGroupRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['testPermissionsRequestResource'])) {
            $request->setTestPermissionsRequestResource($optionalArgs['testPermissionsRequestResource']);
        }

        return $this->startCall(
            'TestIamPermissions',
            TestPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
