<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.InsertRegionSslCertificateRequest</code>
 */
class InsertRegionSslCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string project = 1;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SslCertificate ssl_certificate_resource = 4;</code>
     */
    protected $ssl_certificate_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *     @type string $region
     *     @type string $request_id
     *     @type \Google\Cloud\Compute\V1\SslCertificate $ssl_certificate_resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SslCertificate ssl_certificate_resource = 4;</code>
     * @return \Google\Cloud\Compute\V1\SslCertificate
     */
    public function getSslCertificateResource()
    {
        return $this->ssl_certificate_resource;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SslCertificate ssl_certificate_resource = 4;</code>
     * @param \Google\Cloud\Compute\V1\SslCertificate $var
     * @return $this
     */
    public function setSslCertificateResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SslCertificate::class);
        $this->ssl_certificate_resource = $var;

        return $this;
    }

}

