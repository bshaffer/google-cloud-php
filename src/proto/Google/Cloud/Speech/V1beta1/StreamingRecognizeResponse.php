<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * `StreamingRecognizeResponse` is the only message returned to the client by
 * `StreamingRecognize`. A series of one or more `StreamingRecognizeResponse`
 * messages are streamed back to the client.
 * Here's an example of a series of ten `StreamingRecognizeResponse`s that might
 * be returned while processing audio:
 * 1. endpointer_type: START_OF_SPEECH
 * 2. results { alternatives { transcript: "tube" } stability: 0.01 }
 *    result_index: 0
 * 3. results { alternatives { transcript: "to be a" } stability: 0.01 }
 *    result_index: 0
 * 4. results { alternatives { transcript: "to be" } stability: 0.9 }
 *    results { alternatives { transcript: " or not to be" } stability: 0.01 }
 *    result_index: 0
 * 5. results { alternatives { transcript: "to be or not to be"
 *                             confidence: 0.92 }
 *              alternatives { transcript: "to bee or not to bee" }
 *              is_final: true }
 *    result_index: 0
 * 6. results { alternatives { transcript: " that's" } stability: 0.01 }
 *    result_index: 1
 * 7. results { alternatives { transcript: " that is" } stability: 0.9 }
 *    results { alternatives { transcript: " the question" } stability: 0.01 }
 *    result_index: 1
 * 8. endpointer_type: END_OF_SPEECH
 * 9. results { alternatives { transcript: " that is the question"
 *                             confidence: 0.98 }
 *              alternatives { transcript: " that was the question" }
 *              is_final: true }
 *    result_index: 1
 * 10. endpointer_type: END_OF_AUDIO
 * Notes:
 * - Only two of the above responses #5 and #9 contain final results, they are
 *   indicated by `is_final: true`. Concatenating these together generates the
 *   full transcript: "to be or not to be that is the question".
 * - The others contain interim `results`. #4 and #7 contain two interim
 *   `results`, the first portion has a high stability and is less likely to
 *   change, the second portion has a low stability and is very likely to
 *   change. A UI designer might choose to show only high stability `results`.
 * - The specific `stability` and `confidence` values shown above are only for
 *   illustrative purposes. Actual values may vary.
 * - The `result_index` indicates the portion of audio that has had final
 *   results returned, and is no longer being processed. For example, the
 *   `results` in #6 and later correspond to the portion of audio after
 *   "to be or not to be".
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1beta1.StreamingRecognizeResponse</code>
 */
class StreamingRecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Output-only* If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     * </pre>
     *
     * <code>.google.rpc.Status error = 1;</code>
     */
    private $error = null;
    /**
     * <pre>
     * *Output-only* This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.StreamingRecognitionResult results = 2;</code>
     */
    private $results;
    /**
     * <pre>
     * *Output-only* Indicates the lowest index in the `results` array that has
     * changed. The repeated `StreamingRecognitionResult` results overwrite past
     * results at this index and higher.
     * </pre>
     *
     * <code>int32 result_index = 3;</code>
     */
    private $result_index = 0;
    /**
     * <pre>
     * *Output-only* Indicates the type of endpointer event.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.StreamingRecognizeResponse.EndpointerType endpointer_type = 4;</code>
     */
    private $endpointer_type = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Output-only* If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     * </pre>
     *
     * <code>.google.rpc.Status error = 1;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <pre>
     * *Output-only* If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     * </pre>
     *
     * <code>.google.rpc.Status error = 1;</code>
     */
    public function setError(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;
    }

    /**
     * <pre>
     * *Output-only* This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.StreamingRecognitionResult results = 2;</code>
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <pre>
     * *Output-only* This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results.
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.StreamingRecognitionResult results = 2;</code>
     */
    public function setResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1beta1\StreamingRecognitionResult::class);
        $this->results = $arr;
    }

    /**
     * <pre>
     * *Output-only* Indicates the lowest index in the `results` array that has
     * changed. The repeated `StreamingRecognitionResult` results overwrite past
     * results at this index and higher.
     * </pre>
     *
     * <code>int32 result_index = 3;</code>
     */
    public function getResultIndex()
    {
        return $this->result_index;
    }

    /**
     * <pre>
     * *Output-only* Indicates the lowest index in the `results` array that has
     * changed. The repeated `StreamingRecognitionResult` results overwrite past
     * results at this index and higher.
     * </pre>
     *
     * <code>int32 result_index = 3;</code>
     */
    public function setResultIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->result_index = $var;
    }

    /**
     * <pre>
     * *Output-only* Indicates the type of endpointer event.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.StreamingRecognizeResponse.EndpointerType endpointer_type = 4;</code>
     */
    public function getEndpointerType()
    {
        return $this->endpointer_type;
    }

    /**
     * <pre>
     * *Output-only* Indicates the type of endpointer event.
     * </pre>
     *
     * <code>.google.cloud.speech.v1beta1.StreamingRecognizeResponse.EndpointerType endpointer_type = 4;</code>
     */
    public function setEndpointerType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V1beta1\StreamingRecognizeResponse_EndpointerType::class);
        $this->endpointer_type = $var;
    }

}

