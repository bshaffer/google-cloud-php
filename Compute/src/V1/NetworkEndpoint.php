<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpoint</code>
 */
class NetworkEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fqdn = 1;</code>
     */
    protected $fqdn = '';
    /**
     * Generated from protobuf field <code>string instance = 2;</code>
     */
    protected $instance = '';
    /**
     * Generated from protobuf field <code>string ip_address = 3;</code>
     */
    protected $ip_address = '';
    /**
     * Generated from protobuf field <code>int32 port = 4;</code>
     */
    protected $port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fqdn
     *     @type string $instance
     *     @type string $ip_address
     *     @type int $port
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fqdn = 1;</code>
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * Generated from protobuf field <code>string fqdn = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFqdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->fqdn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string instance = 2;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Generated from protobuf field <code>string instance = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip_address = 3;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Generated from protobuf field <code>string ip_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 port = 4;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>int32 port = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

}

