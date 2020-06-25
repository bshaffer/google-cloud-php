<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class ResourcePoliciesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListResourcePoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListResourcePoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\ResourcePolicyAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\ResourcePolicy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetIamPolicyResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Compute\V1\GetIamPolicyResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListResourcePoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListResourcePoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/List',
        $argument,
        ['\Google\Cloud\Compute\V1\ResourcePolicyList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetIamPolicyResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Compute\V1\SetIamPolicyResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsResourcePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsResourcePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ResourcePolicies/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
