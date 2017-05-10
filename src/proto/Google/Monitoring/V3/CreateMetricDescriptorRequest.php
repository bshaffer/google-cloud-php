<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The `CreateMetricDescriptor` request.
 * </pre>
 *
 * Protobuf type <code>google.monitoring.v3.CreateMetricDescriptorRequest</code>
 */
class CreateMetricDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     * </pre>
     *
     * <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     */
    private $metric_descriptor = null;

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
     * <code>string name = 3;</code>
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
     * <code>string name = 3;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     * </pre>
     *
     * <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     */
    public function getMetricDescriptor()
    {
        return $this->metric_descriptor;
    }

    /**
     * <pre>
     * The new [custom metric](/monitoring/custom-metrics)
     * descriptor.
     * </pre>
     *
     * <code>.google.api.MetricDescriptor metric_descriptor = 2;</code>
     */
    public function setMetricDescriptor(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MetricDescriptor::class);
        $this->metric_descriptor = $var;
    }

}

