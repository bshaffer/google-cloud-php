<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class RegionAutoscalersGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteRegionAutoscalerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteRegionAutoscalerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRegionAutoscalerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetRegionAutoscalerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Autoscaler', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertRegionAutoscalerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertRegionAutoscalerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListRegionAutoscalersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListRegionAutoscalersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/List',
        $argument,
        ['\Google\Cloud\Compute\V1\RegionAutoscalerList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchRegionAutoscalerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchRegionAutoscalerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\UpdateRegionAutoscalerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Google\Cloud\Compute\V1\UpdateRegionAutoscalerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionAutoscalers/Update',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
