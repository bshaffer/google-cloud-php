<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachment;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachment.State</code>
 */
class State
{
    /**
     * Generated from protobuf enum <code>ACTIVE = 0;</code>
     */
    const ACTIVE = 0;
    /**
     * Generated from protobuf enum <code>DEFUNCT = 1;</code>
     */
    const DEFUNCT = 1;
    /**
     * Generated from protobuf enum <code>PARTNER_REQUEST_RECEIVED = 2;</code>
     */
    const PARTNER_REQUEST_RECEIVED = 2;
    /**
     * Generated from protobuf enum <code>PENDING_CUSTOMER = 3;</code>
     */
    const PENDING_CUSTOMER = 3;
    /**
     * Generated from protobuf enum <code>PENDING_PARTNER = 4;</code>
     */
    const PENDING_PARTNER = 4;
    /**
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 5;</code>
     */
    const STATE_UNSPECIFIED = 5;
    /**
     * Generated from protobuf enum <code>UNPROVISIONED = 6;</code>
     */
    const UNPROVISIONED = 6;

    private static $valueToName = [
        self::ACTIVE => 'ACTIVE',
        self::DEFUNCT => 'DEFUNCT',
        self::PARTNER_REQUEST_RECEIVED => 'PARTNER_REQUEST_RECEIVED',
        self::PENDING_CUSTOMER => 'PENDING_CUSTOMER',
        self::PENDING_PARTNER => 'PENDING_PARTNER',
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::UNPROVISIONED => 'UNPROVISIONED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Compute\V1\InterconnectAttachment_State::class);

