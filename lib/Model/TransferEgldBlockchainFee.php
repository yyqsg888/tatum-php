<?php

/**
 * TransferEgldBlockchain_fee Model
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
 * TransferEgldBlockchain_fee Model
 * 
 * @description Custom defined fee. If not present, it will be calculated automatically.
 */
class TransferEgldBlockchainFee extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferEgldBlockchain_fee";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"]
    ];

    /**
     * TransferEgldBlockchainFee
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["gas_limit"=>null, "gas_price"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (!is_null($this->_data['gas_limit']) && !preg_match("/^[+]?\\d+$/", $this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' must match /^[+]?\\d+$/";
        }
        if (!is_null($this->_data['gas_price']) && !preg_match("/^[+]?\\d+$/", $this->_data['gas_price'])) {
            $ip[] = "'gas_price' must match /^[+]?\\d+$/";
        }
        
        return $ip;
    }

    /**
     * Get gas_limit
     *
     * @return string|null
     */
    public function getGasLimit(): ?string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string|null $gas_limit Gas limit for transaction. If transfer to a smart contract, then 500000 + an appropriate amount for the method call
     * @return $this
     */
    public function setGasLimit(?string $gas_limit) {
        if (!is_null($gas_limit) && (!preg_match("/^[+]?\\d+$/", $gas_limit))) {
            throw new IAE('TransferEgldBlockchainFee.setGasLimit: $gas_limit must match /^[+]?\\d+$/, ' . var_export($gas_limit, true) . ' given');
        }
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
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
     * @param string|null $gas_price Gas price.
     * @return $this
     */
    public function setGasPrice(?string $gas_price) {
        if (!is_null($gas_price) && (!preg_match("/^[+]?\\d+$/", $gas_price))) {
            throw new IAE('TransferEgldBlockchainFee.setGasPrice: $gas_price must match /^[+]?\\d+$/, ' . var_export($gas_price, true) . ' given');
        }
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }
}
