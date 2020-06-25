<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.DeleteAccessConfigInstanceRequest</code>
 */
class DeleteAccessConfigInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    protected $instance = '';
    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    protected $zone = '';
    /**
     * Generated from protobuf field <code>string project = 3;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string network_interface = 4;</code>
     */
    protected $network_interface = '';
    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>string access_config = 6;</code>
     */
    protected $access_config = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *     @type string $zone
     *     @type string $project
     *     @type string $network_interface
     *     @type string $request_id
     *     @type string $access_config
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Generated from protobuf field <code>string instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project = 3;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 3;</code>
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
     * Generated from protobuf field <code>string network_interface = 4;</code>
     * @return string
     */
    public function getNetworkInterface()
    {
        return $this->network_interface;
    }

    /**
     * Generated from protobuf field <code>string network_interface = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_interface = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string access_config = 6;</code>
     * @return string
     */
    public function getAccessConfig()
    {
        return $this->access_config;
    }

    /**
     * Generated from protobuf field <code>string access_config = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_config = $var;

        return $this;
    }

}

