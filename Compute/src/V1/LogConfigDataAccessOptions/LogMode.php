<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\LogConfigDataAccessOptions;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.LogConfigDataAccessOptions.LogMode</code>
 */
class LogMode
{
    /**
     * Generated from protobuf enum <code>LOG_FAIL_CLOSED = 0;</code>
     */
    const LOG_FAIL_CLOSED = 0;
    /**
     * Generated from protobuf enum <code>LOG_MODE_UNSPECIFIED = 1;</code>
     */
    const LOG_MODE_UNSPECIFIED = 1;

    private static $valueToName = [
        self::LOG_FAIL_CLOSED => 'LOG_FAIL_CLOSED',
        self::LOG_MODE_UNSPECIFIED => 'LOG_MODE_UNSPECIFIED',
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
class_alias(LogMode::class, \Google\Cloud\Compute\V1\LogConfigDataAccessOptions_LogMode::class);

