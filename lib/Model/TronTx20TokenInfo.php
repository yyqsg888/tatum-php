<?php

/**
 * TronTx20_tokenInfo Model
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
 * TronTx20_tokenInfo Model
 */
class TronTx20TokenInfo extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx20_tokenInfo";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals"], 
        "name" => ["name", "string", null, "getName", "setName"]
    ];

    /**
     * TronTx20TokenInfo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["symbol"=>null, "address"=>null, "decimals"=>null, "name"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['decimals'])) {
            $ip[] = "'decimals' can't be null";
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol symbol
     * @return $this
     */
    public function setSymbol(string $symbol) {
        $this->_data['symbol'] = $symbol;

        return $this;
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
     * @param string $address address
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float
     */
    public function getDecimals(): float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float $decimals decimals
     * @return $this
     */
    public function setDecimals(float $decimals) {
        $this->_data['decimals'] = $decimals;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name name
     * @return $this
     */
    public function setName(string $name) {
        $this->_data['name'] = $name;

        return $this;
    }
}
