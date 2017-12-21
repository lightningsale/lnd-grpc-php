<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelCloseUpdate</code>
 */
class ChannelCloseUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes closing_txid = 1[json_name = "closing_txid"];</code>
     */
    private $closing_txid = '';
    /**
     * Generated from protobuf field <code>bool success = 2[json_name = "success"];</code>
     */
    private $success = false;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes closing_txid = 1[json_name = "closing_txid"];</code>
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->closing_txid;
    }

    /**
     * Generated from protobuf field <code>bytes closing_txid = 1[json_name = "closing_txid"];</code>
     * @param string $var
     * @return $this
     */
    public function setClosingTxid($var)
    {
        GPBUtil::checkString($var, false);
        $this->closing_txid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool success = 2[json_name = "success"];</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 2[json_name = "success"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }
}
