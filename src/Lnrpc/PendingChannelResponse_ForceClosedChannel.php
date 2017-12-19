<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelResponse.ForceClosedChannel</code>
 */
class PendingChannelResponse_ForceClosedChannel extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The pending channel to be force closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     */
    private $channel = null;
    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2[json_name = "closing_txid"];</code>
     */
    private $closing_txid = '';
    /**
     *&#47; The balance in satoshis encumbered in this pending channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 3[json_name = "limbo_balance"];</code>
     */
    private $limbo_balance = 0;
    /**
     *&#47; The height at which funds can be sweeped into the wallet
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4[json_name = "maturity_height"];</code>
     */
    private $maturity_height = 0;
    /**
     *Remaining # of blocks until the commitment output can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5[json_name = "blocks_til_maturity"];</code>
     */
    private $blocks_til_maturity = 0;
    /**
     *&#47; The total value of funds successfully recovered from this channel
     *
     * Generated from protobuf field <code>int64 recovered_balance = 6[json_name = "recovered_balance"];</code>
     */
    private $recovered_balance = 0;
    /**
     * Generated from protobuf field <code>repeated .lnrpc.PendingHTLC pending_htlcs = 8[json_name = "pending_htlcs"];</code>
     */
    private $pending_htlcs;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The pending channel to be force closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     * @return \Lnrpc\PendingChannelResponse_PendingChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     *&#47; The pending channel to be force closed
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

    /**
     *&#47; The balance in satoshis encumbered in this pending channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 3[json_name = "limbo_balance"];</code>
     * @return int|string
     */
    public function getLimboBalance()
    {
        return $this->limbo_balance;
    }

    /**
     *&#47; The balance in satoshis encumbered in this pending channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 3[json_name = "limbo_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimboBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->limbo_balance = $var;

        return $this;
    }

    /**
     *&#47; The height at which funds can be sweeped into the wallet
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4[json_name = "maturity_height"];</code>
     * @return int
     */
    public function getMaturityHeight()
    {
        return $this->maturity_height;
    }

    /**
     *&#47; The height at which funds can be sweeped into the wallet
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4[json_name = "maturity_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setMaturityHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->maturity_height = $var;

        return $this;
    }

    /**
     *Remaining # of blocks until the commitment output can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5[json_name = "blocks_til_maturity"];</code>
     * @return int
     */
    public function getBlocksTilMaturity()
    {
        return $this->blocks_til_maturity;
    }

    /**
     *Remaining # of blocks until the commitment output can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5[json_name = "blocks_til_maturity"];</code>
     * @param int $var
     * @return $this
     */
    public function setBlocksTilMaturity($var)
    {
        GPBUtil::checkInt32($var);
        $this->blocks_til_maturity = $var;

        return $this;
    }

    /**
     *&#47; The total value of funds successfully recovered from this channel
     *
     * Generated from protobuf field <code>int64 recovered_balance = 6[json_name = "recovered_balance"];</code>
     * @return int|string
     */
    public function getRecoveredBalance()
    {
        return $this->recovered_balance;
    }

    /**
     *&#47; The total value of funds successfully recovered from this channel
     *
     * Generated from protobuf field <code>int64 recovered_balance = 6[json_name = "recovered_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecoveredBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->recovered_balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.PendingHTLC pending_htlcs = 8[json_name = "pending_htlcs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingHtlcs()
    {
        return $this->pending_htlcs;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.PendingHTLC pending_htlcs = 8[json_name = "pending_htlcs"];</code>
     * @param \Lnrpc\PendingHTLC[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingHtlcs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\PendingHTLC::class);
        $this->pending_htlcs = $arr;

        return $this;
    }

}

