<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelFeeReport</code>
 */
class ChannelFeeReport extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The channel that this fee report belongs to.
     *
     * Generated from protobuf field <code>string chan_point = 1[json_name = "channel_point"];</code>
     */
    private $chan_point = '';
    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 2[json_name = "base_fee_msat"];</code>
     */
    private $base_fee_msat = 0;
    /**
     *&#47; The amount charged per milli-satoshis transferred expressed in millionths of a satoshi.
     *
     * Generated from protobuf field <code>int64 fee_per_mil = 3[json_name = "fee_per_mil"];</code>
     */
    private $fee_per_mil = 0;
    /**
     *&#47; The effective fee rate in milli-satoshis. Computed by dividing the fee_per_mil value by 1 million.
     *
     * Generated from protobuf field <code>double fee_rate = 4[json_name = "fee_rate"];</code>
     */
    private $fee_rate = 0.0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The channel that this fee report belongs to.
     *
     * Generated from protobuf field <code>string chan_point = 1[json_name = "channel_point"];</code>
     * @return string
     */
    public function getChanPoint()
    {
        return $this->chan_point;
    }

    /**
     *&#47; The channel that this fee report belongs to.
     *
     * Generated from protobuf field <code>string chan_point = 1[json_name = "channel_point"];</code>
     * @param string $var
     * @return $this
     */
    public function setChanPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->chan_point = $var;

        return $this;
    }

    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 2[json_name = "base_fee_msat"];</code>
     * @return int|string
     */
    public function getBaseFeeMsat()
    {
        return $this->base_fee_msat;
    }

    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 2[json_name = "base_fee_msat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBaseFeeMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->base_fee_msat = $var;

        return $this;
    }

    /**
     *&#47; The amount charged per milli-satoshis transferred expressed in millionths of a satoshi.
     *
     * Generated from protobuf field <code>int64 fee_per_mil = 3[json_name = "fee_per_mil"];</code>
     * @return int|string
     */
    public function getFeePerMil()
    {
        return $this->fee_per_mil;
    }

    /**
     *&#47; The amount charged per milli-satoshis transferred expressed in millionths of a satoshi.
     *
     * Generated from protobuf field <code>int64 fee_per_mil = 3[json_name = "fee_per_mil"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeePerMil($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_per_mil = $var;

        return $this;
    }

    /**
     *&#47; The effective fee rate in milli-satoshis. Computed by dividing the fee_per_mil value by 1 million.
     *
     * Generated from protobuf field <code>double fee_rate = 4[json_name = "fee_rate"];</code>
     * @return float
     */
    public function getFeeRate()
    {
        return $this->fee_rate;
    }

    /**
     *&#47; The effective fee rate in milli-satoshis. Computed by dividing the fee_per_mil value by 1 million.
     *
     * Generated from protobuf field <code>double fee_rate = 4[json_name = "fee_rate"];</code>
     * @param float $var
     * @return $this
     */
    public function setFeeRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->fee_rate = $var;

        return $this;
    }

}

