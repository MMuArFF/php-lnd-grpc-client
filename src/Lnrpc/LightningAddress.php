<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.LightningAddress</code>
 */
class LightningAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string pubkey = 1[json_name = "pubkey"];</code>
     */
    private $pubkey = '';
    /**
     * <code>string host = 2[json_name = "host"];</code>
     */
    private $host = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string pubkey = 1[json_name = "pubkey"];</code>
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * <code>string pubkey = 1[json_name = "pubkey"];</code>
     */
    public function setPubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pubkey = $var;
    }

    /**
     * <code>string host = 2[json_name = "host"];</code>
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * <code>string host = 2[json_name = "host"];</code>
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;
    }

}

