<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Google\Cloud\Compute\V1;

/**
 */
class InterconnectAttachmentsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Cloud\Compute\V1\AggregatedListInterconnectAttachmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AggregatedList(\Google\Cloud\Compute\V1\AggregatedListInterconnectAttachmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/AggregatedList',
        $argument,
        ['\Google\Cloud\Compute\V1\InterconnectAttachmentAggregatedList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\DeleteInterconnectAttachmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Google\Cloud\Compute\V1\DeleteInterconnectAttachmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/Delete',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\GetInterconnectAttachmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Google\Cloud\Compute\V1\GetInterconnectAttachmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/Get',
        $argument,
        ['\Google\Cloud\Compute\V1\InterconnectAttachment', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\InsertInterconnectAttachmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Insert(\Google\Cloud\Compute\V1\InsertInterconnectAttachmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/Insert',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\ListInterconnectAttachmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Google\Cloud\Compute\V1\ListInterconnectAttachmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/List',
        $argument,
        ['\Google\Cloud\Compute\V1\InterconnectAttachmentList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Cloud\Compute\V1\PatchInterconnectAttachmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Patch(\Google\Cloud\Compute\V1\PatchInterconnectAttachmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.compute.v1.InterconnectAttachments/Patch',
        $argument,
        ['\Google\Cloud\Compute\V1\Operation', 'decode'],
        $metadata, $options);
    }

}
