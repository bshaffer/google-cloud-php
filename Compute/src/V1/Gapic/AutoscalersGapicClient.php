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
use Google\Cloud\Compute\V1\AggregatedListAutoscalersRequest;
use Google\Cloud\Compute\V1\Autoscaler;
use Google\Cloud\Compute\V1\AutoscalerAggregatedList;
use Google\Cloud\Compute\V1\AutoscalerList;
use Google\Cloud\Compute\V1\DeleteAutoscalerRequest;
use Google\Cloud\Compute\V1\GetAutoscalerRequest;
use Google\Cloud\Compute\V1\InsertAutoscalerRequest;
use Google\Cloud\Compute\V1\ListAutoscalersRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\PatchAutoscalerRequest;
use Google\Cloud\Compute\V1\UpdateAutoscalerRequest;

/**
 * Service Description: The Autoscalers API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $autoscalersClient = new AutoscalersClient();
 * try {
 *     $project = '';
 *     $response = $autoscalersClient->aggregatedList($project);
 * } finally {
 *     $autoscalersClient->close();
 * }
 * ```
 */
class AutoscalersGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.Autoscalers';

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
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/autoscalers_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/autoscalers_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/autoscalers_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/autoscalers_rest_client_config.php',
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
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
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
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
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
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Retrieves an aggregated list of autoscalers.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $project = '';
     *     $response = $autoscalersClient->aggregatedList($project);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          A filter expression that filters resources listed in the response. The expression must specify the field name, a comparison operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The comparison operator must be either `=`, `!=`, `>`, or `<`.
     *
     *          For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`.
     *
     *          You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels.
     *
     *          To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ```
     *     @type bool $includeAllScopes
     *          Indicates whether every visible scope for each scope type (zone, region, global) should be included in the response. For new resource types added after this field, the flag has no effect as new resource types will always include every visible scope for each scope type in response. For resource types which predate this field, if this flag is omitted or false, only scopes of the scope types where the resource type is expected to be found will be included.
     *     @type int $maxResults
     *          The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $orderBy
     *          Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name.
     *
     *          You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first.
     *
     *          Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $pageToken
     *          Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\AutoscalerAggregatedList
     *
     * @throws ApiException if the remote call fails
     */
    public function aggregatedList($project, array $optionalArgs = [])
    {
        $request = new AggregatedListAutoscalersRequest();
        $request->setProject($project);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['includeAllScopes'])) {
            $request->setIncludeAllScopes($optionalArgs['includeAllScopes']);
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
            'AggregatedList',
            AutoscalerAggregatedList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes the specified autoscaler.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $autoscaler = '';
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->delete($autoscaler, $project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $autoscaler   Name of the autoscaler to delete.
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $requestId
     *          An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *          For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
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
     */
    public function delete($autoscaler, $project, $zone, array $optionalArgs = [])
    {
        $request = new DeleteAutoscalerRequest();
        $request->setAutoscaler($autoscaler);
        $request->setProject($project);
        $request->setZone($zone);
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
     * Returns the specified autoscaler resource. Gets a list of available autoscalers by making a list() request.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $autoscaler = '';
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->get($autoscaler, $project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $autoscaler   Name of the autoscaler to return.
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Autoscaler
     *
     * @throws ApiException if the remote call fails
     */
    public function get($autoscaler, $project, $zone, array $optionalArgs = [])
    {
        $request = new GetAutoscalerRequest();
        $request->setAutoscaler($autoscaler);
        $request->setProject($project);
        $request->setZone($zone);

        return $this->startCall(
            'Get',
            Autoscaler::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates an autoscaler in the specified project using the data included in the request.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->insert($project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type Autoscaler $autoscalerResource
     *     @type string $requestId
     *          An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *          For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
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
     */
    public function insert($project, $zone, array $optionalArgs = [])
    {
        $request = new InsertAutoscalerRequest();
        $request->setProject($project);
        $request->setZone($zone);
        if (isset($optionalArgs['autoscalerResource'])) {
            $request->setAutoscalerResource($optionalArgs['autoscalerResource']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Insert',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves a list of autoscalers contained within the specified zone.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->list_($project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          A filter expression that filters resources listed in the response. The expression must specify the field name, a comparison operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The comparison operator must be either `=`, `!=`, `>`, or `<`.
     *
     *          For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`.
     *
     *          You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels.
     *
     *          To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ```
     *     @type int $maxResults
     *          The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $orderBy
     *          Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name.
     *
     *          You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first.
     *
     *          Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $pageToken
     *          Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\AutoscalerList
     *
     * @throws ApiException if the remote call fails
     */
    public function list_($project, $zone, array $optionalArgs = [])
    {
        $request = new ListAutoscalersRequest();
        $request->setProject($project);
        $request->setZone($zone);
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
            AutoscalerList::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates an autoscaler in the specified project using the data included in the request. This method supports PATCH semantics and uses the JSON merge patch format and processing rules.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->patch($project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $autoscaler
     *          Name of the autoscaler to patch.
     *     @type Autoscaler $autoscalerResource
     *     @type string $requestId
     *          An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *          For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
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
     */
    public function patch($project, $zone, array $optionalArgs = [])
    {
        $request = new PatchAutoscalerRequest();
        $request->setProject($project);
        $request->setZone($zone);
        if (isset($optionalArgs['autoscaler'])) {
            $request->setAutoscaler($optionalArgs['autoscaler']);
        }
        if (isset($optionalArgs['autoscalerResource'])) {
            $request->setAutoscalerResource($optionalArgs['autoscalerResource']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Patch',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates an autoscaler in the specified project using the data included in the request.
     *
     * Sample code:
     * ```
     * $autoscalersClient = new AutoscalersClient();
     * try {
     *     $project = '';
     *     $zone = '';
     *     $response = $autoscalersClient->update($project, $zone);
     * } finally {
     *     $autoscalersClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $zone         Name of the zone for this request.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $autoscaler
     *          Name of the autoscaler to update.
     *     @type Autoscaler $autoscalerResource
     *     @type string $requestId
     *          An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *          For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *          The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
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
     */
    public function update($project, $zone, array $optionalArgs = [])
    {
        $request = new UpdateAutoscalerRequest();
        $request->setProject($project);
        $request->setZone($zone);
        if (isset($optionalArgs['autoscaler'])) {
            $request->setAutoscaler($optionalArgs['autoscaler']);
        }
        if (isset($optionalArgs['autoscalerResource'])) {
            $request->setAutoscalerResource($optionalArgs['autoscalerResource']);
        }
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        return $this->startCall(
            'Update',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
