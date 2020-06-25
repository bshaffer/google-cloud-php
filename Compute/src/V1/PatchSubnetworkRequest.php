<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchSubnetworkRequest</code>
 */
class PatchSubnetworkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     */
    protected $subnetwork = '';
    /**
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>int32 drain_timeout_seconds = 5;</code>
     */
    protected $drain_timeout_seconds = 0;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork subnetwork_resource = 6;</code>
     */
    protected $subnetwork_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subnetwork
     *     @type string $project
     *     @type string $region
     *     @type string $request_id
     *     @type int $drain_timeout_seconds
     *     @type \Google\Cloud\Compute\V1\Subnetwork $subnetwork_resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

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

    /**
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 4;</code>
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
     * Generated from protobuf field <code>int32 drain_timeout_seconds = 5;</code>
     * @return int
     */
    public function getDrainTimeoutSeconds()
    {
        return $this->drain_timeout_seconds;
    }

    /**
     * Generated from protobuf field <code>int32 drain_timeout_seconds = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDrainTimeoutSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->drain_timeout_seconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork subnetwork_resource = 6;</code>
     * @return \Google\Cloud\Compute\V1\Subnetwork
     */
    public function getSubnetworkResource()
    {
        return $this->subnetwork_resource;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork subnetwork_resource = 6;</code>
     * @param \Google\Cloud\Compute\V1\Subnetwork $var
     * @return $this
     */
    public function setSubnetworkResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Subnetwork::class);
        $this->subnetwork_resource = $var;

        return $this;
    }

}

