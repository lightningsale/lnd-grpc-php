<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.DebugLevelResponse</code>
 */
class DebugLevelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     */
    private $sub_systems = '';

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     * @return string
     */
    public function getSubSystems()
    {
        return $this->sub_systems;
    }

    /**
     * Generated from protobuf field <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     * @param string $var
     * @return $this
     */
    public function setSubSystems($var)
    {
        GPBUtil::checkString($var, true);
        $this->sub_systems = $var;

        return $this;
    }
}
