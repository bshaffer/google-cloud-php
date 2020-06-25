<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InstanceGroupsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AddInstancesInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddInstances(\Google\Cloud\Compute\V1\AddInstancesInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/AddInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListInstanceGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListInstanceGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInstanceGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInstanceGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInstancesInstanceGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Google\Cloud\Compute\V1\ListInstancesInstanceGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/ListInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupsListInstances', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RemoveInstancesInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveInstances(\Google\Cloud\Compute\V1\RemoveInstancesInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/RemoveInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetNamedPortsInstanceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetNamedPorts(\Google\Cloud\Compute\V1\SetNamedPortsInstanceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroups/SetNamedPorts',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
