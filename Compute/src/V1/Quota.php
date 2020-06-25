<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.Quota</code>
 */
class Quota extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double limit = 1;</code>
     */
    protected $limit = 0.0;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 2;</code>
     */
    protected $metric = 0;
    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     */
    protected $owner = '';
    /**
     * Generated from protobuf field <code>double usage = 4;</code>
     */
    protected $usage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $limit
     *     @type int $metric
     *     @type string $owner
     *     @type float $usage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double limit = 1;</code>
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>double limit = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkDouble($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 2;</code>
     * @return int
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Quota_Metric::class);
        $this->metric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Generated from protobuf field <code>string owner = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double usage = 4;</code>
     * @return float
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Generated from protobuf field <code>double usage = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkDouble($var);
        $this->usage = $var;

        return $this;
    }

}

