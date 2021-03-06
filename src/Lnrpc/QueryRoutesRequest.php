<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.QueryRoutesRequest</code>
 */
class QueryRoutesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The 33-byte hex-encoded public key for the payment destination
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     */
    private $pub_key = '';
    /**
     *&#47; The amount to send expressed in satoshis
     *
     * Generated from protobuf field <code>int64 amt = 2;</code>
     */
    private $amt = 0;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The 33-byte hex-encoded public key for the payment destination
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     *&#47; The 33-byte hex-encoded public key for the payment destination
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->pub_key = $var;

        return $this;
    }

    /**
     *&#47; The amount to send expressed in satoshis
     *
     * Generated from protobuf field <code>int64 amt = 2;</code>
     * @return int|string
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     *&#47; The amount to send expressed in satoshis
     *
     * Generated from protobuf field <code>int64 amt = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt = $var;

        return $this;
    }
}
