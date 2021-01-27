<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TCPHealthCheck</code>
 */
class TCPHealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * The TCP port number for the health check request. The default value is 80. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     */
    private $port = 0;
    /**
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>string port_name = 41534345;</code>
     */
    private $port_name = '';
    /**
     * Specifies how port is selected for health checking, can be one of following values:
     * USE_FIXED_PORT: The port number in port is used for health checking.
     * USE_NAMED_PORT: The portName is used for health checking.
     * USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking.
     * If not specified, TCP health check follows behavior specified in port and portName fields.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.PortSpecification port_specification = 51590597;</code>
     */
    private $port_specification = 0;
    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.ProxyHeader proxy_header = 160374142;</code>
     */
    private $proxy_header = 0;
    /**
     * The application data to send once the TCP connection has been established (default value is empty). If both request and response are empty, the connection establishment alone will indicate health. The request data can only be ASCII.
     *
     * Generated from protobuf field <code>string request = 21951119;</code>
     */
    private $request = '';
    /**
     * The bytes to match against the beginning of the response data. If left empty (the default value), any response will indicate health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>string response = 196547649;</code>
     */
    private $response = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *           The TCP port number for the health check request. The default value is 80. Valid values are 1 through 65535.
     *     @type string $port_name
     *           Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *     @type int $port_specification
     *           Specifies how port is selected for health checking, can be one of following values:
     *           USE_FIXED_PORT: The port number in port is used for health checking.
     *           USE_NAMED_PORT: The portName is used for health checking.
     *           USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking.
     *           If not specified, TCP health check follows behavior specified in port and portName fields.
     *     @type int $proxy_header
     *           Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *     @type string $request
     *           The application data to send once the TCP connection has been established (default value is empty). If both request and response are empty, the connection establishment alone will indicate health. The request data can only be ASCII.
     *     @type string $response
     *           The bytes to match against the beginning of the response data. If left empty (the default value), any response will indicate health. The response data can only be ASCII.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The TCP port number for the health check request. The default value is 80. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * The TCP port number for the health check request. The default value is 80. Valid values are 1 through 65535.
     *
     * Generated from protobuf field <code>int32 port = 3446913;</code>
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
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>string port_name = 41534345;</code>
     * @return string
     */
    public function getPortName()
    {
        return $this->port_name;
    }

    /**
     * Port name as defined in InstanceGroup#NamedPort#name. If both port and port_name are defined, port takes precedence.
     *
     * Generated from protobuf field <code>string port_name = 41534345;</code>
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
     * Specifies how port is selected for health checking, can be one of following values:
     * USE_FIXED_PORT: The port number in port is used for health checking.
     * USE_NAMED_PORT: The portName is used for health checking.
     * USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking.
     * If not specified, TCP health check follows behavior specified in port and portName fields.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.PortSpecification port_specification = 51590597;</code>
     * @return int
     */
    public function getPortSpecification()
    {
        return $this->port_specification;
    }

    /**
     * Specifies how port is selected for health checking, can be one of following values:
     * USE_FIXED_PORT: The port number in port is used for health checking.
     * USE_NAMED_PORT: The portName is used for health checking.
     * USE_SERVING_PORT: For NetworkEndpointGroup, the port specified for each network endpoint is used for health checking. For other backends, the port or named port specified in the Backend Service is used for health checking.
     * If not specified, TCP health check follows behavior specified in port and portName fields.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.PortSpecification port_specification = 51590597;</code>
     * @param int $var
     * @return $this
     */
    public function setPortSpecification($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TCPHealthCheck\PortSpecification::class);
        $this->port_specification = $var;

        return $this;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.ProxyHeader proxy_header = 160374142;</code>
     * @return int
     */
    public function getProxyHeader()
    {
        return $this->proxy_header;
    }

    /**
     * Specifies the type of proxy header to append before sending data to the backend, either NONE or PROXY_V1. The default is NONE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck.ProxyHeader proxy_header = 160374142;</code>
     * @param int $var
     * @return $this
     */
    public function setProxyHeader($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TCPHealthCheck\ProxyHeader::class);
        $this->proxy_header = $var;

        return $this;
    }

    /**
     * The application data to send once the TCP connection has been established (default value is empty). If both request and response are empty, the connection establishment alone will indicate health. The request data can only be ASCII.
     *
     * Generated from protobuf field <code>string request = 21951119;</code>
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * The application data to send once the TCP connection has been established (default value is empty). If both request and response are empty, the connection establishment alone will indicate health. The request data can only be ASCII.
     *
     * Generated from protobuf field <code>string request = 21951119;</code>
     * @param string $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->request = $var;

        return $this;
    }

    /**
     * The bytes to match against the beginning of the response data. If left empty (the default value), any response will indicate health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>string response = 196547649;</code>
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The bytes to match against the beginning of the response data. If left empty (the default value), any response will indicate health. The response data can only be ASCII.
     *
     * Generated from protobuf field <code>string response = 196547649;</code>
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
