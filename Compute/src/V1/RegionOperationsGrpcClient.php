<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class RegionOperationsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteRegionOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteRegionOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionOperations/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\DeleteRegionOperationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRegionOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetRegionOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionOperations/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListRegionOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListRegionOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionOperations/List',
        $argument,
        ['\Google\Cloud\Compute\V1\OperationList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\WaitRegionOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Wait(\Google\Cloud\Compute\V1\WaitRegionOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionOperations/Wait',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
