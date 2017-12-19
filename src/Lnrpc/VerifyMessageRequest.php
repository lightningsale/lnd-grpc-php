<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.VerifyMessageRequest</code>
 */
class VerifyMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The message over which the signature is to be verified
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     */
    private $msg = '';
    /**
     *&#47; The signature to be verifed over the given message
     *
     * Generated from protobuf field <code>string signature = 2[json_name = "signature"];</code>
     */
    private $signature = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The message over which the signature is to be verified
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *&#47; The message over which the signature is to be verified
     *
     * Generated from protobuf field <code>bytes msg = 1[json_name = "msg"];</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, False);
        $this->msg = $var;

        return $this;
    }

    /**
     *&#47; The signature to be verifed over the given message
     *
     * Generated from protobuf field <code>string signature = 2[json_name = "signature"];</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *&#47; The signature to be verifed over the given message
     *
     * Generated from protobuf field <code>string signature = 2[json_name = "signature"];</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

}

