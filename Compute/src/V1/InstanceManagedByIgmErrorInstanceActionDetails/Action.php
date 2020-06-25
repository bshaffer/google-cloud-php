<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails.Action</code>
 */
class Action
{
    /**
     * Generated from protobuf enum <code>ABANDONING = 0;</code>
     */
    const ABANDONING = 0;
    /**
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Generated from protobuf enum <code>CREATING_WITHOUT_RETRIES = 2;</code>
     */
    const CREATING_WITHOUT_RETRIES = 2;
    /**
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * Generated from protobuf enum <code>NONE = 4;</code>
     */
    const NONE = 4;
    /**
     * Generated from protobuf enum <code>RECREATING = 5;</code>
     */
    const RECREATING = 5;
    /**
     * Generated from protobuf enum <code>REFRESHING = 6;</code>
     */
    const REFRESHING = 6;
    /**
     * Generated from protobuf enum <code>RESTARTING = 7;</code>
     */
    const RESTARTING = 7;
    /**
     * Generated from protobuf enum <code>VERIFYING = 8;</code>
     */
    const VERIFYING = 8;

    private static $valueToName = [
        self::ABANDONING => 'ABANDONING',
        self::CREATING => 'CREATING',
        self::CREATING_WITHOUT_RETRIES => 'CREATING_WITHOUT_RETRIES',
        self::DELETING => 'DELETING',
        self::NONE => 'NONE',
        self::RECREATING => 'RECREATING',
        self::REFRESHING => 'REFRESHING',
        self::RESTARTING => 'RESTARTING',
        self::VERIFYING => 'VERIFYING',
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
class_alias(Action::class, \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails_Action::class);

