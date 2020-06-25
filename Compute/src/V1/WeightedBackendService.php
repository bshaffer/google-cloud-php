<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.WeightedBackendService</code>
 */
class WeightedBackendService extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string backend_service = 1;</code>
     */
    protected $backend_service = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpHeaderAction header_action = 2;</code>
     */
    protected $header_action = null;
    /**
     * Generated from protobuf field <code>uint32 weight = 3;</code>
     */
    protected $weight = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *     @type \Google\Cloud\Compute\V1\HttpHeaderAction $header_action
     *     @type int $weight
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
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpHeaderAction header_action = 2;</code>
     * @return \Google\Cloud\Compute\V1\HttpHeaderAction
     */
    public function getHeaderAction()
    {
        return $this->header_action;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpHeaderAction header_action = 2;</code>
     * @param \Google\Cloud\Compute\V1\HttpHeaderAction $var
     * @return $this
     */
    public function setHeaderAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpHeaderAction::class);
        $this->header_action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 weight = 3;</code>
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>uint32 weight = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->weight = $var;

        return $this;
    }

}

