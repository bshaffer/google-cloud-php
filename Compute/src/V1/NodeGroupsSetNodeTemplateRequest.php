<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupsSetNodeTemplateRequest</code>
 */
class NodeGroupsSetNodeTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string node_template = 1;</code>
     */
    protected $node_template = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string node_template = 1;</code>
     * @return string
     */
    public function getNodeTemplate()
    {
        return $this->node_template;
    }

    /**
     * Generated from protobuf field <code>string node_template = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_template = $var;

        return $this;
    }

}

