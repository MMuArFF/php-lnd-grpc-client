<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.DebugLevelResponse</code>
 */
class DebugLevelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     */
    private $sub_systems = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     */
    public function getSubSystems()
    {
        return $this->sub_systems;
    }

    /**
     * <code>string sub_systems = 1[json_name = "sub_systems"];</code>
     */
    public function setSubSystems($var)
    {
        GPBUtil::checkString($var, True);
        $this->sub_systems = $var;
    }

}

