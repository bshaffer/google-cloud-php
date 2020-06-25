<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class RoutersGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListRoutersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListRoutersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\RouterAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Router', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetNatMappingInfoRoutersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNatMappingInfo(\Google\Cloud\Compute\V1\GetNatMappingInfoRoutersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/GetNatMappingInfo',
        $argument,
        ['\Google\Cloud\Compute\V1\VmEndpointNatMappingsList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRouterStatusRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRouterStatus(\Google\Cloud\Compute\V1\GetRouterStatusRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/GetRouterStatus',
        $argument,
        ['\Google\Cloud\Compute\V1\RouterStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListRoutersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListRoutersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/List',
        $argument,
        ['\Google\Cloud\Compute\V1\RouterList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PreviewRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Preview(\Google\Cloud\Compute\V1\PreviewRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Preview',
        $argument,
        ['\Google\Cloud\Compute\V1\RoutersPreviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateRouterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Google\Cloud\Compute\V1\UpdateRouterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Routers/Update',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
