<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.HTLC</code>
 */
class HTLC extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool incoming = 1[json_name = "incoming"];</code>
     */
    private $incoming = false;
    /**
     * <code>int64 amount = 2[json_name = "amount"];</code>
     */
    private $amount = 0;
    /**
     * <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     */
    private $hash_lock = '';
    /**
     * <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     */
    private $expiration_height = 0;
    /**
     * <code>uint32 revocation_delay = 5[json_name = "revocation_delay"];</code>
     */
    private $revocation_delay = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool incoming = 1[json_name = "incoming"];</code>
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * <code>bool incoming = 1[json_name = "incoming"];</code>
     */
    public function setIncoming($var)
    {
        GPBUtil::checkBool($var);
        $this->incoming = $var;
    }

    /**
     * <code>int64 amount = 2[json_name = "amount"];</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>int64 amount = 2[json_name = "amount"];</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;
    }

    /**
     * <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     */
    public function getHashLock()
    {
        return $this->hash_lock;
    }

    /**
     * <code>bytes hash_lock = 3[json_name = "hash_lock"];</code>
     */
    public function setHashLock($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash_lock = $var;
    }

    /**
     * <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     */
    public function getExpirationHeight()
    {
        return $this->expiration_height;
    }

    /**
     * <code>uint32 expiration_height = 4[json_name = "expiration_height"];</code>
     */
    public function setExpirationHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->expiration_height = $var;
    }

    /**
     * <code>uint32 revocation_delay = 5[json_name = "revocation_delay"];</code>
     */
    public function getRevocationDelay()
    {
        return $this->revocation_delay;
    }

    /**
     * <code>uint32 revocation_delay = 5[json_name = "revocation_delay"];</code>
     */
    public function setRevocationDelay($var)
    {
        GPBUtil::checkUint32($var);
        $this->revocation_delay = $var;
    }

}

