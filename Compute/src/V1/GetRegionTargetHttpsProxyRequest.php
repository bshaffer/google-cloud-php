<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRegionTargetHttpsProxyRequest</code>
 */
class GetRegionTargetHttpsProxyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string target_https_proxy = 1;</code>
     */
    protected $target_https_proxy = '';
    /**
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_https_proxy
     *     @type string $project
     *     @type string $region
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string target_https_proxy = 1;</code>
     * @return string
     */
    public function getTargetHttpsProxy()
    {
        return $this->target_https_proxy;
    }

    /**
     * Generated from protobuf field <code>string target_https_proxy = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetHttpsProxy($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_https_proxy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 2;</code>
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
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

