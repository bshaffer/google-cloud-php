<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetVpnGateway</code>
 */
class TargetVpnGateway extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>repeated string forwarding_rules = 3;</code>
     */
    private $forwarding_rules;
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string kind = 5;</code>
     */
    protected $kind = '';
    /**
     * Generated from protobuf field <code>string name = 6;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string network = 7;</code>
     */
    protected $network = '';
    /**
     * Generated from protobuf field <code>string region = 8;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>string self_link = 9;</code>
     */
    protected $self_link = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetVpnGateway.Status status = 10;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated string tunnels = 11;</code>
     */
    private $tunnels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *     @type string $description
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $forwarding_rules
     *     @type string $id
     *     @type string $kind
     *     @type string $name
     *     @type string $network
     *     @type string $region
     *     @type string $self_link
     *     @type int $status
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tunnels
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
     * Generated from protobuf field <code>repeated string forwarding_rules = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getForwardingRules()
    {
        return $this->forwarding_rules;
    }

    /**
     * Generated from protobuf field <code>repeated string forwarding_rules = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setForwardingRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->forwarding_rules = $arr;

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
     * Generated from protobuf field <code>string kind = 5;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 5;</code>
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
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 6;</code>
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
     * Generated from protobuf field <code>string network = 7;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Generated from protobuf field <code>string network = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region = 8;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 8;</code>
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
     * Generated from protobuf field <code>string self_link = 9;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Generated from protobuf field <code>string self_link = 9;</code>
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
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetVpnGateway.Status status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetVpnGateway.Status status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetVpnGateway_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string tunnels = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTunnels()
    {
        return $this->tunnels;
    }

    /**
     * Generated from protobuf field <code>repeated string tunnels = 11;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTunnels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tunnels = $arr;

        return $this;
    }

}

