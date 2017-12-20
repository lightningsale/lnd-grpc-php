<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NodeInfoRequest</code>
 */
class NodeInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The 33-byte hex-encoded compressed public of the target node 
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     */
    private $pub_key = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The 33-byte hex-encoded compressed public of the target node 
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     *&#47; The 33-byte hex-encoded compressed public of the target node 
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pub_key = $var;

        return $this;
    }

}

