<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ResourcePolicyGroupPlacementPolicy;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.ResourcePolicyGroupPlacementPolicy.Collocation</code>
 */
class Collocation
{
    /**
     * Generated from protobuf enum <code>COLLOCATED = 0;</code>
     */
    const COLLOCATED = 0;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED_COLLOCATION = 1;</code>
     */
    const UNSPECIFIED_COLLOCATION = 1;

    private static $valueToName = [
        self::COLLOCATED => 'COLLOCATED',
        self::UNSPECIFIED_COLLOCATION => 'UNSPECIFIED_COLLOCATION',
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
class_alias(Collocation::class, \Google\Cloud\Compute\V1\ResourcePolicyGroupPlacementPolicy_Collocation::class);

