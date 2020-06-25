<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class ProjectsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DisableXpnHostProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DisableXpnHost(\Google\Cloud\Compute\V1\DisableXpnHostProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/DisableXpnHost',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DisableXpnResourceProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DisableXpnResource(\Google\Cloud\Compute\V1\DisableXpnResourceProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/DisableXpnResource',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\EnableXpnHostProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EnableXpnHost(\Google\Cloud\Compute\V1\EnableXpnHostProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/EnableXpnHost',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\EnableXpnResourceProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EnableXpnResource(\Google\Cloud\Compute\V1\EnableXpnResourceProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/EnableXpnResource',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetXpnHostProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetXpnHost(\Google\Cloud\Compute\V1\GetXpnHostProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/GetXpnHost',
        $argument,
        ['\Google\Cloud\Compute\V1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetXpnResourcesProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetXpnResources(\Google\Cloud\Compute\V1\GetXpnResourcesProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/GetXpnResources',
        $argument,
        ['\Google\Cloud\Compute\V1\ProjectsGetXpnResources', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListXpnHostsProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListXpnHosts(\Google\Cloud\Compute\V1\ListXpnHostsProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/ListXpnHosts',
        $argument,
        ['\Google\Cloud\Compute\V1\XpnHostList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\MoveDiskProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MoveDisk(\Google\Cloud\Compute\V1\MoveDiskProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/MoveDisk',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\MoveInstanceProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MoveInstance(\Google\Cloud\Compute\V1\MoveInstanceProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/MoveInstance',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetCommonInstanceMetadataProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetCommonInstanceMetadata(\Google\Cloud\Compute\V1\SetCommonInstanceMetadataProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/SetCommonInstanceMetadata',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetDefaultNetworkTierProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetDefaultNetworkTier(\Google\Cloud\Compute\V1\SetDefaultNetworkTierProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/SetDefaultNetworkTier',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetUsageExportBucketProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetUsageExportBucket(\Google\Cloud\Compute\V1\SetUsageExportBucketProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Projects/SetUsageExportBucket',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
