<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.DisplayDevice</code>
 */
class DisplayDevice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enable_display = 1;</code>
     */
    protected $enable_display = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_display
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enable_display = 1;</code>
     * @return bool
     */
    public function getEnableDisplay()
    {
        return $this->enable_display;
    }

    /**
     * Generated from protobuf field <code>bool enable_display = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDisplay($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_display = $var;

        return $this;
    }

}

