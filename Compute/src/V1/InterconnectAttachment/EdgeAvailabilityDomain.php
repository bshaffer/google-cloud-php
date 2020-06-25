<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachment;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachment.EdgeAvailabilityDomain</code>
 */
class EdgeAvailabilityDomain
{
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_1 = 0;</code>
     */
    const AVAILABILITY_DOMAIN_1 = 0;
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_2 = 1;</code>
     */
    const AVAILABILITY_DOMAIN_2 = 1;
    /**
     * Generated from protobuf enum <code>AVAILABILITY_DOMAIN_ANY = 2;</code>
     */
    const AVAILABILITY_DOMAIN_ANY = 2;

    private static $valueToName = [
        self::AVAILABILITY_DOMAIN_1 => 'AVAILABILITY_DOMAIN_1',
        self::AVAILABILITY_DOMAIN_2 => 'AVAILABILITY_DOMAIN_2',
        self::AVAILABILITY_DOMAIN_ANY => 'AVAILABILITY_DOMAIN_ANY',
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
class_alias(EdgeAvailabilityDomain::class, \Google\Cloud\Compute\V1\InterconnectAttachment_EdgeAvailabilityDomain::class);

