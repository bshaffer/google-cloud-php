<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpRouteRuleMatch</code>
 */
class HttpRouteRuleMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string full_path_match = 1;</code>
     */
    protected $full_path_match = '';
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 2;</code>
     */
    private $header_matches;
    /**
     * Generated from protobuf field <code>bool ignore_case = 3;</code>
     */
    protected $ignore_case = false;
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 4;</code>
     */
    private $metadata_filters;
    /**
     * Generated from protobuf field <code>string prefix_match = 5;</code>
     */
    protected $prefix_match = '';
    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 6;</code>
     */
    private $query_parameter_matches;
    /**
     * Generated from protobuf field <code>string regex_match = 7;</code>
     */
    protected $regex_match = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $full_path_match
     *     @type \Google\Cloud\Compute\V1\HttpHeaderMatch[]|\Google\Protobuf\Internal\RepeatedField $header_matches
     *     @type bool $ignore_case
     *     @type \Google\Cloud\Compute\V1\MetadataFilter[]|\Google\Protobuf\Internal\RepeatedField $metadata_filters
     *     @type string $prefix_match
     *     @type \Google\Cloud\Compute\V1\HttpQueryParameterMatch[]|\Google\Protobuf\Internal\RepeatedField $query_parameter_matches
     *     @type string $regex_match
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string full_path_match = 1;</code>
     * @return string
     */
    public function getFullPathMatch()
    {
        return $this->full_path_match;
    }

    /**
     * Generated from protobuf field <code>string full_path_match = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFullPathMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_path_match = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaderMatches()
    {
        return $this->header_matches;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 2;</code>
     * @param \Google\Cloud\Compute\V1\HttpHeaderMatch[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaderMatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpHeaderMatch::class);
        $this->header_matches = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ignore_case = 3;</code>
     * @return bool
     */
    public function getIgnoreCase()
    {
        return $this->ignore_case;
    }

    /**
     * Generated from protobuf field <code>bool ignore_case = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreCase($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_case = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadataFilters()
    {
        return $this->metadata_filters;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 4;</code>
     * @param \Google\Cloud\Compute\V1\MetadataFilter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadataFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\MetadataFilter::class);
        $this->metadata_filters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string prefix_match = 5;</code>
     * @return string
     */
    public function getPrefixMatch()
    {
        return $this->prefix_match;
    }

    /**
     * Generated from protobuf field <code>string prefix_match = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefixMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->prefix_match = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryParameterMatches()
    {
        return $this->query_parameter_matches;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 6;</code>
     * @param \Google\Cloud\Compute\V1\HttpQueryParameterMatch[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryParameterMatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpQueryParameterMatch::class);
        $this->query_parameter_matches = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string regex_match = 7;</code>
     * @return string
     */
    public function getRegexMatch()
    {
        return $this->regex_match;
    }

    /**
     * Generated from protobuf field <code>string regex_match = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setRegexMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex_match = $var;

        return $this;
    }

}

