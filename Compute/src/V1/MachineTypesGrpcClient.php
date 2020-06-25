<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class MachineTypesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListMachineTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListMachineTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.MachineTypes/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\MachineTypeAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetMachineTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetMachineTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.MachineTypes/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\MachineType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListMachineTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListMachineTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.MachineTypes/List',
        $argument,
        ['\Google\Cloud\Compute\V1\MachineTypeList', 'decode'],
        $metadata, $options);
    }

}
