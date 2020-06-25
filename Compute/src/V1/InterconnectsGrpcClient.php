<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InterconnectsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInterconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInterconnectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInterconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInterconnectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Interconnect', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetDiagnosticsInterconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDiagnostics(\Google\Cloud\Compute\V1\GetDiagnosticsInterconnectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/GetDiagnostics',
        $argument,
        ['\Google\Cloud\Compute\V1\InterconnectsGetDiagnosticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInterconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInterconnectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInterconnectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInterconnectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InterconnectList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchInterconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchInterconnectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Interconnects/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
