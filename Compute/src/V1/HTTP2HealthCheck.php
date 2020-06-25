<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Messages
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HTTP2HealthCheck</code>
 */
class HTTP2HealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string host = 1;</code>
     */
    protected $host = '';
    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * Generated from protobuf field <code>string port_name = 3;</code>
     */
    protected $port_name = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.PortSpecification port_specification = 4;</code>
     */
    protected $port_specification = 0;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.ProxyHeader proxy_header = 5;</code>
     */
    protected $proxy_header = 0;
    /**
     * Generated from protobuf field <code>string request_path = 6;</code>
     */
    protected $request_path = '';
    /**
     * Generated from protobuf field <code>string response = 7;</code>
     */
    protected $response = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host
     *     @type int $port
     *     @type string $port_name
     *     @type int $port_specification
     *     @type int $proxy_header
     *     @type string $request_path
     *     @type string $response
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string port_name = 3;</code>
     * @return string
     */
    public function getPortName()
    {
        return $this->port_name;
    }

    /**
     * Generated from protobuf field <code>string port_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.PortSpecification port_specification = 4;</code>
     * @return int
     */
    public function getPortSpecification()
    {
        return $this->port_specification;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.PortSpecification port_specification = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPortSpecification($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\HTTP2HealthCheck_PortSpecification::class);
        $this->port_specification = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.ProxyHeader proxy_header = 5;</code>
     * @return int
     */
    public function getProxyHeader()
    {
        return $this->proxy_header;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck.ProxyHeader proxy_header = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\HTTP2HealthCheck_ProxyHeader::class);
        $this->proxy_header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string request_path = 6;</code>
     * @return string
     */
    public function getRequestPath()
    {
        return $this->request_path;
    }

    /**
     * Generated from protobuf field <code>string request_path = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string response = 7;</code>
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Generated from protobuf field <code>string response = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->response = $var;

        return $this;
    }

}

