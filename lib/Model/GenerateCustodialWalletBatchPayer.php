<?php

/**
 * GenerateCustodialWalletBatchPayer Model
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
 * GenerateCustodialWalletBatchPayer Model
 */
class GenerateCustodialWalletBatchPayer extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_CELO = 'CELO';
    protected static $_name = "GenerateCustodialWalletBatchPayer";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "fees_covered" => ["feesCovered", "bool", null, "getFeesCovered", "setFeesCovered"], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount"], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner"]
    ];

    /**
     * GenerateCustodialWalletBatchPayer
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "fees_covered"=>null, "batch_count"=>null, "owner"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['fees_covered'])) {
            $ip[] = "'fees_covered' can't be null";
        }
        if (is_null($this->_data['batch_count'])) {
            $ip[] = "'batch_count' can't be null";
        }
        if (($this->_data['batch_count'] > 270)) {
            $ip[] = "'batch_count' must be <= 270";
        }
        if (($this->_data['batch_count'] < 0)) {
            $ip[] = "'batch_count' must be >= 0";
        }
        if (is_null($this->_data['owner'])) {
            $ip[] = "'owner' can't be null";
        }
        if ((mb_strlen($this->_data['owner']) > 43)) {
            $ip[] = "'owner' length must be <= 43";
        }
        if ((mb_strlen($this->_data['owner']) < 42)) {
            $ip[] = "'owner' length must be >= 42";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_BSC,
            self::CHAIN_ONE,
            self::CHAIN_CELO,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateCustodialWalletBatchPayer.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get fees_covered
     *
     * @return bool
     */
    public function getFeesCovered(): bool {
        return $this->_data["fees_covered"];
    }

    /**
     * Set fees_covered
     * 
     * @param bool $fees_covered If set to true, blockchain fees will be covered from credits.
     * @return $this
     */
    public function setFeesCovered(bool $fees_covered) {
        $this->_data['fees_covered'] = $fees_covered;

        return $this;
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to generate.
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        if (($batch_count > 270)) {
            throw new IAE('GenerateCustodialWalletBatchPayer.setBatchCount: $batch_count must be <=270');
        }
        if (($batch_count < 0)) {
            throw new IAE('GenerateCustodialWalletBatchPayer.setBatchCount: $batch_count must be >=0');
        }
        $this->_data['batch_count'] = $batch_count;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner Owner of the addresses.
     * @return $this
     */
    public function setOwner(string $owner) {
        if ((mb_strlen($owner) > 43)) {
            throw new IAE('GenerateCustodialWalletBatchPayer.setOwner: $owner length must be <= 43');
        }
        if ((mb_strlen($owner) < 42)) {
            throw new IAE('GenerateCustodialWalletBatchPayer.setOwner: $owner length must be >= 42');
        }
        $this->_data['owner'] = $owner;

        return $this;
    }
}
