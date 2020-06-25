<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.Reservation</code>
 */
class Reservation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string commitment = 1;</code>
     */
    protected $commitment = '';
    /**
     * Generated from protobuf field <code>string creation_timestamp = 2;</code>
     */
    protected $creation_timestamp = '';
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
     * Generated from protobuf field <code>string name = 6;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string self_link = 7;</code>
     */
    protected $self_link = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 8;</code>
     */
    protected $specific_reservation = null;
    /**
     * Generated from protobuf field <code>bool specific_reservation_required = 9;</code>
     */
    protected $specific_reservation_required = false;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Reservation.Status status = 10;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string zone = 11;</code>
     */
    protected $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $commitment
     *     @type string $creation_timestamp
     *     @type string $description
     *     @type string $id
     *     @type string $kind
     *     @type string $name
     *     @type string $self_link
     *     @type \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $specific_reservation
     *     @type bool $specific_reservation_required
     *     @type int $status
     *     @type string $zone
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string commitment = 1;</code>
     * @return string
     */
    public function getCommitment()
    {
        return $this->commitment;
    }

    /**
     * Generated from protobuf field <code>string commitment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitment($var)
    {
        GPBUtil::checkString($var, True);
        $this->commitment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 2;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Generated from protobuf field <code>string creation_timestamp = 2;</code>
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
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 6;</code>
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
     * Generated from protobuf field <code>string self_link = 7;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Generated from protobuf field <code>string self_link = 7;</code>
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
     * Generated from protobuf field <code>.google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 8;</code>
     * @return \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation
     */
    public function getSpecificReservation()
    {
        return $this->specific_reservation;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 8;</code>
     * @param \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $var
     * @return $this
     */
    public function setSpecificReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation::class);
        $this->specific_reservation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool specific_reservation_required = 9;</code>
     * @return bool
     */
    public function getSpecificReservationRequired()
    {
        return $this->specific_reservation_required;
    }

    /**
     * Generated from protobuf field <code>bool specific_reservation_required = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpecificReservationRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->specific_reservation_required = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Reservation.Status status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Reservation.Status status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Reservation_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zone = 11;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Generated from protobuf field <code>string zone = 11;</code>
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

