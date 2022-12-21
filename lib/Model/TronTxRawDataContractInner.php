<?php

/**
 * TronTx_rawData_contract_inner Model
 *
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
 * TronTx_rawData_contract_inner Model
 */
class TronTxRawDataContractInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx_rawData_contract_inner";
    protected static $_definition = [
        "parameter" => ["parameter", "\Tatum\Model\TronTxRawDataContractInnerParameter", null, "getParameter", "setParameter"], 
        "type" => ["type", "string", null, "getType", "setType"]
    ];

    /**
     * TronTxRawDataContractInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["parameter"=>null, "type"=>null] as $k => $v) {
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
     * Get parameter
     *
     * @return \Tatum\Model\TronTxRawDataContractInnerParameter|null
     */
    public function getParameter(): ?\Tatum\Model\TronTxRawDataContractInnerParameter {
        return $this->_data["parameter"];
    }

    /**
     * Set parameter
     * 
     * @param \Tatum\Model\TronTxRawDataContractInnerParameter|null $parameter parameter
     * @return $this
     */
    public function setParameter(?\Tatum\Model\TronTxRawDataContractInnerParameter $parameter) {
        $this->_data['parameter'] = $parameter;

        return $this;
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of the Smart contract.
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }
}