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
use Google\Cloud\Compute\V1\AccessConfig;
use Google\Cloud\Compute\V1\AddAccessConfigInstanceRequest;
use Google\Cloud\Compute\V1\AddResourcePoliciesInstanceRequest;
use Google\Cloud\Compute\V1\AggregatedListInstancesRequest;
use Google\Cloud\Compute\V1\AttachDiskInstanceRequest;
use Google\Cloud\Compute\V1\AttachedDisk;
use Google\Cloud\Compute\V1\DeleteAccessConfigInstanceRequest;
use Google\Cloud\Compute\V1\DeleteInstanceRequest;
use Google\Cloud\Compute\V1\DetachDiskInstanceRequest;
use Google\Cloud\Compute\V1\DisplayDevice;
use Google\Cloud\Compute\V1\GetGuestAttributesInstanceRequest;
use Google\Cloud\Compute\V1\GetIamPolicyInstanceRequest;
use Google\Cloud\Compute\V1\GetInstanceRequest;
use Google\Cloud\Compute\V1\GetSerialPortOutputInstanceRequest;
use Google\Cloud\Compute\V1\GetShieldedInstanceIdentityInstanceRequest;
use Google\Cloud\Compute\V1\GuestAttributes;
use Google\Cloud\Compute\V1\InsertInstanceRequest;
use Google\Cloud\Compute\V1\Instance;
use Google\Cloud\Compute\V1\InstanceAggregatedList;
use Google\Cloud\Compute\V1\InstanceList;
use Google\Cloud\Compute\V1\InstanceListReferrers;
use Google\Cloud\Compute\V1\InstancesAddResourcePoliciesRequest;
use Google\Cloud\Compute\V1\InstancesRemoveResourcePoliciesRequest;
use Google\Cloud\Compute\V1\InstancesSetLabelsRequest;
use Google\Cloud\Compute\V1\InstancesSetMachineResourcesRequest;
use Google\Cloud\Compute\V1\InstancesSetMachineTypeRequest;
use Google\Cloud\Compute\V1\InstancesSetMinCpuPlatformRequest;
use Google\Cloud\Compute\V1\InstancesSetServiceAccountRequest;
use Google\Cloud\Compute\V1\InstancesStartWithEncryptionKeyRequest;
use Google\Cloud\Compute\V1\ListInstancesRequest;
use Google\Cloud\Compute\V1\ListReferrersInstancesRequest;
use Google\Cloud\Compute\V1\Metadata;
use Google\Cloud\Compute\V1\NetworkInterface;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RemoveResourcePoliciesInstanceRequest;
use Google\Cloud\Compute\V1\ResetInstanceRequest;
use Google\Cloud\Compute\V1\Scheduling;
use Google\Cloud\Compute\V1\SerialPortOutput;
use Google\Cloud\Compute\V1\SetDeletionProtectionInstanceRequest;
use Google\Cloud\Compute\V1\SetDiskAutoDeleteInstanceRequest;
use Google\Cloud\Compute\V1\SetIamPolicyInstanceRequest;
use Google\Cloud\Compute\V1\SetLabelsInstanceRequest;
use Google\Cloud\Compute\V1\SetMachineResourcesInstanceRequest;
use Google\Cloud\Compute\V1\SetMachineTypeInstanceRequest;
use Google\Cloud\Compute\V1\SetMetadataInstanceRequest;
use Google\Cloud\Compute\V1\SetMinCpuPlatformInstanceRequest;
use Google\Cloud\Compute\V1\SetSchedulingInstanceRequest;
use Google\Cloud\Compute\V1\SetServiceAccountInstanceRequest;
use Google\Cloud\Compute\V1\SetShieldedInstanceIntegrityPolicyInstanceRequest;
use Google\Cloud\Compute\V1\SetTagsInstanceRequest;
use Google\Cloud\Compute\V1\ShieldedInstanceConfig;
use Google\Cloud\Compute\V1\ShieldedInstanceIdentity;
use Google\Cloud\Compute\V1\ShieldedInstanceIntegrityPolicy;
use Google\Cloud\Compute\V1\SimulateMaintenanceEventInstanceRequest;
use Google\Cloud\Compute\V1\StartInstanceRequest;
use Google\Cloud\Compute\V1\StartWithEncryptionKeyInstanceRequest;
use Google\Cloud\Compute\V1\StopInstanceRequest;
use Google\Cloud\Compute\V1\Tags;
use Google\Cloud\Compute\V1\TestIamPermissionsInstanceRequest;
use Google\Cloud\Compute\V1\TestPermissionsRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use Google\Cloud\Compute\V1\UpdateAccessConfigInstanceRequest;
use Google\Cloud\Compute\V1\UpdateDisplayDeviceInstanceRequest;
use Google\Cloud\Compute\V1\UpdateInstanceRequest;
use Google\Cloud\Compute\V1\UpdateNetworkInterfaceInstanceRequest;
use Google\Cloud\Compute\V1\UpdateShieldedInstanceConfigInstanceRequest;
use Google\Cloud\Compute\V1\ZoneSetPolicyRequest;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $instancesClient = new InstancesClient();
 * try {
 *     $response = $instancesClient->addAccessConfig();
 * } finally {
 *     $instancesClient->close();
 * }
 * ```
 *
 * @experimental
 */
class InstancesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.Instances';

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
            'clientConfig' => __DIR__.'/../resources/instances_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/instances_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/instances_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/instances_rest_client_config.php',
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
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->addAccessConfig();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $networkInterface
     *     @type string $requestId
     *     @type AccessConfig $accessConfigResource
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
    public function addAccessConfig(array $optionalArgs = [])
    {
        $request = new AddAccessConfigInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['networkInterface'])) {
            $request->setNetworkInterface($optionalArgs['networkInterface']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['accessConfigResource'])) {
            $request->setAccessConfigResource($optionalArgs['accessConfigResource']);
        }

        return $this->startCall(
            'AddAccessConfig',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->addResourcePolicies();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesAddResourcePoliciesRequest $instancesAddResourcePoliciesRequestResource
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
    public function addResourcePolicies(array $optionalArgs = [])
    {
        $request = new AddResourcePoliciesInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesAddResourcePoliciesRequestResource'])) {
            $request->setInstancesAddResourcePoliciesRequestResource($optionalArgs['instancesAddResourcePoliciesRequestResource']);
        }

        return $this->startCall(
            'AddResourcePolicies',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->aggregatedList();
     * } finally {
     *     $instancesClient->close();
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
     * @return \Google\Cloud\Compute\V1\InstanceAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListInstancesRequest();
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
            InstanceAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->attachDisk();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type bool $forceAttach
     *     @type AttachedDisk $attachedDiskResource
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
    public function attachDisk(array $optionalArgs = [])
    {
        $request = new AttachDiskInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['forceAttach'])) {
            $request->setForceAttach($optionalArgs['forceAttach']);
        }
        if (isset($optionalArgs['attachedDiskResource'])) {
            $request->setAttachedDiskResource($optionalArgs['attachedDiskResource']);
        }

        return $this->startCall(
            'AttachDisk',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->delete();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
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
        $request = new DeleteInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
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
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->deleteAccessConfig();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $networkInterface
     *     @type string $requestId
     *     @type string $accessConfig
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
    public function deleteAccessConfig(array $optionalArgs = [])
    {
        $request = new DeleteAccessConfigInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['networkInterface'])) {
            $request->setNetworkInterface($optionalArgs['networkInterface']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['accessConfig'])) {
            $request->setAccessConfig($optionalArgs['accessConfig']);
        }

        return $this->startCall(
            'DeleteAccessConfig',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->detachDisk();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type string $deviceName
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
    public function detachDisk(array $optionalArgs = [])
    {
        $request = new DetachDiskInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['deviceName'])) {
            $request->setDeviceName($optionalArgs['deviceName']);
        }

        return $this->startCall(
            'DetachDisk',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->get();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Instance
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'Get',
            Instance::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->getGuestAttributes();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $queryPath
     *     @type string $variableKey
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\GuestAttributes
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getGuestAttributes(array $optionalArgs = [])
    {
        $request = new GetGuestAttributesInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['queryPath'])) {
            $request->setQueryPath($optionalArgs['queryPath']);
        }
        if (isset($optionalArgs['variableKey'])) {
            $request->setVariableKey($optionalArgs['variableKey']);
        }

        return $this->startCall(
            'GetGuestAttributes',
            GuestAttributes::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->getIamPolicy();
     * } finally {
     *     $instancesClient->close();
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
        $request = new GetIamPolicyInstanceRequest();
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
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->getSerialPortOutput();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type int $port
     *     @type string $start
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\SerialPortOutput
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getSerialPortOutput(array $optionalArgs = [])
    {
        $request = new GetSerialPortOutputInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['port'])) {
            $request->setPort($optionalArgs['port']);
        }
        if (isset($optionalArgs['start'])) {
            $request->setStart($optionalArgs['start']);
        }

        return $this->startCall(
            'GetSerialPortOutput',
            SerialPortOutput::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->getShieldedInstanceIdentity();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\ShieldedInstanceIdentity
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getShieldedInstanceIdentity(array $optionalArgs = [])
    {
        $request = new GetShieldedInstanceIdentityInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'GetShieldedInstanceIdentity',
            ShieldedInstanceIdentity::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->insert();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $zone
     *     @type string $project
     *     @type string $sourceInstanceTemplate
     *     @type string $requestId
     *     @type Instance $instanceResource
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
        $request = new InsertInstanceRequest();
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['sourceInstanceTemplate'])) {
            $request->setSourceInstanceTemplate($optionalArgs['sourceInstanceTemplate']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceResource'])) {
            $request->setInstanceResource($optionalArgs['instanceResource']);
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
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->list_();
     * } finally {
     *     $instancesClient->close();
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
     * @return \Google\Cloud\Compute\V1\InstanceList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListInstancesRequest();
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
            InstanceList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->listReferrers();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
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
     * @return \Google\Cloud\Compute\V1\InstanceListReferrers
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listReferrers(array $optionalArgs = [])
    {
        $request = new ListReferrersInstancesRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
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
            'ListReferrers',
            InstanceListReferrers::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->removeResourcePolicies();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesRemoveResourcePoliciesRequest $instancesRemoveResourcePoliciesRequestResource
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
    public function removeResourcePolicies(array $optionalArgs = [])
    {
        $request = new RemoveResourcePoliciesInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesRemoveResourcePoliciesRequestResource'])) {
            $request->setInstancesRemoveResourcePoliciesRequestResource($optionalArgs['instancesRemoveResourcePoliciesRequestResource']);
        }

        return $this->startCall(
            'RemoveResourcePolicies',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->reset();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
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
    public function reset(array $optionalArgs = [])
    {
        $request = new ResetInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Reset',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setDeletionProtection();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $resource
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type bool $deletionProtection
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
    public function setDeletionProtection(array $optionalArgs = [])
    {
        $request = new SetDeletionProtectionInstanceRequest();
        if (isset($optionalArgs['resource'])) {
            $request->setResource($optionalArgs['resource']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['deletionProtection'])) {
            $request->setDeletionProtection($optionalArgs['deletionProtection']);
        }

        return $this->startCall(
            'SetDeletionProtection',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setDiskAutoDelete();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type bool $autoDelete
     *     @type string $deviceName
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
    public function setDiskAutoDelete(array $optionalArgs = [])
    {
        $request = new SetDiskAutoDeleteInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['autoDelete'])) {
            $request->setAutoDelete($optionalArgs['autoDelete']);
        }
        if (isset($optionalArgs['deviceName'])) {
            $request->setDeviceName($optionalArgs['deviceName']);
        }

        return $this->startCall(
            'SetDiskAutoDelete',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setIamPolicy();
     * } finally {
     *     $instancesClient->close();
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
        $request = new SetIamPolicyInstanceRequest();
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
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setLabels();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesSetLabelsRequest $instancesSetLabelsRequestResource
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
    public function setLabels(array $optionalArgs = [])
    {
        $request = new SetLabelsInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesSetLabelsRequestResource'])) {
            $request->setInstancesSetLabelsRequestResource($optionalArgs['instancesSetLabelsRequestResource']);
        }

        return $this->startCall(
            'SetLabels',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setMachineResources();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesSetMachineResourcesRequest $instancesSetMachineResourcesRequestResource
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
    public function setMachineResources(array $optionalArgs = [])
    {
        $request = new SetMachineResourcesInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesSetMachineResourcesRequestResource'])) {
            $request->setInstancesSetMachineResourcesRequestResource($optionalArgs['instancesSetMachineResourcesRequestResource']);
        }

        return $this->startCall(
            'SetMachineResources',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setMachineType();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesSetMachineTypeRequest $instancesSetMachineTypeRequestResource
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
    public function setMachineType(array $optionalArgs = [])
    {
        $request = new SetMachineTypeInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesSetMachineTypeRequestResource'])) {
            $request->setInstancesSetMachineTypeRequestResource($optionalArgs['instancesSetMachineTypeRequestResource']);
        }

        return $this->startCall(
            'SetMachineType',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setMetadata();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type Metadata $metadataResource
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
    public function setMetadata(array $optionalArgs = [])
    {
        $request = new SetMetadataInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['metadataResource'])) {
            $request->setMetadataResource($optionalArgs['metadataResource']);
        }

        return $this->startCall(
            'SetMetadata',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setMinCpuPlatform();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesSetMinCpuPlatformRequest $instancesSetMinCpuPlatformRequestResource
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
    public function setMinCpuPlatform(array $optionalArgs = [])
    {
        $request = new SetMinCpuPlatformInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesSetMinCpuPlatformRequestResource'])) {
            $request->setInstancesSetMinCpuPlatformRequestResource($optionalArgs['instancesSetMinCpuPlatformRequestResource']);
        }

        return $this->startCall(
            'SetMinCpuPlatform',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setScheduling();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type Scheduling $schedulingResource
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
    public function setScheduling(array $optionalArgs = [])
    {
        $request = new SetSchedulingInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['schedulingResource'])) {
            $request->setSchedulingResource($optionalArgs['schedulingResource']);
        }

        return $this->startCall(
            'SetScheduling',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setServiceAccount();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesSetServiceAccountRequest $instancesSetServiceAccountRequestResource
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
    public function setServiceAccount(array $optionalArgs = [])
    {
        $request = new SetServiceAccountInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesSetServiceAccountRequestResource'])) {
            $request->setInstancesSetServiceAccountRequestResource($optionalArgs['instancesSetServiceAccountRequestResource']);
        }

        return $this->startCall(
            'SetServiceAccount',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setShieldedInstanceIntegrityPolicy();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type ShieldedInstanceIntegrityPolicy $shieldedInstanceIntegrityPolicyResource
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
    public function setShieldedInstanceIntegrityPolicy(array $optionalArgs = [])
    {
        $request = new SetShieldedInstanceIntegrityPolicyInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['shieldedInstanceIntegrityPolicyResource'])) {
            $request->setShieldedInstanceIntegrityPolicyResource($optionalArgs['shieldedInstanceIntegrityPolicyResource']);
        }

        return $this->startCall(
            'SetShieldedInstanceIntegrityPolicy',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->setTags();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type Tags $tagsResource
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
    public function setTags(array $optionalArgs = [])
    {
        $request = new SetTagsInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['tagsResource'])) {
            $request->setTagsResource($optionalArgs['tagsResource']);
        }

        return $this->startCall(
            'SetTags',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->simulateMaintenanceEvent();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
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
    public function simulateMaintenanceEvent(array $optionalArgs = [])
    {
        $request = new SimulateMaintenanceEventInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'SimulateMaintenanceEvent',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->start();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
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
    public function start(array $optionalArgs = [])
    {
        $request = new StartInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Start',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->startWithEncryptionKey();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type InstancesStartWithEncryptionKeyRequest $instancesStartWithEncryptionKeyRequestResource
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
    public function startWithEncryptionKey(array $optionalArgs = [])
    {
        $request = new StartWithEncryptionKeyInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instancesStartWithEncryptionKeyRequestResource'])) {
            $request->setInstancesStartWithEncryptionKeyRequestResource($optionalArgs['instancesStartWithEncryptionKeyRequestResource']);
        }

        return $this->startCall(
            'StartWithEncryptionKey',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->stop();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
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
    public function stop(array $optionalArgs = [])
    {
        $request = new StopInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Stop',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->testIamPermissions();
     * } finally {
     *     $instancesClient->close();
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
        $request = new TestIamPermissionsInstanceRequest();
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

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->update();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $mostDisruptiveAllowedAction
     *     @type string $minimalAction
     *     @type string $requestId
     *     @type Instance $instanceResource
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
    public function update(array $optionalArgs = [])
    {
        $request = new UpdateInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['mostDisruptiveAllowedAction'])) {
            $request->setMostDisruptiveAllowedAction($optionalArgs['mostDisruptiveAllowedAction']);
        }
        if (isset($optionalArgs['minimalAction'])) {
            $request->setMinimalAction($optionalArgs['minimalAction']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['instanceResource'])) {
            $request->setInstanceResource($optionalArgs['instanceResource']);
        }

        return $this->startCall(
            'Update',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->updateAccessConfig();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $networkInterface
     *     @type string $requestId
     *     @type AccessConfig $accessConfigResource
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
    public function updateAccessConfig(array $optionalArgs = [])
    {
        $request = new UpdateAccessConfigInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['networkInterface'])) {
            $request->setNetworkInterface($optionalArgs['networkInterface']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['accessConfigResource'])) {
            $request->setAccessConfigResource($optionalArgs['accessConfigResource']);
        }

        return $this->startCall(
            'UpdateAccessConfig',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->updateDisplayDevice();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type DisplayDevice $displayDeviceResource
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
    public function updateDisplayDevice(array $optionalArgs = [])
    {
        $request = new UpdateDisplayDeviceInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['displayDeviceResource'])) {
            $request->setDisplayDeviceResource($optionalArgs['displayDeviceResource']);
        }

        return $this->startCall(
            'UpdateDisplayDevice',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->updateNetworkInterface();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $networkInterface
     *     @type string $requestId
     *     @type NetworkInterface $networkInterfaceResource
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
    public function updateNetworkInterface(array $optionalArgs = [])
    {
        $request = new UpdateNetworkInterfaceInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['networkInterface'])) {
            $request->setNetworkInterface($optionalArgs['networkInterface']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['networkInterfaceResource'])) {
            $request->setNetworkInterfaceResource($optionalArgs['networkInterfaceResource']);
        }

        return $this->startCall(
            'UpdateNetworkInterface',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $instancesClient = new InstancesClient();
     * try {
     *     $response = $instancesClient->updateShieldedInstanceConfig();
     * } finally {
     *     $instancesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $requestId
     *     @type ShieldedInstanceConfig $shieldedInstanceConfigResource
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
    public function updateShieldedInstanceConfig(array $optionalArgs = [])
    {
        $request = new UpdateShieldedInstanceConfigInstanceRequest();
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
        }
        if (isset($optionalArgs['zone'])) {
            $request->setZone($optionalArgs['zone']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['shieldedInstanceConfigResource'])) {
            $request->setShieldedInstanceConfigResource($optionalArgs['shieldedInstanceConfigResource']);
        }

        return $this->startCall(
            'UpdateShieldedInstanceConfig',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
