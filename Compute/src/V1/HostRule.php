<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.HostRule</code>
 */
class HostRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     */
    private $hosts;
    /**
     * Generated from protobuf field <code>string path_matcher = 3;</code>
     */
    protected $path_matcher = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $hosts
     *     @type string $path_matcher
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 1;</code>
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
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hosts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string path_matcher = 3;</code>
     * @return string
     */
    public function getPathMatcher()
    {
        return $this->path_matcher;
    }

    /**
     * Generated from protobuf field <code>string path_matcher = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPathMatcher($var)
    {
        GPBUtil::checkString($var, True);
        $this->path_matcher = $var;

        return $this;
    }

}

