<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InstanceGroupManagersGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AbandonInstancesInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AbandonInstances(\Google\Cloud\Compute\V1\AbandonInstancesInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/AbandonInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManagerAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ApplyUpdatesToInstancesInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApplyUpdatesToInstances(\Google\Cloud\Compute\V1\ApplyUpdatesToInstancesInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/ApplyUpdatesToInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\CreateInstancesInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstances(\Google\Cloud\Compute\V1\CreateInstancesInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/CreateInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstancesInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstances(\Google\Cloud\Compute\V1\DeleteInstancesInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/DeleteInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManager', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManagerList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListErrorsInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListErrors(\Google\Cloud\Compute\V1\ListErrorsInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/ListErrors',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManagersListErrorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListManagedInstancesInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListManagedInstances(\Google\Cloud\Compute\V1\ListManagedInstancesInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/ListManagedInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManagersListManagedInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RecreateInstancesInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RecreateInstances(\Google\Cloud\Compute\V1\RecreateInstancesInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/RecreateInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ResizeInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Resize(\Google\Cloud\Compute\V1\ResizeInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/Resize',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetInstanceTemplateInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetInstanceTemplate(\Google\Cloud\Compute\V1\SetInstanceTemplateInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/SetInstanceTemplate',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetTargetPoolsInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetTargetPools(\Google\Cloud\Compute\V1\SetTargetPoolsInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceGroupManagers/SetTargetPools',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
