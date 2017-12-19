<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelResponse.ClosedChannel</code>
 */
class PendingChannelResponse_ClosedChannel extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1;</code>
     */
    private $channel = null;
    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2[json_name = "closing_txid"];</code>
     */
    private $closing_txid = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1;</code>
     * @return \Lnrpc\PendingChannelResponse_PendingChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1;</code>
     * @param \Lnrpc\PendingChannelResponse_PendingChannel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingChannelResponse_PendingChannel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2[json_name = "closing_txid"];</code>
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->closing_txid;
    }

    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2[json_name = "closing_txid"];</code>
     * @param string $var
     * @return $this
     */
    public function setClosingTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->closing_txid = $var;

        return $this;
    }

}

