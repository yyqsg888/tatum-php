<?php

/**
 * ApproveTransferCustodialWallet_fee Model
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
 * ApproveTransferCustodialWallet_fee Model
 * 
 * @description The custom defined fee; if not present, will be calculated automatically
 */
class ApproveTransferCustodialWalletFee extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "ApproveTransferCustodialWallet_fee";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"]
    ];

    /**
     * ApproveTransferCustodialWalletFee
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

        if (is_null($this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' can't be null";
        }
        if (!preg_match("/^[+]?\\d+$/", $this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' must match /^[+]?\\d+$/";
        }
        if (is_null($this->_data['gas_price'])) {
            $ip[] = "'gas_price' can't be null";
        }
        if (!preg_match("/^[+]?\\d+$/", $this->_data['gas_price'])) {
            $ip[] = "'gas_price' must match /^[+]?\\d+$/";
        }
        
        return $ip;
    }

    /**
     * Get gas_limit
     *
     * @return string
     */
    public function getGasLimit(): string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string $gas_limit Gas limit for transaction in gas price.
     * @return $this
     */
    public function setGasLimit(string $gas_limit) {
        if ((!preg_match("/^[+]?\\d+$/", $gas_limit))) {
            throw new IAE('ApproveTransferCustodialWalletFee.setGasLimit: $gas_limit must match /^[+]?\\d+$/, ' . var_export($gas_limit, true) . ' given');
        }
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string
     */
    public function getGasPrice(): string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string $gas_price Gas price in Gwei.
     * @return $this
     */
    public function setGasPrice(string $gas_price) {
        if ((!preg_match("/^[+]?\\d+$/", $gas_price))) {
            throw new IAE('ApproveTransferCustodialWalletFee.setGasPrice: $gas_price must match /^[+]?\\d+$/, ' . var_export($gas_price, true) . ' given');
        }
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }
}
