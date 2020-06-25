<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InstanceTemplatesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetIamPolicyInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Compute\V1\GetIamPolicyInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInstanceTemplatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInstanceTemplatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InstanceTemplateList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetIamPolicyInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Compute\V1\SetIamPolicyInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsInstanceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsInstanceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InstanceTemplates/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
