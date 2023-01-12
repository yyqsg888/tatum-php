<?php

/**
 * DogeUTXO Model
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
 * DogeUTXO Model
 */
class DogeUTXO extends AbstractModel {

    public const _D = null;
    protected static $_name = "DogeUTXO";
    protected static $_definition = [
        "script_pub_key" => ["scriptPubKey", "\Tatum\Model\DogeTxVoutInnerScriptPubKey", null, "getScriptPubKey", "setScriptPubKey", null, ["r" => 0]], 
        "version" => ["version", "float", null, "getVersion", "setVersion", null, ["r" => 0]], 
        "height" => ["height", "float", null, "getHeight", "setHeight", null, ["r" => 0]], 
        "value" => ["value", "float", null, "getValue", "setValue", null, ["r" => 0]], 
        "coinbase" => ["coinbase", "bool", null, "getCoinbase", "setCoinbase", null, ["r" => 0]], 
        "bestblock" => ["bestblock", "string", null, "getBestblock", "setBestblock", null, ["r" => 0]]
    ];

    /**
     * DogeUTXO
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get script_pub_key
     *
     * @return \Tatum\Model\DogeTxVoutInnerScriptPubKey|null
     */
    public function getScriptPubKey(): ?\Tatum\Model\DogeTxVoutInnerScriptPubKey {
        return $this->_data["script_pub_key"];
    }

    /**
     * Set script_pub_key
     * 
     * @param \Tatum\Model\DogeTxVoutInnerScriptPubKey|null $script_pub_key script_pub_key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setScriptPubKey(?\Tatum\Model\DogeTxVoutInnerScriptPubKey $script_pub_key) {
        return $this->_set("script_pub_key", $script_pub_key);
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
     * @param float|null $version The version of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVersion(?float $version) {
        return $this->_set("version", $version);
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The height (number) of the block where the transaction is included in
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeight(?float $height) {
        return $this->_set("height", $height);
    }

    /**
     * Get value
     *
     * @return float|null
     */
    public function getValue(): ?float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float|null $value The amount of the UTXO (in 1/1000000 DOGE)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?float $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get coinbase
     *
     * @return bool|null
     */
    public function getCoinbase(): ?bool {
        return $this->_data["coinbase"];
    }

    /**
     * Set coinbase
     * 
     * @param bool|null $coinbase If set to \"true\", the transaction is a coinbase transaction (a transaction created by a Bitcoin miner to collect their reward)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCoinbase(?bool $coinbase) {
        return $this->_set("coinbase", $coinbase);
    }

    /**
     * Get bestblock
     *
     * @return string|null
     */
    public function getBestblock(): ?string {
        return $this->_data["bestblock"];
    }

    /**
     * Set bestblock
     * 
     * @param string|null $bestblock The block hash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBestblock(?string $bestblock) {
        return $this->_set("bestblock", $bestblock);
    }
}
