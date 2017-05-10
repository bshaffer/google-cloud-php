<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for the `DeleteSnapshot` method.
 * </pre>
 *
 * Protobuf type <code>google.pubsub.v1.DeleteSnapshotRequest</code>
 */
class DeleteSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     * </pre>
     *
     * <code>string snapshot = 1;</code>
     */
    private $snapshot = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     * </pre>
     *
     * <code>string snapshot = 1;</code>
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * <pre>
     * The name of the snapshot to delete.
     * Format is `projects/{project}/snapshots/{snap}`.
     * </pre>
     *
     * <code>string snapshot = 1;</code>
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;
    }

}

