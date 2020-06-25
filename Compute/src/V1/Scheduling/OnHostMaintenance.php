<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Scheduling;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.Scheduling.OnHostMaintenance</code>
 */
class OnHostMaintenance
{
    /**
     * Generated from protobuf enum <code>MIGRATE = 0;</code>
     */
    const MIGRATE = 0;
    /**
     * Generated from protobuf enum <code>TERMINATE = 1;</code>
     */
    const TERMINATE = 1;

    private static $valueToName = [
        self::MIGRATE => 'MIGRATE',
        self::TERMINATE => 'TERMINATE',
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
class_alias(OnHostMaintenance::class, \Google\Cloud\Compute\V1\Scheduling_OnHostMaintenance::class);

