<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\TargetTcpProxiesSetProxyHeaderRequest;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.compute.v1.TargetTcpProxiesSetProxyHeaderRequest.ProxyHeader</code>
 */
class ProxyHeader
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>PROXY_V1 = 1;</code>
     */
    const PROXY_V1 = 1;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::PROXY_V1 => 'PROXY_V1',
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
class_alias(ProxyHeader::class, \Google\Cloud\Compute\V1\TargetTcpProxiesSetProxyHeaderRequest_ProxyHeader::class);

