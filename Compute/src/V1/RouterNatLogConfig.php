<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterNatLogConfig</code>
 */
class RouterNatLogConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enable = 1;</code>
     */
    protected $enable = false;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 2;</code>
     */
    protected $filter = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable
     *     @type int $filter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 2;</code>
     * @return int
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.RouterNatLogConfig.Filter filter = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\RouterNatLogConfig_Filter::class);
        $this->filter = $var;

        return $this;
    }

}

