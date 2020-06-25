<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class RegionInstanceGroupManagersGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AbandonInstancesRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AbandonInstances(\Google\Cloud\Compute\V1\AbandonInstancesRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/AbandonInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApplyUpdatesToInstances(\Google\Cloud\Compute\V1\ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/ApplyUpdatesToInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\CreateInstancesRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstances(\Google\Cloud\Compute\V1\CreateInstancesRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/CreateInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstancesRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstances(\Google\Cloud\Compute\V1\DeleteInstancesRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/DeleteInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceGroupManager', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListRegionInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListRegionInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/List',
        $argument,
        ['\Google\Cloud\Compute\V1\RegionInstanceGroupManagerList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListErrorsRegionInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListErrors(\Google\Cloud\Compute\V1\ListErrorsRegionInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/ListErrors',
        $argument,
        ['\Google\Cloud\Compute\V1\RegionInstanceGroupManagersListErrorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListManagedInstancesRegionInstanceGroupManagersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListManagedInstances(\Google\Cloud\Compute\V1\ListManagedInstancesRegionInstanceGroupManagersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/ListManagedInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\RegionInstanceGroupManagersListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RecreateInstancesRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RecreateInstances(\Google\Cloud\Compute\V1\RecreateInstancesRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/RecreateInstances',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ResizeRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Resize(\Google\Cloud\Compute\V1\ResizeRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/Resize',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetInstanceTemplateRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetInstanceTemplate(\Google\Cloud\Compute\V1\SetInstanceTemplateRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/SetInstanceTemplate',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetTargetPoolsRegionInstanceGroupManagerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetTargetPools(\Google\Cloud\Compute\V1\SetTargetPoolsRegionInstanceGroupManagerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionInstanceGroupManagers/SetTargetPools',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
