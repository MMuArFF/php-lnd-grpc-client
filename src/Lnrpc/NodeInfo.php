<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.NodeInfo</code>
 */
class NodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.lnrpc.LightningNode node = 1[json_name = "node"];</code>
     */
    private $node = null;
    /**
     * <code>uint32 num_channels = 2[json_name = "num_channels"];</code>
     */
    private $num_channels = 0;
    /**
     * <code>int64 total_capacity = 3[json_name = "total_capacity"];</code>
     */
    private $total_capacity = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>.lnrpc.LightningNode node = 1[json_name = "node"];</code>
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * <code>.lnrpc.LightningNode node = 1[json_name = "node"];</code>
     */
    public function setNode(&$var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\LightningNode::class);
        $this->node = $var;
    }

    /**
     * <code>uint32 num_channels = 2[json_name = "num_channels"];</code>
     */
    public function getNumChannels()
    {
        return $this->num_channels;
    }

    /**
     * <code>uint32 num_channels = 2[json_name = "num_channels"];</code>
     */
    public function setNumChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_channels = $var;
    }

    /**
     * <code>int64 total_capacity = 3[json_name = "total_capacity"];</code>
     */
    public function getTotalCapacity()
    {
        return $this->total_capacity;
    }

    /**
     * <code>int64 total_capacity = 3[json_name = "total_capacity"];</code>
     */
    public function setTotalCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_capacity = $var;
    }

}

