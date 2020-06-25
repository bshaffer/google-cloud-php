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
use Google\Cloud\Compute\V1\AggregatedListSubnetworksRequest;
use Google\Cloud\Compute\V1\DeleteSubnetworkRequest;
use Google\Cloud\Compute\V1\ExpandIpCidrRangeSubnetworkRequest;
use Google\Cloud\Compute\V1\GetIamPolicySubnetworkRequest;
use Google\Cloud\Compute\V1\GetSubnetworkRequest;
use Google\Cloud\Compute\V1\InsertSubnetworkRequest;
use Google\Cloud\Compute\V1\ListSubnetworksRequest;
use Google\Cloud\Compute\V1\ListUsableSubnetworksRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchSubnetworkRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionSetPolicyRequest;
use Google\Cloud\Compute\V1\SetIamPolicySubnetworkRequest;
use Google\Cloud\Compute\V1\SetPrivateIpGoogleAccessSubnetworkRequest;
use Google\Cloud\Compute\V1\Subnetwork;
use Google\Cloud\Compute\V1\SubnetworkAggregatedList;
use Google\Cloud\Compute\V1\SubnetworkList;
use Google\Cloud\Compute\V1\SubnetworksExpandIpCidrRangeRequest;
use Google\Cloud\Compute\V1\SubnetworksSetPrivateIpGoogleAccessRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsSubnetworkRequest;
use Google\Cloud\Compute\V1\TestPermissionsRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use Google\Cloud\Compute\V1\UsableSubnetworksAggregatedList;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $subnetworksClient = new SubnetworksClient();
 * try {
 *     $response = $subnetworksClient->aggregatedList();
 * } finally {
 *     $subnetworksClient->close();
 * }
 * ```
 *
 * @experimental
 */
class SubnetworksGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.Subnetworks';

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
            'clientConfig' => __DIR__.'/../resources/subnetworks_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/subnetworks_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/subnetworks_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/subnetworks_rest_client_config.php',
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->aggregatedList();
     * } finally {
     *     $subnetworksClient->close();
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
     * @return \Google\Cloud\Compute\V1\SubnetworkAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListSubnetworksRequest();
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
            SubnetworkAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->delete();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $subnetwork
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
        $request = new DeleteSubnetworkRequest();
        if (isset($optionalArgs['subnetwork'])) {
            $request->setSubnetwork($optionalArgs['subnetwork']);
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->expandIpCidrRange();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $subnetwork
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type SubnetworksExpandIpCidrRangeRequest $subnetworksExpandIpCidrRangeRequestResource
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
    public function expandIpCidrRange(array $optionalArgs = [])
    {
        $request = new ExpandIpCidrRangeSubnetworkRequest();
        if (isset($optionalArgs['subnetwork'])) {
            $request->setSubnetwork($optionalArgs['subnetwork']);
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
        if (isset($optionalArgs['subnetworksExpandIpCidrRangeRequestResource'])) {
            $request->setSubnetworksExpandIpCidrRangeRequestResource($optionalArgs['subnetworksExpandIpCidrRangeRequestResource']);
        }

        return $this->startCall(
            'ExpandIpCidrRange',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->get();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $subnetwork
     *     @type string $project
     *     @type string $region
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Subnetwork
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetSubnetworkRequest();
        if (isset($optionalArgs['subnetwork'])) {
            $request->setSubnetwork($optionalArgs['subnetwork']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }

        return $this->startCall(
            'Get',
            Subnetwork::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->getIamPolicy();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $project
     *     @type string $region
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
        $request = new GetIamPolicySubnetworkRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->insert();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type Subnetwork $subnetworkResource
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
        $request = new InsertSubnetworkRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['subnetworkResource'])) {
            $request->setSubnetworkResource($optionalArgs['subnetworkResource']);
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->list_();
     * } finally {
     *     $subnetworksClient->close();
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
     * @return \Google\Cloud\Compute\V1\SubnetworkList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListSubnetworksRequest();
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
            SubnetworkList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->listUsable();
     * } finally {
     *     $subnetworksClient->close();
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
     * @return \Google\Cloud\Compute\V1\UsableSubnetworksAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listUsable(array $optionalArgs = [])
    {
        $request = new ListUsableSubnetworksRequest();
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
            'ListUsable',
            UsableSubnetworksAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->patch();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $subnetwork
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type int $drainTimeoutSeconds
     *     @type Subnetwork $subnetworkResource
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
        $request = new PatchSubnetworkRequest();
        if (isset($optionalArgs['subnetwork'])) {
            $request->setSubnetwork($optionalArgs['subnetwork']);
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
        if (isset($optionalArgs['drainTimeoutSeconds'])) {
            $request->setDrainTimeoutSeconds($optionalArgs['drainTimeoutSeconds']);
        }
        if (isset($optionalArgs['subnetworkResource'])) {
            $request->setSubnetworkResource($optionalArgs['subnetworkResource']);
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->setIamPolicy();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $project
     *     @type string $region
     *     @type RegionSetPolicyRequest $regionSetPolicyRequestResource
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
        $request = new SetIamPolicySubnetworkRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
        }
        if (isset($optionalArgs['regionSetPolicyRequestResource'])) {
            $request->setRegionSetPolicyRequestResource($optionalArgs['regionSetPolicyRequestResource']);
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
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->setPrivateIpGoogleAccess();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $subnetwork
     *     @type string $project
     *     @type string $region
     *     @type string $requestId
     *     @type SubnetworksSetPrivateIpGoogleAccessRequest $subnetworksSetPrivateIpGoogleAccessRequestResource
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
    public function setPrivateIpGoogleAccess(array $optionalArgs = [])
    {
        $request = new SetPrivateIpGoogleAccessSubnetworkRequest();
        if (isset($optionalArgs['subnetwork'])) {
            $request->setSubnetwork($optionalArgs['subnetwork']);
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
        if (isset($optionalArgs['subnetworksSetPrivateIpGoogleAccessRequestResource'])) {
            $request->setSubnetworksSetPrivateIpGoogleAccessRequestResource($optionalArgs['subnetworksSetPrivateIpGoogleAccessRequestResource']);
        }

        return $this->startCall(
            'SetPrivateIpGoogleAccess',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $subnetworksClient = new SubnetworksClient();
     * try {
     *     $response = $subnetworksClient->testIamPermissions();
     * } finally {
     *     $subnetworksClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $project
     *     @type string $region
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
        $request = new TestIamPermissionsSubnetworkRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['region'])) {
            $request->setRegion($optionalArgs['region']);
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
