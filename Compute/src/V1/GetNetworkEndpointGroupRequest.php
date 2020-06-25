<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.GetNetworkEndpointGroupRequest</code>
 */
class GetNetworkEndpointGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string network_endpoint_group = 1;</code>
     */
    protected $network_endpoint_group = '';
    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    protected $zone = '';
    /**
     * Generated from protobuf field <code>string project = 3;</code>
     */
    protected $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_endpoint_group
     *     @type string $zone
     *     @type string $project
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string network_endpoint_group = 1;</code>
     * @return string
     */
    public function getNetworkEndpointGroup()
    {
        return $this->network_endpoint_group;
    }

    /**
     * Generated from protobuf field <code>string network_endpoint_group = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkEndpointGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_endpoint_group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project = 3;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

