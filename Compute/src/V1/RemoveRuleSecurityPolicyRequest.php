<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.RemoveRuleSecurityPolicyRequest</code>
 */
class RemoveRuleSecurityPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string project = 1;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string security_policy = 2;</code>
     */
    protected $security_policy = '';
    /**
     * Generated from protobuf field <code>int32 priority = 3;</code>
     */
    protected $priority = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *     @type string $security_policy
     *     @type int $priority
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string security_policy = 2;</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return $this->security_policy;
    }

    /**
     * Generated from protobuf field <code>string security_policy = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 priority = 3;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Generated from protobuf field <code>int32 priority = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

}

