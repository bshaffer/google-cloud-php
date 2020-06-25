<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.GetBackendServiceRequest</code>
 */
class GetBackendServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string backend_service = 1;</code>
     */
    protected $backend_service = '';
    /**
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *     @type string $project
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string backend_service = 1;</code>
     * @return string
     */
    public function getBackendService()
    {
        return $this->backend_service;
    }

    /**
     * Generated from protobuf field <code>string backend_service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

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

}

