<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.SetLabelsDiskRequest</code>
 */
class SetLabelsDiskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    protected $resource = '';
    /**
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    protected $zone = '';
    /**
     * Generated from protobuf field <code>string project = 3;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.ZoneSetLabelsRequest zone_set_labels_request_resource = 5;</code>
     */
    protected $zone_set_labels_request_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *     @type string $zone
     *     @type string $project
     *     @type string $request_id
     *     @type \Google\Cloud\Compute\V1\ZoneSetLabelsRequest $zone_set_labels_request_resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

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
     * Generated from protobuf field <code>.google.cloud.compute.v1.ZoneSetLabelsRequest zone_set_labels_request_resource = 5;</code>
     * @return \Google\Cloud\Compute\V1\ZoneSetLabelsRequest
     */
    public function getZoneSetLabelsRequestResource()
    {
        return $this->zone_set_labels_request_resource;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.ZoneSetLabelsRequest zone_set_labels_request_resource = 5;</code>
     * @param \Google\Cloud\Compute\V1\ZoneSetLabelsRequest $var
     * @return $this
     */
    public function setZoneSetLabelsRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ZoneSetLabelsRequest::class);
        $this->zone_set_labels_request_resource = $var;

        return $this;
    }

}

