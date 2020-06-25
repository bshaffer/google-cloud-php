<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class TargetPoolsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AddHealthCheckTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddHealthCheck(\Google\Cloud\Compute\V1\AddHealthCheckTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/AddHealthCheck',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AddInstanceTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddInstance(\Google\Cloud\Compute\V1\AddInstanceTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/AddInstance',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListTargetPoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListTargetPoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetPoolAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetPool', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetHealthTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetHealth(\Google\Cloud\Compute\V1\GetHealthTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/GetHealth',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetPoolInstanceHealth', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListTargetPoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListTargetPoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/List',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetPoolList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RemoveHealthCheckTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveHealthCheck(\Google\Cloud\Compute\V1\RemoveHealthCheckTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/RemoveHealthCheck',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\RemoveInstanceTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveInstance(\Google\Cloud\Compute\V1\RemoveInstanceTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/RemoveInstance',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetBackupTargetPoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetBackup(\Google\Cloud\Compute\V1\SetBackupTargetPoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetPools/SetBackup',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
