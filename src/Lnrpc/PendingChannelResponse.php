<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelResponse</code>
 */
class PendingChannelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1[json_name = "total_limbo_balance"];</code>
     */
    private $total_limbo_balance = 0;
    /**
     *&#47; Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.PendingOpenChannel pending_open_channels = 2[json_name = "pending_open_channels"];</code>
     */
    private $pending_open_channels;
    /**
     *&#47; Channels pending closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ClosedChannel pending_closing_channels = 3[json_name = "pending_closing_channels"];</code>
     */
    private $pending_closing_channels;
    /**
     *&#47; Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ForceClosedChannel pending_force_closing_channels = 4[json_name = "pending_force_closing_channels"];</code>
     */
    private $pending_force_closing_channels;

    public function __construct() {
        \LightningSale\GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1[json_name = "total_limbo_balance"];</code>
     * @return int|string
     */
    public function getTotalLimboBalance()
    {
        return $this->total_limbo_balance;
    }

    /**
     *&#47; The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1[json_name = "total_limbo_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalLimboBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_limbo_balance = $var;

        return $this;
    }

    /**
     *&#47; Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.PendingOpenChannel pending_open_channels = 2[json_name = "pending_open_channels"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingOpenChannels()
    {
        return $this->pending_open_channels;
    }

    /**
     *&#47; Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.PendingOpenChannel pending_open_channels = 2[json_name = "pending_open_channels"];</code>
     * @param \LightningSale\Lnrpc\PendingChannelResponse_PendingOpenChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingOpenChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LightningSale\Lnrpc\PendingChannelResponse_PendingOpenChannel::class);
        $this->pending_open_channels = $arr;

        return $this;
    }

    /**
     *&#47; Channels pending closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ClosedChannel pending_closing_channels = 3[json_name = "pending_closing_channels"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingClosingChannels()
    {
        return $this->pending_closing_channels;
    }

    /**
     *&#47; Channels pending closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ClosedChannel pending_closing_channels = 3[json_name = "pending_closing_channels"];</code>
     * @param \LightningSale\Lnrpc\PendingChannelResponse_ClosedChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingClosingChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LightningSale\Lnrpc\PendingChannelResponse_ClosedChannel::class);
        $this->pending_closing_channels = $arr;

        return $this;
    }

    /**
     *&#47; Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ForceClosedChannel pending_force_closing_channels = 4[json_name = "pending_force_closing_channels"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingForceClosingChannels()
    {
        return $this->pending_force_closing_channels;
    }

    /**
     *&#47; Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelResponse.ForceClosedChannel pending_force_closing_channels = 4[json_name = "pending_force_closing_channels"];</code>
     * @param \LightningSale\Lnrpc\PendingChannelResponse_ForceClosedChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingForceClosingChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LightningSale\Lnrpc\PendingChannelResponse_ForceClosedChannel::class);
        $this->pending_force_closing_channels = $arr;

        return $this;
    }

}

