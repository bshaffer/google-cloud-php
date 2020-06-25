<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class ImagesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeprecateImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Deprecate(\Google\Cloud\Compute\V1\DeprecateImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/Deprecate',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\Image', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetFromFamilyImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFromFamily(\Google\Cloud\Compute\V1\GetFromFamilyImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/GetFromFamily',
        $argument,
        ['\Google\Cloud\Compute\V1\Image', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetIamPolicyImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Compute\V1\GetIamPolicyImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListImagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListImagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/List',
        $argument,
        ['\Google\Cloud\Compute\V1\ImageList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetIamPolicyImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Compute\V1\SetIamPolicyImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Compute\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetLabelsImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetLabels(\Google\Cloud\Compute\V1\SetLabelsImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/SetLabels',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.Images/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
