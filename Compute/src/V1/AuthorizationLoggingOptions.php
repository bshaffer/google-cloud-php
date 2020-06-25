<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.AuthorizationLoggingOptions</code>
 */
class AuthorizationLoggingOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions.PermissionType permission_type = 1;</code>
     */
    protected $permission_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $permission_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions.PermissionType permission_type = 1;</code>
     * @return int
     */
    public function getPermissionType()
    {
        return $this->permission_type;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.AuthorizationLoggingOptions.PermissionType permission_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\AuthorizationLoggingOptions_PermissionType::class);
        $this->permission_type = $var;

        return $this;
    }

}

