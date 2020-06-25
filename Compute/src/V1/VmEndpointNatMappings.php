<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.VmEndpointNatMappings</code>
 */
class VmEndpointNatMappings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string instance_name = 1;</code>
     */
    protected $instance_name = '';
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappings interface_nat_mappings = 2;</code>
     */
    private $interface_nat_mappings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_name
     *     @type \Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappings[]|\Google\Protobuf\Internal\RepeatedField $interface_nat_mappings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string instance_name = 1;</code>
     * @return string
     */
    public function getInstanceName()
    {
        return $this->instance_name;
    }

    /**
     * Generated from protobuf field <code>string instance_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappings interface_nat_mappings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterfaceNatMappings()
    {
        return $this->interface_nat_mappings;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappings interface_nat_mappings = 2;</code>
     * @param \Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappings[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterfaceNatMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappings::class);
        $this->interface_nat_mappings = $arr;

        return $this;
    }

}

