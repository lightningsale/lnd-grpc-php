<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Hop</code>
 */
class Hop extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     */
    private $chan_id = 0;
    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     */
    private $chan_capacity = 0;
    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward"];</code>
     */
    private $amt_to_forward = 0;
    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee"];</code>
     */
    private $fee = 0;
    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     */
    private $expiry = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     * @return int|string
     */
    public function getChanCapacity()
    {
        return $this->chan_capacity;
    }

    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->chan_capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward"];</code>
     * @return int|string
     */
    public function getAmtToForward()
    {
        return $this->amt_to_forward;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtToForward($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_to_forward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee"];</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     * @return int
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     * @param int $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkUint32($var);
        $this->expiry = $var;

        return $this;
    }

}

