<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ChannelBalanceResponse</code>
 */
class ChannelBalanceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 balance = 1[json_name = "balance"];</code>
     */
    private $balance = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 balance = 1[json_name = "balance"];</code>
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * <code>int64 balance = 1[json_name = "balance"];</code>
     */
    public function setBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->balance = $var;
    }

}

