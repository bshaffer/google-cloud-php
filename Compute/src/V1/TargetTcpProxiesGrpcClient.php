<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class TargetTcpProxiesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteTargetTcpProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteTargetTcpProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetTargetTcpProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetTargetTcpProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetTcpProxy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertTargetTcpProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertTargetTcpProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListTargetTcpProxiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListTargetTcpProxiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/List',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetTcpProxyList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetBackendServiceTargetTcpProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetBackendService(\Google\Cloud\Compute\V1\SetBackendServiceTargetTcpProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/SetBackendService',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetProxyHeaderTargetTcpProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetProxyHeader(\Google\Cloud\Compute\V1\SetProxyHeaderTargetTcpProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetTcpProxies/SetProxyHeader',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
