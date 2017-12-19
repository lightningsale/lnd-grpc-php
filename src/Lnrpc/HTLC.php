<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.HTLC</code>
 */
class HTLC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool incoming = 1[json_name = "incoming"];</code>
     */
    private $incoming = false;
    /**
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     */
    private $hash_lock = '';
    /**
     * Generated from protobuf field <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     */
    private $expiration_height = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool incoming = 1[json_name = "incoming"];</code>
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
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
     * Generated from protobuf field <code>int64 amount = 2[json_name = "amount"];</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
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
     * Generated from protobuf field <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     * @return string
     */
    public function getHashLock()
    {
        return $this->hash_lock;
    }

    /**
     * Generated from protobuf field <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     * @param string $var
     * @return $this
     */
    public function setHashLock($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash_lock = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     * @return int
     */
    public function getExpirationHeight()
    {
        return $this->expiration_height;
    }

    /**
     * Generated from protobuf field <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setExpirationHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->expiration_height = $var;

        return $this;
    }

}

