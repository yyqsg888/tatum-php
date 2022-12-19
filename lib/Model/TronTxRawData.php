<?php

/**
 * TronTx_rawData Model
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
 * TronTx_rawData Model
 * 
 * @description Raw data of the transaction.
 */
class TronTxRawData extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx_rawData";
    protected static $_definition = [
        "contract" => ["contract", "\Tatum\Model\TronTxRawDataContractInner[]", null, "getContract", "setContract"], 
        "ref_block_bytes" => ["ref_block_bytes", "float", null, "getRefBlockBytes", "setRefBlockBytes"], 
        "ref_block_hash" => ["ref_block_hash", "float", null, "getRefBlockHash", "setRefBlockHash"], 
        "expiration" => ["expiration", "float", null, "getExpiration", "setExpiration"], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp"]
    ];

    /**
     * TronTxRawData
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["contract"=>null, "ref_block_bytes"=>null, "ref_block_hash"=>null, "expiration"=>null, "timestamp"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['contract'])) {
            $ip[] = "'contract' can't be null";
        }
        if (is_null($this->_data['expiration'])) {
            $ip[] = "'expiration' can't be null";
        }
        if (is_null($this->_data['timestamp'])) {
            $ip[] = "'timestamp' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get contract
     *
     * @return \Tatum\Model\TronTxRawDataContractInner[]
     */
    public function getContract(): array {
        return $this->_data["contract"];
    }

    /**
     * Set contract
     * 
     * @param \Tatum\Model\TronTxRawDataContractInner[] $contract Smart contract invocations details.
     * @return $this
     */
    public function setContract(array $contract) {
        $this->_data['contract'] = $contract;

        return $this;
    }

    /**
     * Get ref_block_bytes
     *
     * @return float|null
     */
    public function getRefBlockBytes(): ?float {
        return $this->_data["ref_block_bytes"];
    }

    /**
     * Set ref_block_bytes
     * 
     * @param float|null $ref_block_bytes The height of the transaction reference block.
     * @return $this
     */
    public function setRefBlockBytes(?float $ref_block_bytes) {
        $this->_data['ref_block_bytes'] = $ref_block_bytes;

        return $this;
    }

    /**
     * Get ref_block_hash
     *
     * @return float|null
     */
    public function getRefBlockHash(): ?float {
        return $this->_data["ref_block_hash"];
    }

    /**
     * Set ref_block_hash
     * 
     * @param float|null $ref_block_hash The hash of the transaction reference block.
     * @return $this
     */
    public function setRefBlockHash(?float $ref_block_hash) {
        $this->_data['ref_block_hash'] = $ref_block_hash;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return float
     */
    public function getExpiration(): float {
        return $this->_data["expiration"];
    }

    /**
     * Set expiration
     * 
     * @param float $expiration Expiration of the transaction.
     * @return $this
     */
    public function setExpiration(float $expiration) {
        $this->_data['expiration'] = $expiration;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return float
     */
    public function getTimestamp(): float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float $timestamp Time of the transaction.
     * @return $this
     */
    public function setTimestamp(float $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }
}
