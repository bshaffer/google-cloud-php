<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class NetworkEndpointGroupsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListNetworkEndpointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListNetworkEndpointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroupAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AttachNetworkEndpointsNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AttachNetworkEndpoints(\Google\Cloud\Compute\V1\AttachNetworkEndpointsNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/AttachNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DetachNetworkEndpointsNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DetachNetworkEndpoints(\Google\Cloud\Compute\V1\DetachNetworkEndpointsNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/DetachNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListNetworkEndpointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListNetworkEndpointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/List',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroupList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListNetworkEndpointsNetworkEndpointGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNetworkEndpoints(\Google\Cloud\Compute\V1\ListNetworkEndpointsNetworkEndpointGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/ListNetworkEndpoints',
        $argument,
        ['\Google\Cloud\Compute\V1\NetworkEndpointGroupsListNetworkEndpoints', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsNetworkEndpointGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsNetworkEndpointGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.NetworkEndpointGroups/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
