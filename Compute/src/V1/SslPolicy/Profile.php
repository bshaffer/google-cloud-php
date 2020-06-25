<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SslPolicy;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.SslPolicy.Profile</code>
 */
class Profile
{
    /**
     * Generated from protobuf enum <code>COMPATIBLE = 0;</code>
     */
    const COMPATIBLE = 0;
    /**
     * Generated from protobuf enum <code>CUSTOM = 1;</code>
     */
    const CUSTOM = 1;
    /**
     * Generated from protobuf enum <code>MODERN = 2;</code>
     */
    const MODERN = 2;
    /**
     * Generated from protobuf enum <code>RESTRICTED = 3;</code>
     */
    const RESTRICTED = 3;

    private static $valueToName = [
        self::COMPATIBLE => 'COMPATIBLE',
        self::CUSTOM => 'CUSTOM',
        self::MODERN => 'MODERN',
        self::RESTRICTED => 'RESTRICTED',
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
class_alias(Profile::class, \Google\Cloud\Compute\V1\SslPolicy_Profile::class);

