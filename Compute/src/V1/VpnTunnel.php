<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnTunnel</code>
 */
class VpnTunnel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     */
    protected $creation_timestamp = '';
    /**
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string detailed_status = 3;</code>
     */
    protected $detailed_status = '';
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>int32 ike_version = 5;</code>
     */
    protected $ike_version = 0;
    /**
     * Generated from protobuf field <code>string kind = 6;</code>
     */
    protected $kind = '';
    /**
     * Generated from protobuf field <code>repeated string local_traffic_selector = 7;</code>
     */
    private $local_traffic_selector;
    /**
     * Generated from protobuf field <code>string name = 8;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string peer_external_gateway = 9;</code>
     */
    protected $peer_external_gateway = '';
    /**
     * Generated from protobuf field <code>int32 peer_external_gateway_interface = 10;</code>
     */
    protected $peer_external_gateway_interface = 0;
    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 11;</code>
     */
    protected $peer_gcp_gateway = '';
    /**
     * Generated from protobuf field <code>string peer_ip = 12;</code>
     */
    protected $peer_ip = '';
    /**
     * Generated from protobuf field <code>string region = 13;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>repeated string remote_traffic_selector = 14;</code>
     */
    private $remote_traffic_selector;
    /**
     * Generated from protobuf field <code>string router = 15;</code>
     */
    protected $router = '';
    /**
     * Generated from protobuf field <code>string self_link = 16;</code>
     */
    protected $self_link = '';
    /**
     * Generated from protobuf field <code>string shared_secret = 17;</code>
     */
    protected $shared_secret = '';
    /**
     * Generated from protobuf field <code>string shared_secret_hash = 18;</code>
     */
    protected $shared_secret_hash = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnTunnel.Status status = 19;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string target_vpn_gateway = 20;</code>
     */
    protected $target_vpn_gateway = '';
    /**
     * Generated from protobuf field <code>string vpn_gateway = 21;</code>
     */
    protected $vpn_gateway = '';
    /**
     * Generated from protobuf field <code>int32 vpn_gateway_interface = 22;</code>
     */
    protected $vpn_gateway_interface = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *     @type string $description
     *     @type string $detailed_status
     *     @type string $id
     *     @type int $ike_version
     *     @type string $kind
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $local_traffic_selector
     *     @type string $name
     *     @type string $peer_external_gateway
     *     @type int $peer_external_gateway_interface
     *     @type string $peer_gcp_gateway
     *     @type string $peer_ip
     *     @type string $region
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $remote_traffic_selector
     *     @type string $router
     *     @type string $self_link
     *     @type string $shared_secret
     *     @type string $shared_secret_hash
     *     @type int $status
     *     @type string $target_vpn_gateway
     *     @type string $vpn_gateway
     *     @type int $vpn_gateway_interface
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string detailed_status = 3;</code>
     * @return string
     */
    public function getDetailedStatus()
    {
        return $this->detailed_status;
    }

    /**
     * Generated from protobuf field <code>string detailed_status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDetailedStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->detailed_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ike_version = 5;</code>
     * @return int
     */
    public function getIkeVersion()
    {
        return $this->ike_version;
    }

    /**
     * Generated from protobuf field <code>int32 ike_version = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setIkeVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->ike_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string kind = 6;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string local_traffic_selector = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocalTrafficSelector()
    {
        return $this->local_traffic_selector;
    }

    /**
     * Generated from protobuf field <code>repeated string local_traffic_selector = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocalTrafficSelector($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->local_traffic_selector = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 8;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string peer_external_gateway = 9;</code>
     * @return string
     */
    public function getPeerExternalGateway()
    {
        return $this->peer_external_gateway;
    }

    /**
     * Generated from protobuf field <code>string peer_external_gateway = 9;</code>
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
     * Generated from protobuf field <code>int32 peer_external_gateway_interface = 10;</code>
     * @return int
     */
    public function getPeerExternalGatewayInterface()
    {
        return $this->peer_external_gateway_interface;
    }

    /**
     * Generated from protobuf field <code>int32 peer_external_gateway_interface = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPeerExternalGatewayInterface($var)
    {
        GPBUtil::checkInt32($var);
        $this->peer_external_gateway_interface = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 11;</code>
     * @return string
     */
    public function getPeerGcpGateway()
    {
        return $this->peer_gcp_gateway;
    }

    /**
     * Generated from protobuf field <code>string peer_gcp_gateway = 11;</code>
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
     * Generated from protobuf field <code>string peer_ip = 12;</code>
     * @return string
     */
    public function getPeerIp()
    {
        return $this->peer_ip;
    }

    /**
     * Generated from protobuf field <code>string peer_ip = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region = 13;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string remote_traffic_selector = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemoteTrafficSelector()
    {
        return $this->remote_traffic_selector;
    }

    /**
     * Generated from protobuf field <code>repeated string remote_traffic_selector = 14;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemoteTrafficSelector($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->remote_traffic_selector = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string router = 15;</code>
     * @return string
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * Generated from protobuf field <code>string router = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setRouter($var)
    {
        GPBUtil::checkString($var, True);
        $this->router = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string self_link = 16;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Generated from protobuf field <code>string self_link = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string shared_secret = 17;</code>
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->shared_secret;
    }

    /**
     * Generated from protobuf field <code>string shared_secret = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setSharedSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->shared_secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string shared_secret_hash = 18;</code>
     * @return string
     */
    public function getSharedSecretHash()
    {
        return $this->shared_secret_hash;
    }

    /**
     * Generated from protobuf field <code>string shared_secret_hash = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setSharedSecretHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->shared_secret_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnTunnel.Status status = 19;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.VpnTunnel.Status status = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\VpnTunnel_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string target_vpn_gateway = 20;</code>
     * @return string
     */
    public function getTargetVpnGateway()
    {
        return $this->target_vpn_gateway;
    }

    /**
     * Generated from protobuf field <code>string target_vpn_gateway = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetVpnGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_vpn_gateway = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string vpn_gateway = 21;</code>
     * @return string
     */
    public function getVpnGateway()
    {
        return $this->vpn_gateway;
    }

    /**
     * Generated from protobuf field <code>string vpn_gateway = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setVpnGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->vpn_gateway = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 vpn_gateway_interface = 22;</code>
     * @return int
     */
    public function getVpnGatewayInterface()
    {
        return $this->vpn_gateway_interface;
    }

    /**
     * Generated from protobuf field <code>int32 vpn_gateway_interface = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setVpnGatewayInterface($var)
    {
        GPBUtil::checkInt32($var);
        $this->vpn_gateway_interface = $var;

        return $this;
    }

}

