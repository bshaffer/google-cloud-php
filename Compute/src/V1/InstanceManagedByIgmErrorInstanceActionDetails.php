<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails</code>
 */
class InstanceManagedByIgmErrorInstanceActionDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails.Action action = 1;</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>string instance = 2;</code>
     */
    protected $instance = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.ManagedInstanceVersion version = 3;</code>
     */
    protected $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *     @type string $instance
     *     @type \Google\Cloud\Compute\V1\ManagedInstanceVersion $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails.Action action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails.Action action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails_Action::class);
        $this->action = $var;

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
     * Generated from protobuf field <code>.google.cloud.compute.v1.ManagedInstanceVersion version = 3;</code>
     * @return \Google\Cloud\Compute\V1\ManagedInstanceVersion
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.ManagedInstanceVersion version = 3;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstanceVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ManagedInstanceVersion::class);
        $this->version = $var;

        return $this;
    }

}

