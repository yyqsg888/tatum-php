<?php

/**
 * GenerateCustodialWalletBatch Model
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
 * GenerateCustodialWalletBatch Model
 */
class GenerateCustodialWalletBatch extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_KLAY = 'KLAY';
    protected static $_name = "GenerateCustodialWalletBatch";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount"], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"]
    ];

    /**
     * GenerateCustodialWalletBatch
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "from_private_key"=>null, "batch_count"=>null, "owner"=>null, "fee"=>null, "nonce"=>null] as $k => $v) {
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
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
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
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
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
            self::CHAIN_XDC,
            self::CHAIN_KLAY,
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
            throw new IAE(sprintf("GenerateCustodialWalletBatch.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of account, from which the transaction will be initiated.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('GenerateCustodialWalletBatch.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('GenerateCustodialWalletBatch.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
            throw new IAE('GenerateCustodialWalletBatch.setBatchCount: $batch_count must be <=270');
        }
        if (($batch_count < 0)) {
            throw new IAE('GenerateCustodialWalletBatch.setBatchCount: $batch_count must be >=0');
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
            throw new IAE('GenerateCustodialWalletBatch.setOwner: $owner length must be <= 43');
        }
        if ((mb_strlen($owner) < 42)) {
            throw new IAE('GenerateCustodialWalletBatch.setOwner: $owner length must be >= 42');
        }
        $this->_data['owner'] = $owner;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('GenerateCustodialWalletBatch.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }
}
