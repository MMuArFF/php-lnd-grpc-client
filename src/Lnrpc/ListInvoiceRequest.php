<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ListInvoiceRequest</code>
 */
class ListInvoiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool pending_only = 1;</code>
     */
    private $pending_only = false;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool pending_only = 1;</code>
     */
    public function getPendingOnly()
    {
        return $this->pending_only;
    }

    /**
     * <code>bool pending_only = 1;</code>
     */
    public function setPendingOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->pending_only = $var;
    }

}

