<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ConnectPeerRequest</code>
 */
class ConnectPeerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Lightning address of the peer, in the format `<pubkey>&#64;host`
     *
     * Generated from protobuf field <code>.lnrpc.LightningAddress addr = 1;</code>
     */
    private $addr = null;
    /**
     ** If set, the daemon will attempt to persistently connect to the target
     * peer.  Otherwise, the call will be synchronous. 
     *
     * Generated from protobuf field <code>bool perm = 2;</code>
     */
    private $perm = false;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; Lightning address of the peer, in the format `<pubkey>&#64;host`
     *
     * Generated from protobuf field <code>.lnrpc.LightningAddress addr = 1;</code>
     * @return \Lnrpc\LightningAddress
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     *&#47; Lightning address of the peer, in the format `<pubkey>&#64;host`
     *
     * Generated from protobuf field <code>.lnrpc.LightningAddress addr = 1;</code>
     * @param \Lnrpc\LightningAddress $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\LightningAddress::class);
        $this->addr = $var;

        return $this;
    }

    /**
     ** If set, the daemon will attempt to persistently connect to the target
     * peer.  Otherwise, the call will be synchronous. 
     *
     * Generated from protobuf field <code>bool perm = 2;</code>
     * @return bool
     */
    public function getPerm()
    {
        return $this->perm;
    }

    /**
     ** If set, the daemon will attempt to persistently connect to the target
     * peer.  Otherwise, the call will be synchronous. 
     *
     * Generated from protobuf field <code>bool perm = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setPerm($var)
    {
        GPBUtil::checkBool($var);
        $this->perm = $var;

        return $this;
    }

}

