<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyDailyCycle</code>
 */
class ResourcePolicyDailyCycle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 days_in_cycle = 1;</code>
     */
    protected $days_in_cycle = 0;
    /**
     * Generated from protobuf field <code>string duration = 2;</code>
     */
    protected $duration = '';
    /**
     * Generated from protobuf field <code>string start_time = 3;</code>
     */
    protected $start_time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $days_in_cycle
     *     @type string $duration
     *     @type string $start_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 days_in_cycle = 1;</code>
     * @return int
     */
    public function getDaysInCycle()
    {
        return $this->days_in_cycle;
    }

    /**
     * Generated from protobuf field <code>int32 days_in_cycle = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDaysInCycle($var)
    {
        GPBUtil::checkInt32($var);
        $this->days_in_cycle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string duration = 2;</code>
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>string duration = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkString($var, True);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string start_time = 3;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Generated from protobuf field <code>string start_time = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

}

