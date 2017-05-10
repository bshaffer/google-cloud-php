<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The parameters to `GetSink`.
 * </pre>
 *
 * Protobuf type <code>google.logging.v2.GetSinkRequest</code>
 */
class GetSinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The resource name of the sink:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * </pre>
     *
     * <code>string sink_name = 1;</code>
     */
    private $sink_name = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The resource name of the sink:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * </pre>
     *
     * <code>string sink_name = 1;</code>
     */
    public function getSinkName()
    {
        return $this->sink_name;
    }

    /**
     * <pre>
     * Required. The resource name of the sink:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * Example: `"projects/my-project-id/sinks/my-sink-id"`.
     * </pre>
     *
     * <code>string sink_name = 1;</code>
     */
    public function setSinkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sink_name = $var;
    }

}

