<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HealthStatusForNetworkEndpoint;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.HealthStatusForNetworkEndpoint.HealthState</code>
 */
class HealthState
{
    /**
     * Generated from protobuf enum <code>DRAINING = 0;</code>
     */
    const DRAINING = 0;
    /**
     * Generated from protobuf enum <code>HEALTHY = 1;</code>
     */
    const HEALTHY = 1;
    /**
     * Generated from protobuf enum <code>UNHEALTHY = 2;</code>
     */
    const UNHEALTHY = 2;
    /**
     * Generated from protobuf enum <code>UNKNOWN = 3;</code>
     */
    const UNKNOWN = 3;

    private static $valueToName = [
        self::DRAINING => 'DRAINING',
        self::HEALTHY => 'HEALTHY',
        self::UNHEALTHY => 'UNHEALTHY',
        self::UNKNOWN => 'UNKNOWN',
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
class_alias(HealthState::class, \Google\Cloud\Compute\V1\HealthStatusForNetworkEndpoint_HealthState::class);

