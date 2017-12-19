<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace LightningSale\Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NetworkInfo</code>
 */
class NetworkInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     */
    private $graph_diameter = 0;
    /**
     * Generated from protobuf field <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     */
    private $avg_out_degree = 0.0;
    /**
     * Generated from protobuf field <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     */
    private $max_out_degree = 0;
    /**
     * Generated from protobuf field <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     */
    private $num_nodes = 0;
    /**
     * Generated from protobuf field <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     */
    private $num_channels = 0;
    /**
     * Generated from protobuf field <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     */
    private $total_network_capacity = 0;
    /**
     * Generated from protobuf field <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     */
    private $avg_channel_size = 0.0;
    /**
     * Generated from protobuf field <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     */
    private $min_channel_size = 0;
    /**
     * Generated from protobuf field <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     */
    private $max_channel_size = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     * @return int
     */
    public function getGraphDiameter()
    {
        return $this->graph_diameter;
    }

    /**
     * Generated from protobuf field <code>uint32 graph_diameter = 1[json_name = "graph_diameter"];</code>
     * @param int $var
     * @return $this
     */
    public function setGraphDiameter($var)
    {
        GPBUtil::checkUint32($var);
        $this->graph_diameter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     * @return float
     */
    public function getAvgOutDegree()
    {
        return $this->avg_out_degree;
    }

    /**
     * Generated from protobuf field <code>double avg_out_degree = 2[json_name = "avg_out_degree"];</code>
     * @param float $var
     * @return $this
     */
    public function setAvgOutDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->avg_out_degree = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     * @return int
     */
    public function getMaxOutDegree()
    {
        return $this->max_out_degree;
    }

    /**
     * Generated from protobuf field <code>uint32 max_out_degree = 3[json_name = "max_out_degree"];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxOutDegree($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_out_degree = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     * @return int
     */
    public function getNumNodes()
    {
        return $this->num_nodes;
    }

    /**
     * Generated from protobuf field <code>uint32 num_nodes = 4[json_name = "num_nodes"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumNodes($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_nodes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     * @return int
     */
    public function getNumChannels()
    {
        return $this->num_channels;
    }

    /**
     * Generated from protobuf field <code>uint32 num_channels = 5[json_name = "num_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_channels = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     * @return int|string
     */
    public function getTotalNetworkCapacity()
    {
        return $this->total_network_capacity;
    }

    /**
     * Generated from protobuf field <code>int64 total_network_capacity = 6[json_name = "total_network_capacity"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalNetworkCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_network_capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     * @return float
     */
    public function getAvgChannelSize()
    {
        return $this->avg_channel_size;
    }

    /**
     * Generated from protobuf field <code>double avg_channel_size = 7[json_name = "avg_channel_size"];</code>
     * @param float $var
     * @return $this
     */
    public function setAvgChannelSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->avg_channel_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     * @return int|string
     */
    public function getMinChannelSize()
    {
        return $this->min_channel_size;
    }

    /**
     * Generated from protobuf field <code>int64 min_channel_size = 8[json_name = "min_channel_size"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinChannelSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_channel_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     * @return int|string
     */
    public function getMaxChannelSize()
    {
        return $this->max_channel_size;
    }

    /**
     * Generated from protobuf field <code>int64 max_channel_size = 9[json_name = "max_channel_size"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxChannelSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_channel_size = $var;

        return $this;
    }

}

