<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelOpenUpdate</code>
 */
class ChannelOpenUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1[json_name = "channel_point"];</code>
     */
    private $channel_point = null;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1[json_name = "channel_point"];</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1[json_name = "channel_point"];</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->channel_point = $var;

        return $this;
    }
}
