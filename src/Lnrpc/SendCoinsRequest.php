<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.SendCoinsRequest</code>
 */
class SendCoinsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string addr = 1;</code>
     */
    private $addr = '';
    /**
     * <code>int64 amount = 2;</code>
     */
    private $amount = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string addr = 1;</code>
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * <code>string addr = 1;</code>
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;
    }

    /**
     * <code>int64 amount = 2;</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>int64 amount = 2;</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;
    }

}

