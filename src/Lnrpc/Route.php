<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *A path through the channel graph which runs over one or more channels in
 *succession. This struct carries all the information required to craft the
 *Sphinx onion packet, and send the payment along the first hop in the path. A
 *route is only selected as valid if all the channels have sufficient capacity to
 *carry the initial payment amount after fees are accounted for.
 *
 * Generated from protobuf message <code>lnrpc.Route</code>
 */
class Route extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The cumulative (final) time lock across the entire route.  This is the CLTV
     *value that should be extended to the first hop in the route. All other hops
     *will decrement the time-lock as advertised, leaving enough time for all
     *hops to wait for or present the payment preimage to complete the payment.
     *
     * Generated from protobuf field <code>uint32 total_time_lock = 1[json_name = "total_time_lock"];</code>
     */
    private $total_time_lock = 0;
    /**
     **
     *The sum of the fees paid at each hop within the final route.  In the case
     *of a one-hop payment, this value will be zero as we don't need to pay a fee
     *it ourself.
     *
     * Generated from protobuf field <code>int64 total_fees = 2[json_name = "total_fees"];</code>
     */
    private $total_fees = 0;
    /**
     **
     *The total amount of funds required to complete a payment over this route.
     *This value includes the cumulative fees at each hop. As a result, the HTLC
     *extended to the first-hop in the route will need to have at least this many
     *satoshis, otherwise the route will fail at an intermediate node due to an
     *insufficient amount of fees.
     *
     * Generated from protobuf field <code>int64 total_amt = 3[json_name = "total_amt"];</code>
     */
    private $total_amt = 0;
    /**
     **
     *Contains details concerning the specific forwarding details at each hop.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Hop hops = 4[json_name = "hops"];</code>
     */
    private $hops;

    public function __construct() {
        \LightningSale\GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     **
     *The cumulative (final) time lock across the entire route.  This is the CLTV
     *value that should be extended to the first hop in the route. All other hops
     *will decrement the time-lock as advertised, leaving enough time for all
     *hops to wait for or present the payment preimage to complete the payment.
     *
     * Generated from protobuf field <code>uint32 total_time_lock = 1[json_name = "total_time_lock"];</code>
     * @return int
     */
    public function getTotalTimeLock()
    {
        return $this->total_time_lock;
    }

    /**
     **
     *The cumulative (final) time lock across the entire route.  This is the CLTV
     *value that should be extended to the first hop in the route. All other hops
     *will decrement the time-lock as advertised, leaving enough time for all
     *hops to wait for or present the payment preimage to complete the payment.
     *
     * Generated from protobuf field <code>uint32 total_time_lock = 1[json_name = "total_time_lock"];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalTimeLock($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_time_lock = $var;

        return $this;
    }

    /**
     **
     *The sum of the fees paid at each hop within the final route.  In the case
     *of a one-hop payment, this value will be zero as we don't need to pay a fee
     *it ourself.
     *
     * Generated from protobuf field <code>int64 total_fees = 2[json_name = "total_fees"];</code>
     * @return int|string
     */
    public function getTotalFees()
    {
        return $this->total_fees;
    }

    /**
     **
     *The sum of the fees paid at each hop within the final route.  In the case
     *of a one-hop payment, this value will be zero as we don't need to pay a fee
     *it ourself.
     *
     * Generated from protobuf field <code>int64 total_fees = 2[json_name = "total_fees"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalFees($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_fees = $var;

        return $this;
    }

    /**
     **
     *The total amount of funds required to complete a payment over this route.
     *This value includes the cumulative fees at each hop. As a result, the HTLC
     *extended to the first-hop in the route will need to have at least this many
     *satoshis, otherwise the route will fail at an intermediate node due to an
     *insufficient amount of fees.
     *
     * Generated from protobuf field <code>int64 total_amt = 3[json_name = "total_amt"];</code>
     * @return int|string
     */
    public function getTotalAmt()
    {
        return $this->total_amt;
    }

    /**
     **
     *The total amount of funds required to complete a payment over this route.
     *This value includes the cumulative fees at each hop. As a result, the HTLC
     *extended to the first-hop in the route will need to have at least this many
     *satoshis, otherwise the route will fail at an intermediate node due to an
     *insufficient amount of fees.
     *
     * Generated from protobuf field <code>int64 total_amt = 3[json_name = "total_amt"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_amt = $var;

        return $this;
    }

    /**
     **
     *Contains details concerning the specific forwarding details at each hop.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Hop hops = 4[json_name = "hops"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHops()
    {
        return $this->hops;
    }

    /**
     **
     *Contains details concerning the specific forwarding details at each hop.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Hop hops = 4[json_name = "hops"];</code>
     * @param \LightningSale\Lnrpc\Hop[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHops($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LightningSale\Lnrpc\Hop::class);
        $this->hops = $arr;

        return $this;
    }

}

