<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleMatcher</code>
 */
class SecurityPolicyRuleMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 1;</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 2;</code>
     */
    protected $expr = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 3;</code>
     */
    protected $versioned_expr = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig $config
     *     @type \Google\Cloud\Compute\V1\Expr $expr
     *     @type int $versioned_expr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 1;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcherConfig config = 1;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 2;</code>
     * @return \Google\Cloud\Compute\V1\Expr
     */
    public function getExpr()
    {
        return $this->expr;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Expr expr = 2;</code>
     * @param \Google\Cloud\Compute\V1\Expr $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Expr::class);
        $this->expr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 3;</code>
     * @return int
     */
    public function getVersionedExpr()
    {
        return $this->versioned_expr;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr versioned_expr = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVersionedExpr($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher_VersionedExpr::class);
        $this->versioned_expr = $var;

        return $this;
    }

}

