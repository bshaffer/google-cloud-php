<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.PacketMirroringFilter</code>
 */
class PacketMirroringFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string i_p_protocols = 1;</code>
     */
    private $i_p_protocols;
    /**
     * Generated from protobuf field <code>repeated string cidr_ranges = 2;</code>
     */
    private $cidr_ranges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $i_p_protocols
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $cidr_ranges
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string i_p_protocols = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIPProtocols()
    {
        return $this->i_p_protocols;
    }

    /**
     * Generated from protobuf field <code>repeated string i_p_protocols = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIPProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->i_p_protocols = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string cidr_ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCidrRanges()
    {
        return $this->cidr_ranges;
    }

    /**
     * Generated from protobuf field <code>repeated string cidr_ranges = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCidrRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cidr_ranges = $arr;

        return $this;
    }

}

