<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The `ListMonitoredResourceDescriptors` request.
 * </pre>
 *
 * Protobuf type <code>google.monitoring.v3.ListMonitoredResourceDescriptorsRequest</code>
 */
class ListMonitoredResourceDescriptorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    private $name = '';
    /**
     * <pre>
     * An optional [filter](/monitoring/api/v3/filters) describing
     * the descriptors to be returned.  The filter can reference
     * the descriptor's type and labels. For example, the
     * following filter returns only Google Compute Engine descriptors
     * that have an `id` label:
     *     resource.type = starts_with("gce_") AND resource.label:id
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * A positive number that is the maximum number of results to return.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     * </pre>
     *
     * <code>string name = 5;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * An optional [filter](/monitoring/api/v3/filters) describing
     * the descriptors to be returned.  The filter can reference
     * the descriptor's type and labels. For example, the
     * following filter returns only Google Compute Engine descriptors
     * that have an `id` label:
     *     resource.type = starts_with("gce_") AND resource.label:id
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * An optional [filter](/monitoring/api/v3/filters) describing
     * the descriptors to be returned.  The filter can reference
     * the descriptor's type and labels. For example, the
     * following filter returns only Google Compute Engine descriptors
     * that have an `id` label:
     *     resource.type = starts_with("gce_") AND resource.label:id
     * </pre>
     *
     * <code>string filter = 2;</code>
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;
    }

    /**
     * <pre>
     * A positive number that is the maximum number of results to return.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * A positive number that is the maximum number of results to return.
     * </pre>
     *
     * <code>int32 page_size = 3;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * <pre>
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     * </pre>
     *
     * <code>string page_token = 4;</code>
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

