<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.ShieldedInstanceIntegrityPolicy</code>
 */
class ShieldedInstanceIntegrityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool update_auto_learn_policy = 1;</code>
     */
    protected $update_auto_learn_policy = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $update_auto_learn_policy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool update_auto_learn_policy = 1;</code>
     * @return bool
     */
    public function getUpdateAutoLearnPolicy()
    {
        return $this->update_auto_learn_policy;
    }

    /**
     * Generated from protobuf field <code>bool update_auto_learn_policy = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpdateAutoLearnPolicy($var)
    {
        GPBUtil::checkBool($var);
        $this->update_auto_learn_policy = $var;

        return $this;
    }

}

