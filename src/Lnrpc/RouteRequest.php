<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.RouteRequest</code>
 */
class RouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string pub_key = 1;</code>
     */
    private $pub_key = '';
    /**
     * <code>int64 amt = 2;</code>
     */
    private $amt = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string pub_key = 1;</code>
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     * <code>string pub_key = 1;</code>
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pub_key = $var;
    }

    /**
     * <code>int64 amt = 2;</code>
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     * <code>int64 amt = 2;</code>
     */
    public function setAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt = $var;
    }

}

