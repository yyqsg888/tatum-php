<?php

/**
 * TronBlock Model
 *
 * @version   3.17.1
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * TronBlock Model
 */
class TronBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp"], 
        "parent_hash" => ["parentHash", "string", null, "getParentHash", "setParentHash"], 
        "witness_address" => ["witnessAddress", "string", null, "getWitnessAddress", "setWitnessAddress"], 
        "witness_signature" => ["witnessSignature", "string", null, "getWitnessSignature", "setWitnessSignature"], 
        "transactions" => ["transactions", "\Tatum\Model\TronTx[]", null, "getTransactions", "setTransactions"]
    ];

    /**
     * TronBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "block_number"=>null, "timestamp"=>null, "parent_hash"=>null, "witness_address"=>null, "witness_signature"=>null, "transactions"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Block hash
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number Block number.
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp Time of the block in UTC millis.
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Get parent_hash
     *
     * @return string|null
     */
    public function getParentHash(): ?string {
        return $this->_data["parent_hash"];
    }

    /**
     * Set parent_hash
     * 
     * @param string|null $parent_hash Hash of the parent block.
     * @return $this
     */
    public function setParentHash(?string $parent_hash) {
        $this->_data['parent_hash'] = $parent_hash;

        return $this;
    }

    /**
     * Get witness_address
     *
     * @return string|null
     */
    public function getWitnessAddress(): ?string {
        return $this->_data["witness_address"];
    }

    /**
     * Set witness_address
     * 
     * @param string|null $witness_address Witness address.
     * @return $this
     */
    public function setWitnessAddress(?string $witness_address) {
        $this->_data['witness_address'] = $witness_address;

        return $this;
    }

    /**
     * Get witness_signature
     *
     * @return string|null
     */
    public function getWitnessSignature(): ?string {
        return $this->_data["witness_signature"];
    }

    /**
     * Set witness_signature
     * 
     * @param string|null $witness_signature Witness signature.
     * @return $this
     */
    public function setWitnessSignature(?string $witness_signature) {
        $this->_data['witness_signature'] = $witness_signature;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\TronTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\TronTx[]|null $transactions Transactions that occurs in this block.
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }
}
