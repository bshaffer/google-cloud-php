<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendServiceIAP</code>
 */
class BackendServiceIAP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     */
    protected $oauth2_client_id = '';
    /**
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     */
    protected $oauth2_client_secret = '';
    /**
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     */
    protected $oauth2_client_secret_sha256 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *     @type string $oauth2_client_id
     *     @type string $oauth2_client_secret
     *     @type string $oauth2_client_secret_sha256
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     * @return string
     */
    public function getOauth2ClientId()
    {
        return $this->oauth2_client_id;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     * @return string
     */
    public function getOauth2ClientSecret()
    {
        return $this->oauth2_client_secret;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     * @return string
     */
    public function getOauth2ClientSecretSha256()
    {
        return $this->oauth2_client_secret_sha256;
    }

    /**
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientSecretSha256($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_secret_sha256 = $var;

        return $this;
    }

}

