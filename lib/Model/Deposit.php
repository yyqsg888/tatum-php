<?php

/**
 * Deposit Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * Deposit Model
 */
class Deposit extends AbstractModel {

    public const _D = null;
    public const STATUS_IN_PROGRESS = 'InProgress';
    public const STATUS_DONE = 'Done';
    public const STATUS_FAILED = 'Failed';
    protected static $_name = "Deposit";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 1, "n" => [0]]], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub", null, ["r" => 1]], 
        "derivation_key" => ["derivationKey", "int", 'int32', "getDerivationKey", "setDerivationKey", null, ["r" => 1, "x" => [2147483647]]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1]], 
        "status" => ["status", "string", null, "getStatus", "setStatus", null, ["r" => 1, "e" => 1]], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1]], 
        "reference" => ["reference", "string", null, "getReference", "setReference", null, ["r" => 1]], 
        "vout" => ["vout", "float", null, "getVout", "setVout", null, ["r" => 1]], 
        "spent" => ["spent", "bool", null, "getSpent", "setSpent", null, ["r" => 1]], 
        "block_height" => ["blockHeight", "float", null, "getBlockHeight", "setBlockHeight", null, ["r" => 1, "n" => [0]]], 
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash", null, ["r" => 0]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 0]]
    ];

    /**
     * Deposit
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getStatusAllowableValues(): array {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_DONE,
            self::STATUS_FAILED,
        ];
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id tx_id
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Blockchain address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
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
     * @param float $timestamp End interval in UTC millis.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get xpub
     *
     * @return string
     */
    public function getXpub(): string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Extended public key to derive address from.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setXpub(string $xpub) {
        return $this->_set("xpub", $xpub);
    }

    /**
     * Get derivation_key
     *
     * @return int
     */
    public function getDerivationKey(): int {
        return $this->_data["derivation_key"];
    }

    /**
     * Set derivation_key
     * 
     * @param int $derivation_key Derivation key index for given address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDerivationKey(int $derivation_key) {
        return $this->_set("derivation_key", $derivation_key);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount of the trade
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus(): string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string $status Status of deposit
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus(string $status) {
        return $this->_set("status", $status);
    }

    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Account ID.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference(): string {
        return $this->_data["reference"];
    }

    /**
     * Set reference
     * 
     * @param string $reference reference
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReference(string $reference) {
        return $this->_set("reference", $reference);
    }

    /**
     * Get vout
     *
     * @return float
     */
    public function getVout(): float {
        return $this->_data["vout"];
    }

    /**
     * Set vout
     * 
     * @param float $vout vout
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVout(float $vout) {
        return $this->_set("vout", $vout);
    }

    /**
     * Get spent
     *
     * @return bool
     */
    public function getSpent(): bool {
        return $this->_data["spent"];
    }

    /**
     * Set spent
     * 
     * @param bool $spent spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSpent(bool $spent) {
        return $this->_set("spent", $spent);
    }

    /**
     * Get block_height
     *
     * @return float
     */
    public function getBlockHeight(): float {
        return $this->_data["block_height"];
    }

    /**
     * Set block_height
     * 
     * @param float $block_height Block of deposit
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockHeight(float $block_height) {
        return $this->_set("block_height", $block_height);
    }

    /**
     * Get block_hash
     *
     * @return string|null
     */
    public function getBlockHash(): ?string {
        return $this->_data["block_hash"];
    }

    /**
     * Set block_hash
     * 
     * @param string|null $block_hash Hash of the block where this transaction was in.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockHash(?string $block_hash) {
        return $this->_set("block_hash", $block_hash);
    }

    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string|null $from Blockchain address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(?string $from) {
        return $this->_set("from", $from);
    }
}
