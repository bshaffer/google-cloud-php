<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PacketMirroring;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.PacketMirroring.Enable</code>
 */
class Enable
{
    /**
     * Generated from protobuf enum <code>FALSE = 0;</code>
     */
    const FALSE = 0;
    /**
     * Generated from protobuf enum <code>TRUE = 1;</code>
     */
    const TRUE = 1;

    private static $valueToName = [
        self::FALSE => 'FALSE',
        self::TRUE => 'TRUE',
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
class_alias(Enable::class, \Google\Cloud\Compute\V1\PacketMirroring_Enable::class);

