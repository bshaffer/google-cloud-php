<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Address;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.Address.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>IN_USE = 0;</code>
     */
    const IN_USE = 0;
    /**
     * Generated from protobuf enum <code>RESERVED = 1;</code>
     */
    const RESERVED = 1;
    /**
     * Generated from protobuf enum <code>RESERVING = 2;</code>
     */
    const RESERVING = 2;

    private static $valueToName = [
        self::IN_USE => 'IN_USE',
        self::RESERVED => 'RESERVED',
        self::RESERVING => 'RESERVING',
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
class_alias(Status::class, \Google\Cloud\Compute\V1\Address_Status::class);

