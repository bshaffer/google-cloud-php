<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Disk;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.Disk.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>CREATING = 0;</code>
     */
    const CREATING = 0;
    /**
     * Generated from protobuf enum <code>DELETING = 1;</code>
     */
    const DELETING = 1;
    /**
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;
    /**
     * Generated from protobuf enum <code>READY = 3;</code>
     */
    const READY = 3;
    /**
     * Generated from protobuf enum <code>RESTORING = 4;</code>
     */
    const RESTORING = 4;

    private static $valueToName = [
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::READY => 'READY',
        self::RESTORING => 'RESTORING',
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
class_alias(Status::class, \Google\Cloud\Compute\V1\Disk_Status::class);

