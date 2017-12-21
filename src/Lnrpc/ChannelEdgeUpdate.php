<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelEdgeUpdate</code>
 */
class ChannelEdgeUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     */
    private $chan_id = 0;
    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     */
    private $chan_point = null;
    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     */
    private $capacity = 0;
    /**
     * Generated from protobuf field <code>.lnrpc.RoutingPolicy routing_policy = 4;</code>
     */
    private $routing_policy = null;
    /**
     * Generated from protobuf field <code>string advertising_node = 5;</code>
     */
    private $advertising_node = '';
    /**
     * Generated from protobuf field <code>string connecting_node = 6;</code>
     */
    private $connecting_node = '';

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
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
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
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
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chan_point;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 2;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChanPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->chan_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     * @return int|string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.RoutingPolicy routing_policy = 4;</code>
     * @return \Lnrpc\RoutingPolicy
     */
    public function getRoutingPolicy()
    {
        return $this->routing_policy;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.RoutingPolicy routing_policy = 4;</code>
     * @param \Lnrpc\RoutingPolicy $var
     * @return $this
     */
    public function setRoutingPolicy($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\RoutingPolicy::class);
        $this->routing_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string advertising_node = 5;</code>
     * @return string
     */
    public function getAdvertisingNode()
    {
        return $this->advertising_node;
    }

    /**
     * Generated from protobuf field <code>string advertising_node = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertisingNode($var)
    {
        GPBUtil::checkString($var, true);
        $this->advertising_node = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string connecting_node = 6;</code>
     * @return string
     */
    public function getConnectingNode()
    {
        return $this->connecting_node;
    }

    /**
     * Generated from protobuf field <code>string connecting_node = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setConnectingNode($var)
    {
        GPBUtil::checkString($var, true);
        $this->connecting_node = $var;

        return $this;
    }
}
