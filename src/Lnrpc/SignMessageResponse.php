<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SignMessageResponse</code>
 */
class SignMessageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1[json_name = "signature"];</code>
     */
    private $signature = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1[json_name = "signature"];</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1[json_name = "signature"];</code>
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

