<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.RemoveResourcePoliciesRegionDiskRequest</code>
 */
class RemoveResourcePoliciesRegionDiskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string disk = 1;</code>
     */
    protected $disk = '';
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
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionDisksRemoveResourcePoliciesRequest region_disks_remove_resource_policies_request_resource = 5;</code>
     */
    protected $region_disks_remove_resource_policies_request_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $disk
     *     @type string $project
     *     @type string $region
     *     @type string $request_id
     *     @type \Google\Cloud\Compute\V1\RegionDisksRemoveResourcePoliciesRequest $region_disks_remove_resource_policies_request_resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string disk = 1;</code>
     * @return string
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Generated from protobuf field <code>string disk = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk = $var;

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
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionDisksRemoveResourcePoliciesRequest region_disks_remove_resource_policies_request_resource = 5;</code>
     * @return \Google\Cloud\Compute\V1\RegionDisksRemoveResourcePoliciesRequest
     */
    public function getRegionDisksRemoveResourcePoliciesRequestResource()
    {
        return $this->region_disks_remove_resource_policies_request_resource;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionDisksRemoveResourcePoliciesRequest region_disks_remove_resource_policies_request_resource = 5;</code>
     * @param \Google\Cloud\Compute\V1\RegionDisksRemoveResourcePoliciesRequest $var
     * @return $this
     */
    public function setRegionDisksRemoveResourcePoliciesRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RegionDisksRemoveResourcePoliciesRequest::class);
        $this->region_disks_remove_resource_policies_request_resource = $var;

        return $this;
    }

}

