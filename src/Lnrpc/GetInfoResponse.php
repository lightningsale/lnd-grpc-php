<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.GetInfoResponse</code>
 */
class GetInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     */
    private $identity_pubkey = '';
    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     */
    private $alias = '';
    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     */
    private $num_pending_channels = 0;
    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     */
    private $num_active_channels = 0;
    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     */
    private $num_peers = 0;
    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     */
    private $block_height = 0;
    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     */
    private $block_hash = '';
    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     */
    private $synced_to_chain = false;
    /**
     *&#47; Whether the current node is connected to testnet
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet"];</code>
     */
    private $testnet = false;
    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated string chains = 11[json_name = "chains"];</code>
     */
    private $chains;

    public function __construct()
    {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     * @return string
     */
    public function getIdentityPubkey()
    {
        return $this->identity_pubkey;
    }

    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityPubkey($var)
    {
        GPBUtil::checkString($var, true);
        $this->identity_pubkey = $var;

        return $this;
    }

    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, true);
        $this->alias = $var;

        return $this;
    }

    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     * @return int
     */
    public function getNumPendingChannels()
    {
        return $this->num_pending_channels;
    }

    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumPendingChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_pending_channels = $var;

        return $this;
    }

    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     * @return int
     */
    public function getNumActiveChannels()
    {
        return $this->num_active_channels;
    }

    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumActiveChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_active_channels = $var;

        return $this;
    }

    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     * @return int
     */
    public function getNumPeers()
    {
        return $this->num_peers;
    }

    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumPeers($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_peers = $var;

        return $this;
    }

    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->block_height;
    }

    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setBlockHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->block_height = $var;

        return $this;
    }

    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, true);
        $this->block_hash = $var;

        return $this;
    }

    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     * @return bool
     */
    public function getSyncedToChain()
    {
        return $this->synced_to_chain;
    }

    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSyncedToChain($var)
    {
        GPBUtil::checkBool($var);
        $this->synced_to_chain = $var;

        return $this;
    }

    /**
     *&#47; Whether the current node is connected to testnet
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet"];</code>
     * @return bool
     */
    public function getTestnet()
    {
        return $this->testnet;
    }

    /**
     *&#47; Whether the current node is connected to testnet
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet"];</code>
     * @param bool $var
     * @return $this
     */
    public function setTestnet($var)
    {
        GPBUtil::checkBool($var);
        $this->testnet = $var;

        return $this;
    }

    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated string chains = 11[json_name = "chains"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChains()
    {
        return $this->chains;
    }

    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated string chains = 11[json_name = "chains"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->chains = $arr;

        return $this;
    }
}
