<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.AddInvoiceResponse</code>
 */
class AddInvoiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     */
    private $r_hash = '';
    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 2[json_name = "payment_request"];</code>
     */
    private $payment_request = '';

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     * @return string
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     * Generated from protobuf field <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->r_hash = $var;

        return $this;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 2[json_name = "payment_request"];</code>
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->payment_request;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 2[json_name = "payment_request"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, true);
        $this->payment_request = $var;

        return $this;
    }
}
