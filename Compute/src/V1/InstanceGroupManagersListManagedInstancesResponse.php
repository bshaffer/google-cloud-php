<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagersListManagedInstancesResponse</code>
 */
class InstanceGroupManagersListManagedInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 1;</code>
     */
    private $managed_instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\ManagedInstance[]|\Google\Protobuf\Internal\RepeatedField $managed_instances
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManagedInstances()
    {
        return $this->managed_instances;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 1;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstance[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManagedInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ManagedInstance::class);
        $this->managed_instances = $arr;

        return $this;
    }

}

