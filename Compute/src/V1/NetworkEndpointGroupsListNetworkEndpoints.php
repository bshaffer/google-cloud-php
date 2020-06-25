<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupsListNetworkEndpoints</code>
 */
class NetworkEndpointGroupsListNetworkEndpoints extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpointWithHealthStatus items = 2;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    protected $kind = '';
    /**
     * Generated from protobuf field <code>string next_page_token = 4;</code>
     */
    protected $next_page_token = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 5;</code>
     */
    protected $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointWithHealthStatus[]|\Google\Protobuf\Internal\RepeatedField $items
     *     @type string $kind
     *     @type string $next_page_token
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpointWithHealthStatus items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpointWithHealthStatus items = 2;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointWithHealthStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NetworkEndpointWithHealthStatus::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_page_token = 4;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>string next_page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 5;</code>
     * @return \Google\Cloud\Compute\V1\Warning
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Warning warning = 5;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

