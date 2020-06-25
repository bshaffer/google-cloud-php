<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class TargetSslProxiesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetSslProxy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListTargetSslProxiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListTargetSslProxiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/List',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetSslProxyList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetBackendServiceTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetBackendService(\Google\Cloud\Compute\V1\SetBackendServiceTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/SetBackendService',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetProxyHeaderTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetProxyHeader(\Google\Cloud\Compute\V1\SetProxyHeaderTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/SetProxyHeader',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSslCertificatesTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSslCertificates(\Google\Cloud\Compute\V1\SetSslCertificatesTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/SetSslCertificates',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSslPolicyTargetSslProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSslPolicy(\Google\Cloud\Compute\V1\SetSslPolicyTargetSslProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetSslProxies/SetSslPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
