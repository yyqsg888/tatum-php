<?php

/**
 * ResponseData Model
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
 * ResponseData Model
 */
class ResponseData extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "ResponseData";
    protected static $_definition = [
        "address" => ["address", "\Tatum\Model\Address", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "float", null, "getAmount", "setAmount"], 
        "v_in" => ["vIn", "string", null, "getVIn", "setVIn"], 
        "v_in_index" => ["vInIndex", "int", null, "getVInIndex", "setVInIndex"], 
        "script_pub_key" => ["scriptPubKey", "string", null, "getScriptPubKey", "setScriptPubKey"]
    ];

    /**
     * ResponseData
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "amount"=>null, "v_in"=>null, "v_in_index"=>null, "script_pub_key"=>null] as $k => $v) {
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
     * Get address
     *
     * @return \Tatum\Model\Address|null
     */
    public function getAddress(): ?\Tatum\Model\Address {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param \Tatum\Model\Address|null $address address
     * @return $this
     */
    public function setAddress(?\Tatum\Model\Address $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float|null
     */
    public function getAmount(): ?float {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param float|null $amount Amount of unprocessed transaction outputs, that can be used for withdrawal. Bitcoin, Litecoin, Bitcoin Cash only.
     * @return $this
     */
    public function setAmount(?float $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get v_in
     *
     * @return string|null
     */
    public function getVIn(): ?string {
        return $this->_data["v_in"];
    }

    /**
     * Set v_in
     * 
     * @param string|null $v_in Last used unprocessed transaction output, that can be used. Bitcoin, Litecoin, Bitcoin Cash only. If -1, it indicates prepared vOut with amount to be transferred to pool address.
     * @return $this
     */
    public function setVIn(?string $v_in) {
        $this->_data['v_in'] = $v_in;

        return $this;
    }

    /**
     * Get v_in_index
     *
     * @return int|null
     */
    public function getVInIndex(): ?int {
        return $this->_data["v_in_index"];
    }

    /**
     * Set v_in_index
     * 
     * @param int|null $v_in_index Index of last used unprocessed transaction output in raw transaction, that can be used. Bitcoin, Litecoin, Bitcoin Cash only.
     * @return $this
     */
    public function setVInIndex(?int $v_in_index) {
        $this->_data['v_in_index'] = $v_in_index;

        return $this;
    }

    /**
     * Get script_pub_key
     *
     * @return string|null
     */
    public function getScriptPubKey(): ?string {
        return $this->_data["script_pub_key"];
    }

    /**
     * Set script_pub_key
     * 
     * @param string|null $script_pub_key Script of last unprocessed UTXO. Bitcoin SV only.
     * @return $this
     */
    public function setScriptPubKey(?string $script_pub_key) {
        $this->_data['script_pub_key'] = $script_pub_key;

        return $this;
    }
}
