<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendResponse</code>
 */
class SendResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string payment_error = 1[json_name = "payment_error"];</code>
     */
    private $payment_error = '';
    /**
     * Generated from protobuf field <code>bytes payment_preimage = 2[json_name = "payment_preimage"];</code>
     */
    private $payment_preimage = '';
    /**
     * Generated from protobuf field <code>.lnrpc.Route payment_route = 3[json_name = "payment_route"];</code>
     */
    private $payment_route = null;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string payment_error = 1[json_name = "payment_error"];</code>
     * @return string
     */
    public function getPaymentError()
    {
        return $this->payment_error;
    }

    /**
     * Generated from protobuf field <code>string payment_error = 1[json_name = "payment_error"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentError($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payment_preimage = 2[json_name = "payment_preimage"];</code>
     * @return string
     */
    public function getPaymentPreimage()
    {
        return $this->payment_preimage;
    }

    /**
     * Generated from protobuf field <code>bytes payment_preimage = 2[json_name = "payment_preimage"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_preimage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.Route payment_route = 3[json_name = "payment_route"];</code>
     * @return \Lnrpc\Route
     */
    public function getPaymentRoute()
    {
        return $this->payment_route;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.Route payment_route = 3[json_name = "payment_route"];</code>
     * @param \Lnrpc\Route $var
     * @return $this
     */
    public function setPaymentRoute($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Route::class);
        $this->payment_route = $var;

        return $this;
    }

}

