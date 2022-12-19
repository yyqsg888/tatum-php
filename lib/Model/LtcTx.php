<?php

/**
 * LtcTx Model
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
 * LtcTx Model
 */
class LtcTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcTx";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "witness_hash" => ["witnessHash", "string", null, "getWitnessHash", "setWitnessHash"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "rate" => ["rate", "string", null, "getRate", "setRate"], 
        "ps" => ["ps", "float", null, "getPs", "setPs"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "block" => ["block", "string", null, "getBlock", "setBlock"], 
        "ts" => ["ts", "float", null, "getTs", "setTs"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "version" => ["version", "float", null, "getVersion", "setVersion"], 
        "flag" => ["flag", "float", null, "getFlag", "setFlag"], 
        "inputs" => ["inputs", "\Tatum\Model\LtcTxInputsInner[]", null, "getInputs", "setInputs"], 
        "outputs" => ["outputs", "\Tatum\Model\LtcTxOutputsInner[]", null, "getOutputs", "setOutputs"], 
        "locktime" => ["locktime", "float", null, "getLocktime", "setLocktime"]
    ];

    /**
     * LtcTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "witness_hash"=>null, "fee"=>null, "rate"=>null, "ps"=>null, "block_number"=>null, "block"=>null, "ts"=>null, "index"=>null, "version"=>null, "flag"=>null, "inputs"=>null, "outputs"=>null, "locktime"=>null] as $k => $v) {
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
     * @param string|null $hash Transaction hash.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get witness_hash
     *
     * @return string|null
     */
    public function getWitnessHash(): ?string {
        return $this->_data["witness_hash"];
    }

    /**
     * Set witness_hash
     * 
     * @param string|null $witness_hash Witness hash in case of a SegWit transaction.
     * @return $this
     */
    public function setWitnessHash(?string $witness_hash) {
        $this->_data['witness_hash'] = $witness_hash;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee paid for this transaction, in LTC.
     * @return $this
     */
    public function setFee(?string $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string|null
     */
    public function getRate(): ?string {
        return $this->_data["rate"];
    }

    /**
     * Set rate
     * 
     * @param string|null $rate rate
     * @return $this
     */
    public function setRate(?string $rate) {
        $this->_data['rate'] = $rate;

        return $this;
    }

    /**
     * Get ps
     *
     * @return float|null
     */
    public function getPs(): ?float {
        return $this->_data["ps"];
    }

    /**
     * Set ps
     * 
     * @param float|null $ps ps
     * @return $this
     */
    public function setPs(?float $ps) {
        $this->_data['ps'] = $ps;

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
     * @param float|null $block_number Height of the block this transaction belongs to.
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get block
     *
     * @return string|null
     */
    public function getBlock(): ?string {
        return $this->_data["block"];
    }

    /**
     * Set block
     * 
     * @param string|null $block Hash of the block this transaction belongs to.
     * @return $this
     */
    public function setBlock(?string $block) {
        $this->_data['block'] = $block;

        return $this;
    }

    /**
     * Get ts
     *
     * @return float|null
     */
    public function getTs(): ?float {
        return $this->_data["ts"];
    }

    /**
     * Set ts
     * 
     * @param float|null $ts Time of the transaction.
     * @return $this
     */
    public function setTs(?float $ts) {
        $this->_data['ts'] = $ts;

        return $this;
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index Index of the transaction in the block.
     * @return $this
     */
    public function setIndex(?float $index) {
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version Index of the transaction.
     * @return $this
     */
    public function setVersion(?float $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get flag
     *
     * @return float|null
     */
    public function getFlag(): ?float {
        return $this->_data["flag"];
    }

    /**
     * Set flag
     * 
     * @param float|null $flag flag
     * @return $this
     */
    public function setFlag(?float $flag) {
        $this->_data['flag'] = $flag;

        return $this;
    }

    /**
     * Get inputs
     *
     * @return \Tatum\Model\LtcTxInputsInner[]|null
     */
    public function getInputs(): ?array {
        return $this->_data["inputs"];
    }

    /**
     * Set inputs
     * 
     * @param \Tatum\Model\LtcTxInputsInner[]|null $inputs List of transactions, from which assets are being sent.
     * @return $this
     */
    public function setInputs(?array $inputs) {
        $this->_data['inputs'] = $inputs;

        return $this;
    }

    /**
     * Get outputs
     *
     * @return \Tatum\Model\LtcTxOutputsInner[]|null
     */
    public function getOutputs(): ?array {
        return $this->_data["outputs"];
    }

    /**
     * Set outputs
     * 
     * @param \Tatum\Model\LtcTxOutputsInner[]|null $outputs List of recipient addresses and amounts to send to each of them.
     * @return $this
     */
    public function setOutputs(?array $outputs) {
        $this->_data['outputs'] = $outputs;

        return $this;
    }

    /**
     * Get locktime
     *
     * @return float|null
     */
    public function getLocktime(): ?float {
        return $this->_data["locktime"];
    }

    /**
     * Set locktime
     * 
     * @param float|null $locktime Block this transaction was included in.
     * @return $this
     */
    public function setLocktime(?float $locktime) {
        $this->_data['locktime'] = $locktime;

        return $this;
    }
}
