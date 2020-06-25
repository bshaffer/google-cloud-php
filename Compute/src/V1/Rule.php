<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.Rule</code>
 */
class Rule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Rule.Action action = 1;</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Condition conditions = 2;</code>
     */
    private $conditions;
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>repeated string ins = 4;</code>
     */
    private $ins;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfig log_configs = 5;</code>
     */
    private $log_configs;
    /**
     * Generated from protobuf field <code>repeated string not_ins = 6;</code>
     */
    private $not_ins;
    /**
     * Generated from protobuf field <code>repeated string permissions = 7;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *     @type \Google\Cloud\Compute\V1\Condition[]|\Google\Protobuf\Internal\RepeatedField $conditions
     *     @type string $description
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ins
     *     @type \Google\Cloud\Compute\V1\LogConfig[]|\Google\Protobuf\Internal\RepeatedField $log_configs
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $not_ins
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $permissions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Rule.Action action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Rule.Action action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Rule_Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Condition conditions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Condition conditions = 2;</code>
     * @param \Google\Cloud\Compute\V1\Condition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Condition::class);
        $this->conditions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ins = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIns()
    {
        return $this->ins;
    }

    /**
     * Generated from protobuf field <code>repeated string ins = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ins = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfig log_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogConfigs()
    {
        return $this->log_configs;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LogConfig log_configs = 5;</code>
     * @param \Google\Cloud\Compute\V1\LogConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\LogConfig::class);
        $this->log_configs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string not_ins = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotIns()
    {
        return $this->not_ins;
    }

    /**
     * Generated from protobuf field <code>repeated string not_ins = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotIns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->not_ins = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string permissions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Generated from protobuf field <code>repeated string permissions = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->permissions = $arr;

        return $this;
    }

}

