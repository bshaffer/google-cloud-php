<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePoliciesScopedList</code>
 */
class ResourcePoliciesScopedList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourcePolicy resource_policies = 1;</code>
     */
    private $resource_policies;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 2;</code>
     */
    protected $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\ResourcePolicy[]|\Google\Protobuf\Internal\RepeatedField $resource_policies
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourcePolicy resource_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourcePolicies()
    {
        return $this->resource_policies;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ResourcePolicy resource_policies = 1;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourcePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ResourcePolicy::class);
        $this->resource_policies = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 2;</code>
     * @return \Google\Cloud\Compute\V1\Warning
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 2;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

