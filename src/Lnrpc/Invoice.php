<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LigthningSale\LnRpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Invoice</code>
 */
class Invoice extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     */
    private $memo = '';
    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     */
    private $receipt = '';
    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     */
    private $r_preimage = '';
    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     */
    private $r_hash = '';
    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     */
    private $value = 0;
    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     */
    private $settled = false;
    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     */
    private $creation_date = 0;
    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     */
    private $settle_date = 0;
    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
     */
    private $payment_request = '';
    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     */
    private $description_hash = '';
    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
     */
    private $expiry = 0;
    /**
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
     */
    private $fallback_addr = '';
    /**
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     */
    private $cltv_expiry = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     * @param string $var
     * @return $this
     */
    public function setReceipt($var)
    {
        GPBUtil::checkString($var, False);
        $this->receipt = $var;

        return $this;
    }

    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     * @return string
     */
    public function getRPreimage()
    {
        return $this->r_preimage;
    }

    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     * @param string $var
     * @return $this
     */
    public function setRPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_preimage = $var;

        return $this;
    }

    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     * @return string
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_hash = $var;

        return $this;
    }

    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     * @return bool
     */
    public function getSettled()
    {
        return $this->settled;
    }

    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSettled($var)
    {
        GPBUtil::checkBool($var);
        $this->settled = $var;

        return $this;
    }

    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     * @return int|string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_date = $var;

        return $this;
    }

    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     * @return int|string
     */
    public function getSettleDate()
    {
        return $this->settle_date;
    }

    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettleDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->settle_date = $var;

        return $this;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
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
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;

        return $this;
    }

    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->description_hash = $var;

        return $this;
    }

    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallback_addr;
    }

    /**
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
     * @param string $var
     * @return $this
     */
    public function setFallbackAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->fallback_addr = $var;

        return $this;
    }

    /**
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     * @return int|string
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkUint64($var);
        $this->cltv_expiry = $var;

        return $this;
    }

}

