<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AutoscalingPolicy;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.AutoscalingPolicy.Mode</code>
 */
class Mode
{
    /**
     * Generated from protobuf enum <code>OFF = 0;</code>
     */
    const OFF = 0;
    /**
     * Generated from protobuf enum <code>ON = 1;</code>
     */
    const ON = 1;
    /**
     * Generated from protobuf enum <code>ONLY_UP = 2;</code>
     */
    const ONLY_UP = 2;

    private static $valueToName = [
        self::OFF => 'OFF',
        self::ON => 'ON',
        self::ONLY_UP => 'ONLY_UP',
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
class_alias(Mode::class, \Google\Cloud\Compute\V1\AutoscalingPolicy_Mode::class);

