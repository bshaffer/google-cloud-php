<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetPoolsRemoveHealthCheckRequest</code>
 */
class TargetPoolsRemoveHealthCheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HealthCheckReference health_checks = 1;</code>
     */
    private $health_checks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\HealthCheckReference[]|\Google\Protobuf\Internal\RepeatedField $health_checks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HealthCheckReference health_checks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHealthChecks()
    {
        return $this->health_checks;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HealthCheckReference health_checks = 1;</code>
     * @param \Google\Cloud\Compute\V1\HealthCheckReference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHealthChecks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HealthCheckReference::class);
        $this->health_checks = $arr;

        return $this;
    }

}

