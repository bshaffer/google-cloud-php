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
use Google\Cloud\Compute\V1\AddSignedUrlKeyBackendServiceRequest;
use Google\Cloud\Compute\V1\AggregatedListBackendServicesRequest;
use Google\Cloud\Compute\V1\BackendService;
use Google\Cloud\Compute\V1\BackendServiceAggregatedList;
use Google\Cloud\Compute\V1\BackendServiceGroupHealth;
use Google\Cloud\Compute\V1\BackendServiceList;
use Google\Cloud\Compute\V1\DeleteBackendServiceRequest;
use Google\Cloud\Compute\V1\DeleteSignedUrlKeyBackendServiceRequest;
use Google\Cloud\Compute\V1\GetBackendServiceRequest;
use Google\Cloud\Compute\V1\GetHealthBackendServiceRequest;
use Google\Cloud\Compute\V1\InsertBackendServiceRequest;
use Google\Cloud\Compute\V1\ListBackendServicesRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchBackendServiceRequest;
use Google\Cloud\Compute\V1\ResourceGroupReference;
use Google\Cloud\Compute\V1\SecurityPolicyReference;
use Google\Cloud\Compute\V1\SetSecurityPolicyBackendServiceRequest;
use Google\Cloud\Compute\V1\SignedUrlKey;
use Google\Cloud\Compute\V1\UpdateBackendServiceRequest;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $backendServicesClient = new BackendServicesClient();
 * try {
 *     $response = $backendServicesClient->addSignedUrlKey();
 * } finally {
 *     $backendServicesClient->close();
 * }
 * ```
 *
 * @experimental
 */
class BackendServicesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.BackendServices';

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
            'clientConfig' => __DIR__.'/../resources/backend_services_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/backend_services_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/backend_services_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/backend_services_rest_client_config.php',
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
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->addSignedUrlKey();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type string $requestId
     *     @type SignedUrlKey $signedUrlKeyResource
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
    public function addSignedUrlKey(array $optionalArgs = [])
    {
        $request = new AddSignedUrlKeyBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['signedUrlKeyResource'])) {
            $request->setSignedUrlKeyResource($optionalArgs['signedUrlKeyResource']);
        }

        return $this->startCall(
            'AddSignedUrlKey',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->aggregatedList();
     * } finally {
     *     $backendServicesClient->close();
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
     * @return \Google\Cloud\Compute\V1\BackendServiceAggregatedList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function aggregatedList(array $optionalArgs = [])
    {
        $request = new AggregatedListBackendServicesRequest();
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
            BackendServiceAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->delete();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
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
        $request = new DeleteBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
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
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->deleteSignedUrlKey();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type string $requestId
     *     @type string $keyName
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
    public function deleteSignedUrlKey(array $optionalArgs = [])
    {
        $request = new DeleteSignedUrlKeyBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['keyName'])) {
            $request->setKeyName($optionalArgs['keyName']);
        }

        return $this->startCall(
            'DeleteSignedUrlKey',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->get();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\BackendService
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'Get',
            BackendService::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->getHealth();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type ResourceGroupReference $resourceGroupReferenceResource
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\BackendServiceGroupHealth
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getHealth(array $optionalArgs = [])
    {
        $request = new GetHealthBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['resourceGroupReferenceResource'])) {
            $request->setResourceGroupReferenceResource($optionalArgs['resourceGroupReferenceResource']);
        }

        return $this->startCall(
            'GetHealth',
            BackendServiceGroupHealth::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->insert();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $requestId
     *     @type BackendService $backendServiceResource
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
        $request = new InsertBackendServiceRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['backendServiceResource'])) {
            $request->setBackendServiceResource($optionalArgs['backendServiceResource']);
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
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->list_();
     * } finally {
     *     $backendServicesClient->close();
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
     * @return \Google\Cloud\Compute\V1\BackendServiceList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListBackendServicesRequest();
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
            BackendServiceList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->patch();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type string $requestId
     *     @type BackendService $backendServiceResource
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
        $request = new PatchBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['backendServiceResource'])) {
            $request->setBackendServiceResource($optionalArgs['backendServiceResource']);
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
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->setSecurityPolicy();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type string $requestId
     *     @type SecurityPolicyReference $securityPolicyReferenceResource
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
    public function setSecurityPolicy(array $optionalArgs = [])
    {
        $request = new SetSecurityPolicyBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['securityPolicyReferenceResource'])) {
            $request->setSecurityPolicyReferenceResource($optionalArgs['securityPolicyReferenceResource']);
        }

        return $this->startCall(
            'SetSecurityPolicy',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $backendServicesClient = new BackendServicesClient();
     * try {
     *     $response = $backendServicesClient->update();
     * } finally {
     *     $backendServicesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $backendService
     *     @type string $project
     *     @type string $requestId
     *     @type BackendService $backendServiceResource
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
        $request = new UpdateBackendServiceRequest();
        if (isset($optionalArgs['backendService'])) {
            $request->setBackendService($optionalArgs['backendService']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['backendServiceResource'])) {
            $request->setBackendServiceResource($optionalArgs['backendServiceResource']);
        }

        return $this->startCall(
            'Update',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
