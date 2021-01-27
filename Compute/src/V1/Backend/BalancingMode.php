<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Backend;

use UnexpectedValueException;

/**
 * Specifies the balancing mode for the backend.
 * When choosing a balancing mode, you need to consider the loadBalancingScheme, and protocol for the backend service, as well as the type of backend (instance group or NEG).
 * - If the load balancing mode is CONNECTION, then the load is spread based on how many concurrent connections the backend can handle.
 * You can use the CONNECTION balancing mode if the protocol for the backend service is SSL, TCP, or UDP.
 * If the loadBalancingScheme for the backend service is EXTERNAL (SSL Proxy and TCP Proxy load balancers), you must also specify exactly one of the following parameters: maxConnections (except for regional managed instance groups), maxConnectionsPerInstance, or maxConnectionsPerEndpoint.
 * If the loadBalancingScheme for the backend service is INTERNAL (internal TCP/UDP Load Balancers) or EXTERNAL  (Network Load Balancing), you cannot specify any additional parameters.
 * - If the load balancing mode is RATE, the load is spread based on the rate of HTTP requests per second (RPS).
 * You can use the RATE balancing mode if the protocol for the backend service is HTTP, HTTP2, or HTTPS. You must specify exactly one of the following parameters: maxRate (except for regional managed instance groups), maxRatePerInstance, or maxRatePerEndpoint.
 * - If the load balancing mode is UTILIZATION, the load is spread based on the backend utilization of instances in an instance group.
 * You can use the UTILIZATION balancing mode if the loadBalancingScheme of the backend service is EXTERNAL (except Network Load Balancing), INTERNAL_SELF_MANAGED, or INTERNAL_MANAGED and the backends are instance groups. There are no restrictions on the backend service protocol.
 *
 * Protobuf type <code>google.cloud.compute.v1.Backend.BalancingMode</code>
 */
class BalancingMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_BALANCING_MODE = 0;</code>
     */
    const UNDEFINED_BALANCING_MODE = 0;
    /**
     * Generated from protobuf enum <code>CONNECTION = 246311646;</code>
     */
    const CONNECTION = 246311646;
    /**
     * Generated from protobuf enum <code>RATE = 2508000;</code>
     */
    const RATE = 2508000;
    /**
     * Generated from protobuf enum <code>UTILIZATION = 157008386;</code>
     */
    const UTILIZATION = 157008386;

    private static $valueToName = [
        self::UNDEFINED_BALANCING_MODE => 'UNDEFINED_BALANCING_MODE',
        self::CONNECTION => 'CONNECTION',
        self::RATE => 'RATE',
        self::UTILIZATION => 'UTILIZATION',
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

