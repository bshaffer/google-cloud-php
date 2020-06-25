<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.AcceleratorType</code>
 */
class AcceleratorType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     */
    protected $creation_timestamp = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 2;</code>
     */
    protected $deprecated = null;
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string kind = 5;</code>
     */
    protected $kind = '';
    /**
     * Generated from protobuf field <code>int32 maximum_cards_per_instance = 6;</code>
     */
    protected $maximum_cards_per_instance = 0;
    /**
     * Generated from protobuf field <code>string name = 7;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string self_link = 8;</code>
     */
    protected $self_link = '';
    /**
     * Generated from protobuf field <code>string zone = 9;</code>
     */
    protected $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *     @type \Google\Cloud\Compute\V1\DeprecationStatus $deprecated
     *     @type string $description
     *     @type string $id
     *     @type string $kind
     *     @type int $maximum_cards_per_instance
     *     @type string $name
     *     @type string $self_link
     *     @type string $zone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 2;</code>
     * @return \Google\Cloud\Compute\V1\DeprecationStatus
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 2;</code>
     * @param \Google\Cloud\Compute\V1\DeprecationStatus $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DeprecationStatus::class);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string kind = 5;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_cards_per_instance = 6;</code>
     * @return int
     */
    public function getMaximumCardsPerInstance()
    {
        return $this->maximum_cards_per_instance;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_cards_per_instance = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumCardsPerInstance($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_cards_per_instance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string self_link = 8;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Generated from protobuf field <code>string self_link = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zone = 9;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Generated from protobuf field <code>string zone = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

