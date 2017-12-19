<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingHTLC</code>
 */
class PendingHTLC extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1[json_name = "incoming"];</code>
     */
    private $incoming = false;
    /**
     *&#47; The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     */
    private $amount = 0;
    /**
     *&#47; The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3[json_name = "outpoint"];</code>
     */
    private $outpoint = '';
    /**
     *&#47; The next block height at which we can spend the current stage
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4[json_name = "maturity_height"];</code>
     */
    private $maturity_height = 0;
    /**
     **
     *The number of blocks remaining until the current stage can be swept.
     *Negative values indicate how many blocks have passed since becoming
     *mature.
     *
     * Generated from protobuf field <code>int32 blocks_til_maturity = 5[json_name = "blocks_til_maturity"];</code>
     */
    private $blocks_til_maturity = 0;
    /**
     *&#47; Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6[json_name = "stage"];</code>
     */
    private $stage = 0;

    public function __construct() {
        \LightningSale\GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1[json_name = "incoming"];</code>
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     *&#47; The direction within the channel that the htlc was sent
     *
     * Generated from protobuf field <code>bool incoming = 1[json_name = "incoming"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIncoming($var)
    {
        GPBUtil::checkBool($var);
        $this->incoming = $var;

        return $this;
    }

    /**
     *&#47; The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     *&#47; The total value of the htlc
     *
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     *&#47; The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3[json_name = "outpoint"];</code>
     * @return string
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    /**
     *&#47; The final output to be swept back to the user's wallet
     *
     * Generated from protobuf field <code>string outpoint = 3[json_name = "outpoint"];</code>
     * @param string $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->outpoint = $var;

        return $this;
    }

    /**
     *&#47; The next block height at which we can spend the current stage
     *
     * Generated from protobuf field <code>uint32 maturity_height = 4[json_name = "maturity_height"];</code>
     * @return int
     */
    public function getMaturityHeight()
    {
        return $this->maturity_height;
    }

    /**
     *&#47; The next block height at which we can spend the current stage
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
     **
     *The number of blocks remaining until the current stage can be swept.
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
     **
     *The number of blocks remaining until the current stage can be swept.
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
     *&#47; Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6[json_name = "stage"];</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     *&#47; Indicates whether the htlc is in its first or second stage of recovery
     *
     * Generated from protobuf field <code>uint32 stage = 6[json_name = "stage"];</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage = $var;

        return $this;
    }

}

