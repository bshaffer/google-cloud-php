<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchPacketMirroringRequest</code>
 */
class PatchPacketMirroringRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string project = 1;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>string packet_mirroring = 3;</code>
     */
    protected $packet_mirroring = '';
    /**
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring packet_mirroring_resource = 5;</code>
     */
    protected $packet_mirroring_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *     @type string $region
     *     @type string $packet_mirroring
     *     @type string $request_id
     *     @type \Google\Cloud\Compute\V1\PacketMirroring $packet_mirroring_resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
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
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 2;</code>
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
     * Generated from protobuf field <code>string packet_mirroring = 3;</code>
     * @return string
     */
    public function getPacketMirroring()
    {
        return $this->packet_mirroring;
    }

    /**
     * Generated from protobuf field <code>string packet_mirroring = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPacketMirroring($var)
    {
        GPBUtil::checkString($var, True);
        $this->packet_mirroring = $var;

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
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring packet_mirroring_resource = 5;</code>
     * @return \Google\Cloud\Compute\V1\PacketMirroring
     */
    public function getPacketMirroringResource()
    {
        return $this->packet_mirroring_resource;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring packet_mirroring_resource = 5;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroring $var
     * @return $this
     */
    public function setPacketMirroringResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PacketMirroring::class);
        $this->packet_mirroring_resource = $var;

        return $this;
    }

}

