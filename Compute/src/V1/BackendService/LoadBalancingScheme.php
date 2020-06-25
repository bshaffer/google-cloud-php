<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendService;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.BackendService.LoadBalancingScheme</code>
 */
class LoadBalancingScheme
{
    /**
     * Generated from protobuf enum <code>EXTERNAL = 0;</code>
     */
    const EXTERNAL = 0;
    /**
     * Generated from protobuf enum <code>INTERNAL = 1;</code>
     */
    const INTERNAL = 1;
    /**
     * Generated from protobuf enum <code>INTERNAL_MANAGED = 2;</code>
     */
    const INTERNAL_MANAGED = 2;
    /**
     * Generated from protobuf enum <code>INTERNAL_SELF_MANAGED = 3;</code>
     */
    const INTERNAL_SELF_MANAGED = 3;
    /**
     * Generated from protobuf enum <code>INVALID_LOAD_BALANCING_SCHEME = 4;</code>
     */
    const INVALID_LOAD_BALANCING_SCHEME = 4;

    private static $valueToName = [
        self::EXTERNAL => 'EXTERNAL',
        self::INTERNAL => 'INTERNAL',
        self::INTERNAL_MANAGED => 'INTERNAL_MANAGED',
        self::INTERNAL_SELF_MANAGED => 'INTERNAL_SELF_MANAGED',
        self::INVALID_LOAD_BALANCING_SCHEME => 'INVALID_LOAD_BALANCING_SCHEME',
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
class_alias(LoadBalancingScheme::class, \Google\Cloud\Compute\V1\BackendService_LoadBalancingScheme::class);

