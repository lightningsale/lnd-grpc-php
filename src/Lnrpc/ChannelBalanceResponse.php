<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelBalanceResponse</code>
 */
class ChannelBalanceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Sum of channels balances denominated in satoshis
     *
     * Generated from protobuf field <code>int64 balance = 1[json_name = "balance"];</code>
     */
    private $balance = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; Sum of channels balances denominated in satoshis
     *
     * Generated from protobuf field <code>int64 balance = 1[json_name = "balance"];</code>
     * @return int|string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     *&#47; Sum of channels balances denominated in satoshis
     *
     * Generated from protobuf field <code>int64 balance = 1[json_name = "balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->balance = $var;

        return $this;
    }

}
