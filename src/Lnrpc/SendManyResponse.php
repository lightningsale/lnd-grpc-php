<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendManyResponse</code>
 */
class SendManyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1[json_name = "txid"];</code>
     */
    private $txid = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1[json_name = "txid"];</code>
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1[json_name = "txid"];</code>
     * @param string $var
     * @return $this
     */
    public function setTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->txid = $var;

        return $this;
    }

}

