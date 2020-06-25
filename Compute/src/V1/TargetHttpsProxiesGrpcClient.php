<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class TargetHttpsProxiesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListTargetHttpsProxiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListTargetHttpsProxiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetHttpsProxyAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetHttpsProxy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListTargetHttpsProxiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListTargetHttpsProxiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/List',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetHttpsProxyList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetQuicOverrideTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetQuicOverride(\Google\Cloud\Compute\V1\SetQuicOverrideTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/SetQuicOverride',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSslCertificatesTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSslCertificates(\Google\Cloud\Compute\V1\SetSslCertificatesTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/SetSslCertificates',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSslPolicyTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSslPolicy(\Google\Cloud\Compute\V1\SetSslPolicyTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/SetSslPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetUrlMapTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUrlMap(\Google\Cloud\Compute\V1\SetUrlMapTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.TargetHttpsProxies/SetUrlMap',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
