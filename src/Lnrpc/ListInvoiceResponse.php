<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ListInvoiceResponse</code>
 */
class ListInvoiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     */
    private $invoices;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     * @param \Lnrpc\Invoice[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInvoices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Invoice::class);
        $this->invoices = $arr;

        return $this;
    }
}
