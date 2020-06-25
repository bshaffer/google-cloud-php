<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class GlobalNetworkEndpointGroupsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AttachNetworkEndpointsGlobalNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AttachNetworkEndpoints(\Google\Cloud\Compute\V1\AttachNetworkEndpointsGlobalNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/AttachNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteGlobalNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteGlobalNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DetachNetworkEndpointsGlobalNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DetachNetworkEndpoints(\Google\Cloud\Compute\V1\DetachNetworkEndpointsGlobalNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/DetachNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetGlobalNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetGlobalNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertGlobalNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertGlobalNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListGlobalNetworkEndpointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListGlobalNetworkEndpointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/List',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroupList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListNetworkEndpointsGlobalNetworkEndpointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNetworkEndpoints(\Google\Cloud\Compute\V1\ListNetworkEndpointsGlobalNetworkEndpointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.GlobalNetworkEndpointGroups/ListNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroupsListNetworkEndpoints', 'decode'],
        $metadata, $options);
    }

}
