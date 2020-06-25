<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupAutoscalingPolicy</code>
 */
class NodeGroupAutoscalingPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 max_nodes = 1;</code>
     */
    protected $max_nodes = 0;
    /**
     * Generated from protobuf field <code>int32 min_nodes = 2;</code>
     */
    protected $min_nodes = 0;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3;</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_nodes
     *     @type int $min_nodes
     *     @type int $mode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 max_nodes = 1;</code>
     * @return int
     */
    public function getMaxNodes()
    {
        return $this->max_nodes;
    }

    /**
     * Generated from protobuf field <code>int32 max_nodes = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_nodes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_nodes = 2;</code>
     * @return int
     */
    public function getMinNodes()
    {
        return $this->min_nodes;
    }

    /**
     * Generated from protobuf field <code>int32 min_nodes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_nodes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy.Mode mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy_Mode::class);
        $this->mode = $var;

        return $this;
    }

}

