<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string iam = 1;</code>
     */
    protected $iam = '';
    /**
     * Generated from protobuf field <code>string op = 2;</code>
     */
    protected $op = '';
    /**
     * Generated from protobuf field <code>string svc = 3;</code>
     */
    protected $svc = '';
    /**
     * Generated from protobuf field <code>string sys = 4;</code>
     */
    protected $sys = '';
    /**
     * Generated from protobuf field <code>repeated string values = 5;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iam
     *     @type string $op
     *     @type string $svc
     *     @type string $sys
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string iam = 1;</code>
     * @return string
     */
    public function getIam()
    {
        return $this->iam;
    }

    /**
     * Generated from protobuf field <code>string iam = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIam($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string svc = 3;</code>
     * @return string
     */
    public function getSvc()
    {
        return $this->svc;
    }

    /**
     * Generated from protobuf field <code>string svc = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSvc($var)
    {
        GPBUtil::checkString($var, True);
        $this->svc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sys = 4;</code>
     * @return string
     */
    public function getSys()
    {
        return $this->sys;
    }

    /**
     * Generated from protobuf field <code>string sys = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSys($var)
    {
        GPBUtil::checkString($var, True);
        $this->sys = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string values = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated string values = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}

