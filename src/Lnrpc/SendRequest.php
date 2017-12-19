<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendRequest</code>
 */
class SendRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     */
    private $dest = '';
    /**
     *&#47; The hex-encoded identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>string dest_string = 2;</code>
     */
    private $dest_string = '';
    /**
     *&#47; Number of satoshis to send. 
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     */
    private $amt = 0;
    /**
     *&#47; The hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     */
    private $payment_hash = '';
    /**
     *&#47; The hex-encoded hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>string payment_hash_string = 5;</code>
     */
    private $payment_hash_string = '';
    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 6;</code>
     */
    private $payment_request = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     * @return string
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     *&#47; The identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDest($var)
    {
        GPBUtil::checkString($var, False);
        $this->dest = $var;

        return $this;
    }

    /**
     *&#47; The hex-encoded identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>string dest_string = 2;</code>
     * @return string
     */
    public function getDestString()
    {
        return $this->dest_string;
    }

    /**
     *&#47; The hex-encoded identity pubkey of the payment recipient
     *
     * Generated from protobuf field <code>string dest_string = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestString($var)
    {
        GPBUtil::checkString($var, True);
        $this->dest_string = $var;

        return $this;
    }

    /**
     *&#47; Number of satoshis to send. 
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     * @return int|string
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     *&#47; Number of satoshis to send. 
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt = $var;

        return $this;
    }

    /**
     *&#47; The hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     *&#47; The hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     *&#47; The hex-encoded hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>string payment_hash_string = 5;</code>
     * @return string
     */
    public function getPaymentHashString()
    {
        return $this->payment_hash_string;
    }

    /**
     *&#47; The hex-encoded hash to use within the payment's HTLC
     *
     * Generated from protobuf field <code>string payment_hash_string = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHashString($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_hash_string = $var;

        return $this;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 6;</code>
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
     * Generated from protobuf field <code>string payment_request = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;

        return $this;
    }

}

