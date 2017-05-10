<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A speech recognition result corresponding to a portion of the audio.
 * </pre>
 *
 * Protobuf type <code>google.cloud.speech.v1beta1.SpeechRecognitionResult</code>
 */
class SpeechRecognitionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    private $alternatives;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    public function getAlternatives()
    {
        return $this->alternatives;
    }

    /**
     * <pre>
     * *Output-only* May contain one or more recognition hypotheses (up to the
     * maximum specified in `max_alternatives`).
     * </pre>
     *
     * <code>repeated .google.cloud.speech.v1beta1.SpeechRecognitionAlternative alternatives = 1;</code>
     */
    public function setAlternatives(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1beta1\SpeechRecognitionAlternative::class);
        $this->alternatives = $arr;
    }

}

