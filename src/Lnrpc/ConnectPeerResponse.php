<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ConnectPeerResponse</code>
 */
class ConnectPeerResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 peer_id = 1[json_name = "peer_id"];</code>
     */
    private $peer_id = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 peer_id = 1[json_name = "peer_id"];</code>
     */
    public function getPeerId()
    {
        return $this->peer_id;
    }

    /**
     * <code>int32 peer_id = 1[json_name = "peer_id"];</code>
     */
    public function setPeerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->peer_id = $var;
    }

}

