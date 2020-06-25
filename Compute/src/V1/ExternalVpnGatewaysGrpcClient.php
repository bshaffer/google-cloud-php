<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class ExternalVpnGatewaysGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteExternalVpnGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteExternalVpnGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetExternalVpnGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetExternalVpnGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\ExternalVpnGateway', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertExternalVpnGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertExternalVpnGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListExternalVpnGatewaysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListExternalVpnGatewaysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/List',
        $argument,
        ['\Google\Cloud\Compute\V1\ExternalVpnGatewayList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\SetLabelsExternalVpnGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetLabels(\Google\Cloud\Compute\V1\SetLabelsExternalVpnGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/SetLabels',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\TestIamPermissionsExternalVpnGatewayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Compute\V1\TestIamPermissionsExternalVpnGatewayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.ExternalVpnGateways/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Compute\V1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
