<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.PayReqString</code>
 */
class PayReqString extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string pay_req = 1;</code>
     */
    private $pay_req = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string pay_req = 1;</code>
     */
    public function getPayReq()
    {
        return $this->pay_req;
    }

    /**
     * <code>string pay_req = 1;</code>
     */
    public function setPayReq($var)
    {
        GPBUtil::checkString($var, True);
        $this->pay_req = $var;
    }

}

