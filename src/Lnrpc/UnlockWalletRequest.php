<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.UnlockWalletRequest</code>
 */
class UnlockWalletRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes password = 1;</code>
     */
    private $password = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes password = 1;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>bytes password = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, False);
        $this->password = $var;

        return $this;
    }

}

