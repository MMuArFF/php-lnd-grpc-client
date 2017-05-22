<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ListChannelsResponse</code>
 */
class ListChannelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .lnrpc.ActiveChannel channels = 11[json_name = "channels"];</code>
     */
    private $channels;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .lnrpc.ActiveChannel channels = 11[json_name = "channels"];</code>
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * <code>repeated .lnrpc.ActiveChannel channels = 11[json_name = "channels"];</code>
     */
    public function setChannels(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\ActiveChannel::class);
        $this->channels = $arr;
    }

}
