<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Transaction</code>
 */
class Transaction extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The transaction hash
     *
     * Generated from protobuf field <code>string tx_hash = 1[json_name = "tx_hash"];</code>
     */
    private $tx_hash = '';
    /**
     *&#47; The transaction ammount, denominated in satoshis
     *
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     */
    private $amount = 0;
    /**
     *&#47; The number of confirmations
     *
     * Generated from protobuf field <code>int32 num_confirmations = 3[json_name = "num_confirmations"];</code>
     */
    private $num_confirmations = 0;
    /**
     *&#47; The hash of the block this transaction was included in
     *
     * Generated from protobuf field <code>string block_hash = 4[json_name = "block_hash"];</code>
     */
    private $block_hash = '';
    /**
     *&#47; The height of the block this transaction was included in
     *
     * Generated from protobuf field <code>int32 block_height = 5[json_name = "block_height"];</code>
     */
    private $block_height = 0;
    /**
     *&#47; Timestamp of this transaction 
     *
     * Generated from protobuf field <code>int64 time_stamp = 6[json_name = "time_stamp"];</code>
     */
    private $time_stamp = 0;
    /**
     *&#47; Fees paid for this transaction
     *
     * Generated from protobuf field <code>int64 total_fees = 7[json_name = "total_fees"];</code>
     */
    private $total_fees = 0;
    /**
     *&#47; Addresses that received funds for this transaction
     *
     * Generated from protobuf field <code>repeated string dest_addresses = 8[json_name = "dest_addresses"];</code>
     */
    private $dest_addresses;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The transaction hash
     *
     * Generated from protobuf field <code>string tx_hash = 1[json_name = "tx_hash"];</code>
     * @return string
     */
    public function getTxHash()
    {
        return $this->tx_hash;
    }

    /**
     *&#47; The transaction hash
     *
     * Generated from protobuf field <code>string tx_hash = 1[json_name = "tx_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setTxHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->tx_hash = $var;

        return $this;
    }

    /**
     *&#47; The transaction ammount, denominated in satoshis
     *
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     *&#47; The transaction ammount, denominated in satoshis
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
     *&#47; The number of confirmations
     *
     * Generated from protobuf field <code>int32 num_confirmations = 3[json_name = "num_confirmations"];</code>
     * @return int
     */
    public function getNumConfirmations()
    {
        return $this->num_confirmations;
    }

    /**
     *&#47; The number of confirmations
     *
     * Generated from protobuf field <code>int32 num_confirmations = 3[json_name = "num_confirmations"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumConfirmations($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_confirmations = $var;

        return $this;
    }

    /**
     *&#47; The hash of the block this transaction was included in
     *
     * Generated from protobuf field <code>string block_hash = 4[json_name = "block_hash"];</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     *&#47; The hash of the block this transaction was included in
     *
     * Generated from protobuf field <code>string block_hash = 4[json_name = "block_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_hash = $var;

        return $this;
    }

    /**
     *&#47; The height of the block this transaction was included in
     *
     * Generated from protobuf field <code>int32 block_height = 5[json_name = "block_height"];</code>
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->block_height;
    }

    /**
     *&#47; The height of the block this transaction was included in
     *
     * Generated from protobuf field <code>int32 block_height = 5[json_name = "block_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setBlockHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->block_height = $var;

        return $this;
    }

    /**
     *&#47; Timestamp of this transaction 
     *
     * Generated from protobuf field <code>int64 time_stamp = 6[json_name = "time_stamp"];</code>
     * @return int|string
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     *&#47; Timestamp of this transaction 
     *
     * Generated from protobuf field <code>int64 time_stamp = 6[json_name = "time_stamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeStamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_stamp = $var;

        return $this;
    }

    /**
     *&#47; Fees paid for this transaction
     *
     * Generated from protobuf field <code>int64 total_fees = 7[json_name = "total_fees"];</code>
     * @return int|string
     */
    public function getTotalFees()
    {
        return $this->total_fees;
    }

    /**
     *&#47; Fees paid for this transaction
     *
     * Generated from protobuf field <code>int64 total_fees = 7[json_name = "total_fees"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalFees($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_fees = $var;

        return $this;
    }

    /**
     *&#47; Addresses that received funds for this transaction
     *
     * Generated from protobuf field <code>repeated string dest_addresses = 8[json_name = "dest_addresses"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestAddresses()
    {
        return $this->dest_addresses;
    }

    /**
     *&#47; Addresses that received funds for this transaction
     *
     * Generated from protobuf field <code>repeated string dest_addresses = 8[json_name = "dest_addresses"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dest_addresses = $arr;

        return $this;
    }

}

