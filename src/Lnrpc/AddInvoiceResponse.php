<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.AddInvoiceResponse</code>
 */
class AddInvoiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     */
    private $r_hash = '';
    /**
     * <code>string payment_request = 2[json_name = "payment_request"];</code>
     */
    private $payment_request = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     * <code>bytes r_hash = 1[json_name = "r_hash"];</code>
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_hash = $var;
    }

    /**
     * <code>string payment_request = 2[json_name = "payment_request"];</code>
     */
    public function getPaymentRequest()
    {
        return $this->payment_request;
    }

    /**
     * <code>string payment_request = 2[json_name = "payment_request"];</code>
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;
    }

}

