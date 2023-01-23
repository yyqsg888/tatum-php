<?php

/**
 * EgldEstimateGas_200_response Model
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
 * EgldEstimateGas_200_response Model
 */
class EgldEstimateGas200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "EgldEstimateGas_200_response";
    protected static $_definition = [
        "gas_price" => ["gasPrice", "float", null, "getGasPrice", "setGasPrice", null, ["r" => 1]], 
        "gas_limit" => ["gasLimit", "float", null, "getGasLimit", "setGasLimit", null, ["r" => 1]]
    ];

    /**
     * EgldEstimateGas200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get gas_price
     *
     * @return float
     */
    public function getGasPrice(): float {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param float $gas_price The estimated price for one gas unit
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasPrice(float $gas_price) {
        return $this->_set("gas_price", $gas_price);
    }

    /**
     * Get gas_limit
     *
     * @return float
     */
    public function getGasLimit(): float {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param float $gas_limit The number of the gas units needed to process the transaction at the estimated gas price
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasLimit(float $gas_limit) {
        return $this->_set("gas_limit", $gas_limit);
    }
}
