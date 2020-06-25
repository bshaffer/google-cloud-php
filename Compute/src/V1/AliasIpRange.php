<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.AliasIpRange</code>
 */
class AliasIpRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     */
    protected $ip_cidr_range = '';
    /**
     * Generated from protobuf field <code>string subnetwork_range_name = 2;</code>
     */
    protected $subnetwork_range_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_cidr_range
     *     @type string $subnetwork_range_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return $this->ip_cidr_range;
    }

    /**
     * Generated from protobuf field <code>string ip_cidr_range = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subnetwork_range_name = 2;</code>
     * @return string
     */
    public function getSubnetworkRangeName()
    {
        return $this->subnetwork_range_name;
    }

    /**
     * Generated from protobuf field <code>string subnetwork_range_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetworkRangeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork_range_name = $var;

        return $this;
    }

}

