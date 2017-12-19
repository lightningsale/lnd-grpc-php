<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.CloseStatusUpdate</code>
 */
class CloseStatusUpdate extends \Google\Protobuf\Internal\Message
{
    protected $update;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate close_pending = 1[json_name = "close_pending"];</code>
     * @return \Lnrpc\PendingUpdate
     */
    public function getClosePending()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate close_pending = 1[json_name = "close_pending"];</code>
     * @param \Lnrpc\PendingUpdate $var
     * @return $this
     */
    public function setClosePending($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingUpdate::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ConfirmationUpdate confirmation = 2[json_name = "confirmation"];</code>
     * @return \Lnrpc\ConfirmationUpdate
     */
    public function getConfirmation()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ConfirmationUpdate confirmation = 2[json_name = "confirmation"];</code>
     * @param \Lnrpc\ConfirmationUpdate $var
     * @return $this
     */
    public function setConfirmation($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ConfirmationUpdate::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelCloseUpdate chan_close = 3[json_name = "chan_close"];</code>
     * @return \Lnrpc\ChannelCloseUpdate
     */
    public function getChanClose()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelCloseUpdate chan_close = 3[json_name = "chan_close"];</code>
     * @param \Lnrpc\ChannelCloseUpdate $var
     * @return $this
     */
    public function setChanClose($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelCloseUpdate::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdate()
    {
        return $this->whichOneof("update");
    }

}

