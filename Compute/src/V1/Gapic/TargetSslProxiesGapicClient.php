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
use Google\Cloud\Compute\V1\DeleteTargetSslProxyRequest;
use Google\Cloud\Compute\V1\GetTargetSslProxyRequest;
use Google\Cloud\Compute\V1\InsertTargetSslProxyRequest;
use Google\Cloud\Compute\V1\ListTargetSslProxiesRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\SetBackendServiceTargetSslProxyRequest;
use Google\Cloud\Compute\V1\SetProxyHeaderTargetSslProxyRequest;
use Google\Cloud\Compute\V1\SetSslCertificatesTargetSslProxyRequest;
use Google\Cloud\Compute\V1\SetSslPolicyTargetSslProxyRequest;
use Google\Cloud\Compute\V1\SslPolicyReference;
use Google\Cloud\Compute\V1\TargetSslProxiesSetBackendServiceRequest;
use Google\Cloud\Compute\V1\TargetSslProxiesSetProxyHeaderRequest;
use Google\Cloud\Compute\V1\TargetSslProxiesSetSslCertificatesRequest;
use Google\Cloud\Compute\V1\TargetSslProxy;
use Google\Cloud\Compute\V1\TargetSslProxyList;

/**
 * Service Description:.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $targetSslProxiesClient = new TargetSslProxiesClient();
 * try {
 *     $response = $targetSslProxiesClient->delete();
 * } finally {
 *     $targetSslProxiesClient->close();
 * }
 * ```
 *
 * @experimental
 */
class TargetSslProxiesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.TargetSslProxies';

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
            'clientConfig' => __DIR__.'/../resources/target_ssl_proxies_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/target_ssl_proxies_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/target_ssl_proxies_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/target_ssl_proxies_rest_client_config.php',
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
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->delete();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
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
        $request = new DeleteTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
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
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->get();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
     *     @type string $project
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TargetSslProxy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new GetTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }

        return $this->startCall(
            'Get',
            TargetSslProxy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->insert();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $project
     *     @type string $requestId
     *     @type TargetSslProxy $targetSslProxyResource
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
        $request = new InsertTargetSslProxyRequest();
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetSslProxyResource'])) {
            $request->setTargetSslProxyResource($optionalArgs['targetSslProxyResource']);
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
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->list_();
     * } finally {
     *     $targetSslProxiesClient->close();
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
     * @return \Google\Cloud\Compute\V1\TargetSslProxyList
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function list_(array $optionalArgs = [])
    {
        $request = new ListTargetSslProxiesRequest();
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
            TargetSslProxyList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->setBackendService();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
     *     @type string $project
     *     @type string $requestId
     *     @type TargetSslProxiesSetBackendServiceRequest $targetSslProxiesSetBackendServiceRequestResource
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
    public function setBackendService(array $optionalArgs = [])
    {
        $request = new SetBackendServiceTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetSslProxiesSetBackendServiceRequestResource'])) {
            $request->setTargetSslProxiesSetBackendServiceRequestResource($optionalArgs['targetSslProxiesSetBackendServiceRequestResource']);
        }

        return $this->startCall(
            'SetBackendService',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->setProxyHeader();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
     *     @type string $project
     *     @type string $requestId
     *     @type TargetSslProxiesSetProxyHeaderRequest $targetSslProxiesSetProxyHeaderRequestResource
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
    public function setProxyHeader(array $optionalArgs = [])
    {
        $request = new SetProxyHeaderTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetSslProxiesSetProxyHeaderRequestResource'])) {
            $request->setTargetSslProxiesSetProxyHeaderRequestResource($optionalArgs['targetSslProxiesSetProxyHeaderRequestResource']);
        }

        return $this->startCall(
            'SetProxyHeader',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->setSslCertificates();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
     *     @type string $project
     *     @type string $requestId
     *     @type TargetSslProxiesSetSslCertificatesRequest $targetSslProxiesSetSslCertificatesRequestResource
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
    public function setSslCertificates(array $optionalArgs = [])
    {
        $request = new SetSslCertificatesTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['targetSslProxiesSetSslCertificatesRequestResource'])) {
            $request->setTargetSslProxiesSetSslCertificatesRequestResource($optionalArgs['targetSslProxiesSetSslCertificatesRequestResource']);
        }

        return $this->startCall(
            'SetSslCertificates',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sample code:
     * ```
     * $targetSslProxiesClient = new TargetSslProxiesClient();
     * try {
     *     $response = $targetSslProxiesClient->setSslPolicy();
     * } finally {
     *     $targetSslProxiesClient->close();
     * }
     * ```.
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $targetSslProxy
     *     @type string $project
     *     @type string $requestId
     *     @type SslPolicyReference $sslPolicyReferenceResource
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
    public function setSslPolicy(array $optionalArgs = [])
    {
        $request = new SetSslPolicyTargetSslProxyRequest();
        if (isset($optionalArgs['targetSslProxy'])) {
            $request->setTargetSslProxy($optionalArgs['targetSslProxy']);
        }
        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['sslPolicyReferenceResource'])) {
            $request->setSslPolicyReferenceResource($optionalArgs['sslPolicyReferenceResource']);
        }

        return $this->startCall(
            'SetSslPolicy',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
