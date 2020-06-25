<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.PacketMirroringMirroredResourceInfoSubnetInfo</code>
 */
class PacketMirroringMirroredResourceInfoSubnetInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string canonical_url = 1;</code>
     */
    protected $canonical_url = '';
    /**
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $canonical_url
     *     @type string $url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string canonical_url = 1;</code>
     * @return string
     */
    public function getCanonicalUrl()
    {
        return $this->canonical_url;
    }

    /**
     * Generated from protobuf field <code>string canonical_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

