<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class RegionTargetHttpsProxiesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteRegionTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteRegionTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetRegionTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetRegionTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetHttpsProxy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertRegionTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertRegionTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListRegionTargetHttpsProxiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListRegionTargetHttpsProxiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/List',
        $argument,
        ['\Google\Cloud\Compute\V1\TargetHttpsProxyList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetSslCertificatesRegionTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetSslCertificates(\Google\Cloud\Compute\V1\SetSslCertificatesRegionTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/SetSslCertificates',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetUrlMapRegionTargetHttpsProxyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUrlMap(\Google\Cloud\Compute\V1\SetUrlMapRegionTargetHttpsProxyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.RegionTargetHttpsProxies/SetUrlMap',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
