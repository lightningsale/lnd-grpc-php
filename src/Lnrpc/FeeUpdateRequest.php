<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FeeUpdateRequest</code>
 */
class FeeUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 3[json_name = "base_fee_msat"];</code>
     */
    private $base_fee_msat = 0;
    /**
     *&#47; The effective fee rate in milli-satoshis. The precision of this value goes up to 6 decimal places, so 1e-6.
     *
     * Generated from protobuf field <code>double fee_rate = 4[json_name = "fee_rate"];</code>
     */
    private $fee_rate = 0.0;
    protected $scope;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; If set, then this fee update applies to all currently active channels.
     *
     * Generated from protobuf field <code>bool global = 1[json_name = "global"];</code>
     * @return bool
     */
    public function getGlobal()
    {
        return $this->readOneof(1);
    }

    /**
     *&#47; If set, then this fee update applies to all currently active channels.
     *
     * Generated from protobuf field <code>bool global = 1[json_name = "global"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGlobal($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *&#47; If set, this fee update will target a specific channel.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2[json_name = "chan_point"];</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->readOneof(2);
    }

    /**
     *&#47; If set, this fee update will target a specific channel.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2[json_name = "chan_point"];</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChanPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 3[json_name = "base_fee_msat"];</code>
     * @return int|string
     */
    public function getBaseFeeMsat()
    {
        return $this->base_fee_msat;
    }

    /**
     *&#47; The base fee charged regardless of the number of milli-satoshis sent.
     *
     * Generated from protobuf field <code>int64 base_fee_msat = 3[json_name = "base_fee_msat"];</code>
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
     *&#47; The effective fee rate in milli-satoshis. The precision of this value goes up to 6 decimal places, so 1e-6.
     *
     * Generated from protobuf field <code>double fee_rate = 4[json_name = "fee_rate"];</code>
     * @return float
     */
    public function getFeeRate()
    {
        return $this->fee_rate;
    }

    /**
     *&#47; The effective fee rate in milli-satoshis. The precision of this value goes up to 6 decimal places, so 1e-6.
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

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->whichOneof("scope");
    }

}

