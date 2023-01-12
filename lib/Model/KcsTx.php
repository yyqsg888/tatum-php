<?php

/**
 * KcsTx Model
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
 * KcsTx Model
 */
class KcsTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "KcsTx";
    protected static $_definition = [
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash", null, ["r" => 0]], 
        "status" => ["status", "bool", null, "getStatus", "setStatus", null, ["r" => 0]], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber", null, ["r" => 0]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 0]], 
        "gas" => ["gas", "float", null, "getGas", "setGas", null, ["r" => 0]], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice", null, ["r" => 0]], 
        "transaction_hash" => ["transactionHash", "string", null, "getTransactionHash", "setTransactionHash", null, ["r" => 0]], 
        "input" => ["input", "string", null, "getInput", "setInput", null, ["r" => 0]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 0]], 
        "transaction_index" => ["transactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex", null, ["r" => 0]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]], 
        "gas_used" => ["gasUsed", "float", null, "getGasUsed", "setGasUsed", null, ["r" => 0]], 
        "cumulative_gas_used" => ["cumulativeGasUsed", "float", null, "getCumulativeGasUsed", "setCumulativeGasUsed", null, ["r" => 0]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 0]], 
        "logs" => ["logs", "\Tatum\Model\KlaytnTxLogsInner[]", null, "getLogs", "setLogs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * KcsTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * Get status
     *
     * @return bool|null
     */
    public function getStatus(): ?bool {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param bool|null $status TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus(?bool $status) {
        return $this->_set("status", $status);
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
     * @param float|null $block_number Block number where this transaction was in.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        return $this->_set("block_number", $block_number);
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
     * @param string|null $from Address of the sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(?string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get gas
     *
     * @return float|null
     */
    public function getGas(): ?float {
        return $this->_data["gas"];
    }

    /**
     * Set gas
     * 
     * @param float|null $gas Gas provided by the sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGas(?float $gas) {
        return $this->_set("gas", $gas);
    }

    /**
     * Get gas_price
     *
     * @return string|null
     */
    public function getGasPrice(): ?string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string|null $gas_price Gas price provided by the sender in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasPrice(?string $gas_price) {
        return $this->_set("gas_price", $gas_price);
    }

    /**
     * Get transaction_hash
     *
     * @return string|null
     */
    public function getTransactionHash(): ?string {
        return $this->_data["transaction_hash"];
    }

    /**
     * Set transaction_hash
     * 
     * @param string|null $transaction_hash Hash of the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash) {
        return $this->_set("transaction_hash", $transaction_hash);
    }

    /**
     * Get input
     *
     * @return string|null
     */
    public function getInput(): ?string {
        return $this->_data["input"];
    }

    /**
     * Set input
     * 
     * @param string|null $input The data sent along with the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInput(?string $input) {
        return $this->_set("input", $input);
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
     * @param float|null $nonce The number of transactions made by the sender prior to this one.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string|null $to Address of the receiver. 'null' when its a contract creation transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(?string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get transaction_index
     *
     * @return float|null
     */
    public function getTransactionIndex(): ?float {
        return $this->_data["transaction_index"];
    }

    /**
     * Set transaction_index
     * 
     * @param float|null $transaction_index Integer of the transactions index position in the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionIndex(?float $transaction_index) {
        return $this->_set("transaction_index", $transaction_index);
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Value transferred in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get gas_used
     *
     * @return float|null
     */
    public function getGasUsed(): ?float {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param float|null $gas_used The amount of gas used by this specific transaction alone.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasUsed(?float $gas_used) {
        return $this->_set("gas_used", $gas_used);
    }

    /**
     * Get cumulative_gas_used
     *
     * @return float|null
     */
    public function getCumulativeGasUsed(): ?float {
        return $this->_data["cumulative_gas_used"];
    }

    /**
     * Set cumulative_gas_used
     * 
     * @param float|null $cumulative_gas_used The total amount of gas used when this transaction was executed in the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCumulativeGasUsed(?float $cumulative_gas_used) {
        return $this->_set("cumulative_gas_used", $cumulative_gas_used);
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address The contract address created, if the transaction was a contract creation, otherwise null.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get logs
     *
     * @return \Tatum\Model\KlaytnTxLogsInner[]|null
     */
    public function getLogs(): ?array {
        return $this->_data["logs"];
    }

    /**
     * Set logs
     * 
     * @param \Tatum\Model\KlaytnTxLogsInner[]|null $logs Log events, that happened in this transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLogs(?array $logs) {
        return $this->_set("logs", $logs);
    }
}
