<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ListInvoiceRequest</code>
 */
class ListInvoiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Toggles if all invoices should be returned, or only those that are currently unsettled.
     *
     * Generated from protobuf field <code>bool pending_only = 1;</code>
     */
    private $pending_only = false;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; Toggles if all invoices should be returned, or only those that are currently unsettled.
     *
     * Generated from protobuf field <code>bool pending_only = 1;</code>
     * @return bool
     */
    public function getPendingOnly()
    {
        return $this->pending_only;
    }

    /**
     *&#47; Toggles if all invoices should be returned, or only those that are currently unsettled.
     *
     * Generated from protobuf field <code>bool pending_only = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPendingOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->pending_only = $var;

        return $this;
    }
}
