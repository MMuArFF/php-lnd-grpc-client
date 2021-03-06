<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ListInvoiceResponse</code>
 */
class ListInvoiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     */
    private $invoices;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * <code>repeated .lnrpc.Invoice invoices = 1[json_name = "invoices"];</code>
     */
    public function setInvoices(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Invoice::class);
        $this->invoices = $arr;
    }

}

