<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.GetInfoResponse</code>
 */
class GetInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     */
    private $identity_pubkey = '';
    /**
     * <code>string alias = 2[json_name = "alias"];</code>
     */
    private $alias = '';
    /**
     * <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     */
    private $num_pending_channels = 0;
    /**
     * <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     */
    private $num_active_channels = 0;
    /**
     * <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     */
    private $num_peers = 0;
    /**
     * <code>uint32 block_height = 6[json_name = "block_height"];</code>
     */
    private $block_height = 0;
    /**
     * <code>string block_hash = 8[json_name = "block_hash"];</code>
     */
    private $block_hash = '';
    /**
     * <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     */
    private $synced_to_chain = false;
    /**
     * <code>bool testnet = 10[json_name = "testnet"];</code>
     */
    private $testnet = false;
    /**
     * <code>repeated string chains = 11[json_name = "chains"];</code>
     */
    private $chains;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     */
    public function getIdentityPubkey()
    {
        return $this->identity_pubkey;
    }

    /**
     * <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     */
    public function setIdentityPubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_pubkey = $var;
    }

    /**
     * <code>string alias = 2[json_name = "alias"];</code>
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * <code>string alias = 2[json_name = "alias"];</code>
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->alias = $var;
    }

    /**
     * <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     */
    public function getNumPendingChannels()
    {
        return $this->num_pending_channels;
    }

    /**
     * <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     */
    public function setNumPendingChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_pending_channels = $var;
    }

    /**
     * <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     */
    public function getNumActiveChannels()
    {
        return $this->num_active_channels;
    }

    /**
     * <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     */
    public function setNumActiveChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_active_channels = $var;
    }

    /**
     * <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     */
    public function getNumPeers()
    {
        return $this->num_peers;
    }

    /**
     * <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     */
    public function setNumPeers($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_peers = $var;
    }

    /**
     * <code>uint32 block_height = 6[json_name = "block_height"];</code>
     */
    public function getBlockHeight()
    {
        return $this->block_height;
    }

    /**
     * <code>uint32 block_height = 6[json_name = "block_height"];</code>
     */
    public function setBlockHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->block_height = $var;
    }

    /**
     * <code>string block_hash = 8[json_name = "block_hash"];</code>
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     * <code>string block_hash = 8[json_name = "block_hash"];</code>
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_hash = $var;
    }

    /**
     * <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     */
    public function getSyncedToChain()
    {
        return $this->synced_to_chain;
    }

    /**
     * <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     */
    public function setSyncedToChain($var)
    {
        GPBUtil::checkBool($var);
        $this->synced_to_chain = $var;
    }

    /**
     * <code>bool testnet = 10[json_name = "testnet"];</code>
     */
    public function getTestnet()
    {
        return $this->testnet;
    }

    /**
     * <code>bool testnet = 10[json_name = "testnet"];</code>
     */
    public function setTestnet($var)
    {
        GPBUtil::checkBool($var);
        $this->testnet = $var;
    }

    /**
     * <code>repeated string chains = 11[json_name = "chains"];</code>
     */
    public function getChains()
    {
        return $this->chains;
    }

    /**
     * <code>repeated string chains = 11[json_name = "chains"];</code>
     */
    public function setChains(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->chains = $arr;
    }

}

