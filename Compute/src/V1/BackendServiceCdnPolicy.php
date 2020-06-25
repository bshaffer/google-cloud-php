<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendServiceCdnPolicy</code>
 */
class BackendServiceCdnPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.CacheKeyPolicy cache_key_policy = 1;</code>
     */
    protected $cache_key_policy = null;
    /**
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 2;</code>
     */
    protected $signed_url_cache_max_age_sec = '';
    /**
     * Generated from protobuf field <code>repeated string signed_url_key_names = 3;</code>
     */
    private $signed_url_key_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\CacheKeyPolicy $cache_key_policy
     *     @type string $signed_url_cache_max_age_sec
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $signed_url_key_names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.CacheKeyPolicy cache_key_policy = 1;</code>
     * @return \Google\Cloud\Compute\V1\CacheKeyPolicy
     */
    public function getCacheKeyPolicy()
    {
        return $this->cache_key_policy;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.CacheKeyPolicy cache_key_policy = 1;</code>
     * @param \Google\Cloud\Compute\V1\CacheKeyPolicy $var
     * @return $this
     */
    public function setCacheKeyPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CacheKeyPolicy::class);
        $this->cache_key_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 2;</code>
     * @return string
     */
    public function getSignedUrlCacheMaxAgeSec()
    {
        return $this->signed_url_cache_max_age_sec;
    }

    /**
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedUrlCacheMaxAgeSec($var)
    {
        GPBUtil::checkString($var, True);
        $this->signed_url_cache_max_age_sec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string signed_url_key_names = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignedUrlKeyNames()
    {
        return $this->signed_url_key_names;
    }

    /**
     * Generated from protobuf field <code>repeated string signed_url_key_names = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignedUrlKeyNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->signed_url_key_names = $arr;

        return $this;
    }

}

