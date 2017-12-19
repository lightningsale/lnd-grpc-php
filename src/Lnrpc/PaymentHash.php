<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PaymentHash</code>
 */
class PaymentHash extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The hex-encoded payment hash of the invoice to be looked up. The passed
     *payment hash must be exactly 32 bytes, otherwise an error is returned.
     *
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     */
    private $r_hash_str = '';
    /**
     *&#47; The payment hash of the invoice to be looked up.
     *
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     */
    private $r_hash = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     **
     *The hex-encoded payment hash of the invoice to be looked up. The passed
     *payment hash must be exactly 32 bytes, otherwise an error is returned.
     *
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     * @return string
     */
    public function getRHashStr()
    {
        return $this->r_hash_str;
    }

    /**
     **
     *The hex-encoded payment hash of the invoice to be looked up. The passed
     *payment hash must be exactly 32 bytes, otherwise an error is returned.
     *
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHashStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->r_hash_str = $var;

        return $this;
    }

    /**
     *&#47; The payment hash of the invoice to be looked up.
     *
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     * @return string
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     *&#47; The payment hash of the invoice to be looked up.
     *
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_hash = $var;

        return $this;
    }

}

