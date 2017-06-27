<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Monitoring\V3 {

  use Google\Cloud\Core\RequestWrapper;
  use Google\Cloud\Core\RestTrait;
  use Google\Cloud\Core\UriTrait;
  use GuzzleHttp\Psr7\Request;
  use Google\GAX\PathTemplate;


  // Manages metric descriptors, monitored resource descriptors, and
  // time series data.
  class MetricServiceJsonClient {
    use UriTrait;
    use RestTrait;
    private $hostname;

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     */
    public function __construct($hostname, $opts) {
      $this->hostname = $hostname;
      $this->setRequestWrapper(new RequestWrapper());
    }

    /**
     * Creates or adds data to one or more time series.
     * The response is empty if all time series in the request were written.
     * If any time series could not be written, a corresponding failure message is
     * included in the error response.
     * @param \Google\Monitoring\V3\CreateTimeSeriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTimeSeries(\Google\Monitoring\V3\CreateTimeSeriesRequest $argument,
      $metadata = [], $options = []) {
      // from option (google.api.http)
      return $this->send(
        $argument,
        ['post' => '/v3/{name=projects/*}/timeSeries', 'body' => "*"],
        ['\Google\Protobuf\GPBEmpty', 'serializeFromJsonString'],
        $options
      );
    }

    /**
     * This method
     *
     * @param string $resource The resource type used for the request.
     * @param string $method The method used for the request.
     * @param array $options [optional] Options used to build out the request.
     * @return array
     */
    public function send(\Google\Protobuf\Internal\Message $argument, array $httpOptions,
      array $deserialize, array $options = [])
    {
      $requestOptions = $this->pluckArray([
        'restOptions',
        'retries',
        'requestTimeout'
      ], $options);

      $httpOptions = $this->pluckArray([
        'get',
        'post',
        'put',
        'delete'
      ], $httpOptions);

      // determine URI and method from proto options
      $uri = reset($httpOptions);
      $method = key($httpOptions);

      // Render the full URI from the proto path
      $template = new PathTemplate($uri);
      $uri = $template->render(['name' => $argument->getName()]);
      $absoluteUri = sprintf('https://%s/%s', $this->hostname, $uri);

      // create the request object
      $request = new Request(
        $method,
        $absoluteUri,
        ['Content-Type' => 'application/json'],
        $argument->serializeToJsonString()
      );

      // make the request
      $message = $this->requestWrapper->send(
        $request,
        $requestOptions
      )->getBody();

      // deserialize the object
      if (is_array($deserialize)) {
        list($className, $deserializeFunc) = $deserialize;
        $obj = new $className();
        if (method_exists($obj, $deserializeFunc)) {
          $obj->$deserializeFunc($value);
        }

        // Wrapped in a fake call object because the *ServiceClient classes
        // are currently coupled to gRPC.
        return new FakeCall($obj);
      }

      throw new \Exception('Unable to deserialize object');
    }

    public function close()
    {
      // nothing to do!
    }
  }

  /**
   * Wrapper to handle gRPC coupling in the *ServiceClient classes.
   */
  class FakeCall
  {
    private $message;
    public function __construct($message)
    {
      $this->message = $message;
    }

    public function wait()
    {
      $status = new \stdClass();
      $status->code = \Grpc\STATUS_OK;
      return [$this->message, $status];
    }
  }
}
