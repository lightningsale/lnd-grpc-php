<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelResponse.PendingOpenChannel</code>
 */
class PendingChannelResponse_PendingOpenChannel extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The pending channel
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     */
    private $channel = null;
    /**
     *&#47; The height at which this channel will be confirmed
     *
     * Generated from protobuf field <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     */
    private $confirmation_height = 0;
    /**
     *&#47; The number of blocks until this channel is open
     *
     * Generated from protobuf field <code>int32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     */
    private $blocks_till_open = 0;
    /**
     **
     *The amount calculated to be paid in fees for the current set of
     *commitment transactions. The fee amount is persisted with the channel
     *in order to allow the fee amount to be removed and recalculated with
     *each channel state update, including updates that happen after a system
     *restart.
     *
     * Generated from protobuf field <code>int64 commit_fee = 4[json_name = "commit_fee"];</code>
     */
    private $commit_fee = 0;
    /**
     *&#47; The weight of the commitment transaction
     *
     * Generated from protobuf field <code>int64 commit_weight = 5[json_name = "commit_weight"];</code>
     */
    private $commit_weight = 0;
    /**
     **
     *The required number of satoshis per kilo-weight that the requester will
     *pay at all times, for both the funding transaction and commitment
     *transaction. This value can later be updated once the channel is open.
     *
     * Generated from protobuf field <code>int64 fee_per_kw = 6[json_name = "fee_per_kw"];</code>
     */
    private $fee_per_kw = 0;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The pending channel
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     * @return \Lnrpc\PendingChannelResponse_PendingChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     *&#47; The pending channel
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
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
     *&#47; The height at which this channel will be confirmed
     *
     * Generated from protobuf field <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     * @return int
     */
    public function getConfirmationHeight()
    {
        return $this->confirmation_height;
    }

    /**
     *&#47; The height at which this channel will be confirmed
     *
     * Generated from protobuf field <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setConfirmationHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->confirmation_height = $var;

        return $this;
    }

    /**
     *&#47; The number of blocks until this channel is open
     *
     * Generated from protobuf field <code>int32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     * @return int
     */
    public function getBlocksTillOpen()
    {
        return $this->blocks_till_open;
    }

    /**
     *&#47; The number of blocks until this channel is open
     *
     * Generated from protobuf field <code>int32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     * @param int $var
     * @return $this
     */
    public function setBlocksTillOpen($var)
    {
        GPBUtil::checkInt32($var);
        $this->blocks_till_open = $var;

        return $this;
    }

    /**
     **
     *The amount calculated to be paid in fees for the current set of
     *commitment transactions. The fee amount is persisted with the channel
     *in order to allow the fee amount to be removed and recalculated with
     *each channel state update, including updates that happen after a system
     *restart.
     *
     * Generated from protobuf field <code>int64 commit_fee = 4[json_name = "commit_fee"];</code>
     * @return int|string
     */
    public function getCommitFee()
    {
        return $this->commit_fee;
    }

    /**
     **
     *The amount calculated to be paid in fees for the current set of
     *commitment transactions. The fee amount is persisted with the channel
     *in order to allow the fee amount to be removed and recalculated with
     *each channel state update, including updates that happen after a system
     *restart.
     *
     * Generated from protobuf field <code>int64 commit_fee = 4[json_name = "commit_fee"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_fee = $var;

        return $this;
    }

    /**
     *&#47; The weight of the commitment transaction
     *
     * Generated from protobuf field <code>int64 commit_weight = 5[json_name = "commit_weight"];</code>
     * @return int|string
     */
    public function getCommitWeight()
    {
        return $this->commit_weight;
    }

    /**
     *&#47; The weight of the commitment transaction
     *
     * Generated from protobuf field <code>int64 commit_weight = 5[json_name = "commit_weight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitWeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_weight = $var;

        return $this;
    }

    /**
     **
     *The required number of satoshis per kilo-weight that the requester will
     *pay at all times, for both the funding transaction and commitment
     *transaction. This value can later be updated once the channel is open.
     *
     * Generated from protobuf field <code>int64 fee_per_kw = 6[json_name = "fee_per_kw"];</code>
     * @return int|string
     */
    public function getFeePerKw()
    {
        return $this->fee_per_kw;
    }

    /**
     **
     *The required number of satoshis per kilo-weight that the requester will
     *pay at all times, for both the funding transaction and commitment
     *transaction. This value can later be updated once the channel is open.
     *
     * Generated from protobuf field <code>int64 fee_per_kw = 6[json_name = "fee_per_kw"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeePerKw($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_per_kw = $var;

        return $this;
    }
}
