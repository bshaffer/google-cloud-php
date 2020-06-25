<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGatewayStatusVpnConnection</code>
 */
class VpnGatewayStatusVpnConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string peer_external_gateway = 1;</code>
     */
    protected $peer_external_gateway = '';
    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 2;</code>
     */
    protected $peer_gcp_gateway = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 3;</code>
     */
    protected $state = null;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 4;</code>
     */
    private $tunnels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $peer_external_gateway
     *     @type string $peer_gcp_gateway
     *     @type \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState $state
     *     @type \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel[]|\Google\Protobuf\Internal\RepeatedField $tunnels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string peer_external_gateway = 1;</code>
     * @return string
     */
    public function getPeerExternalGateway()
    {
        return $this->peer_external_gateway;
    }

    /**
     * Generated from protobuf field <code>string peer_external_gateway = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerExternalGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_external_gateway = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 2;</code>
     * @return string
     */
    public function getPeerGcpGateway()
    {
        return $this->peer_gcp_gateway;
    }

    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerGcpGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_gcp_gateway = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 3;</code>
     * @return \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnGatewayStatusHighAvailabilityRequirementState state = 3;</code>
     * @param \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\VpnGatewayStatusHighAvailabilityRequirementState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTunnels()
    {
        return $this->tunnels;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayStatusTunnel tunnels = 4;</code>
     * @param \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTunnels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\VpnGatewayStatusTunnel::class);
        $this->tunnels = $arr;

        return $this;
    }

}

