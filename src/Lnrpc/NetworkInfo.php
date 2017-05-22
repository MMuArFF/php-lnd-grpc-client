<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.NetworkInfo</code>
 */
class NetworkInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     */
    private $graph_diameter = 0;
    /**
     * <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     */
    private $avg_out_degree = 0.0;
    /**
     * <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     */
    private $max_out_degree = 0;
    /**
     * <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     */
    private $num_nodes = 0;
    /**
     * <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     */
    private $num_channels = 0;
    /**
     * <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     */
    private $total_network_capacity = 0;
    /**
     * <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     */
    private $avg_channel_size = 0.0;
    /**
     * <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     */
    private $min_channel_size = 0;
    /**
     * <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     */
    private $max_channel_size = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     */
    public function getGraphDiameter()
    {
        return $this->graph_diameter;
    }

    /**
     * <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     */
    public function setGraphDiameter($var)
    {
        GPBUtil::checkUint32($var);
        $this->graph_diameter = $var;
    }

    /**
     * <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     */
    public function getAvgOutDegree()
    {
        return $this->avg_out_degree;
    }

    /**
     * <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     */
    public function setAvgOutDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->avg_out_degree = $var;
    }

    /**
     * <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     */
    public function getMaxOutDegree()
    {
        return $this->max_out_degree;
    }

    /**
     * <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     */
    public function setMaxOutDegree($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_out_degree = $var;
    }

    /**
     * <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     */
    public function getNumNodes()
    {
        return $this->num_nodes;
    }

    /**
     * <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     */
    public function setNumNodes($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_nodes = $var;
    }

    /**
     * <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     */
    public function getNumChannels()
    {
        return $this->num_channels;
    }

    /**
     * <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     */
    public function setNumChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_channels = $var;
    }

    /**
     * <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     */
    public function getTotalNetworkCapacity()
    {
        return $this->total_network_capacity;
    }

    /**
     * <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     */
    public function setTotalNetworkCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_network_capacity = $var;
    }

    /**
     * <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     */
    public function getAvgChannelSize()
    {
        return $this->avg_channel_size;
    }

    /**
     * <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     */
    public function setAvgChannelSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->avg_channel_size = $var;
    }

    /**
     * <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     */
    public function getMinChannelSize()
    {
        return $this->min_channel_size;
    }

    /**
     * <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     */
    public function setMinChannelSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_channel_size = $var;
    }

    /**
     * <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     */
    public function getMaxChannelSize()
    {
        return $this->max_channel_size;
    }

    /**
     * <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     */
    public function setMaxChannelSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_channel_size = $var;
    }

}

