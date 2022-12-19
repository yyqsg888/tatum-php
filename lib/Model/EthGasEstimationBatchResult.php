<?php

/**
 * EthGasEstimationBatchResult Model
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
 * EthGasEstimationBatchResult Model
 */
class EthGasEstimationBatchResult extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EthGasEstimationBatchResult";
    protected static $_definition = [
        "error" => ["error", "bool", null, "getError", "setError"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "data" => ["data", "\Tatum\Model\EthGasEstimationBatchResultData", null, "getData", "setData"], 
        "msg" => ["msg", "string", null, "getMsg", "setMsg"]
    ];

    /**
     * EthGasEstimationBatchResult
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["error"=>null, "contract_address"=>null, "data"=>null, "msg"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['error'])) {
            $ip[] = "'error' can't be null";
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        
        return $ip;
    }

    /**
     * Get error
     *
     * @return bool
     */
    public function getError(): bool {
        return $this->_data["error"];
    }

    /**
     * Set error
     * 
     * @param bool $error If estimation succeeded.
     * @return $this
     */
    public function setError(bool $error) {
        $this->_data['error'] = $error;

        return $this;
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
     * @param string|null $contract_address Contract address of ERC20 token, if transaction is ERC20 token
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        if (!is_null($contract_address) && (mb_strlen($contract_address) > 42)) {
            throw new IAE('EthGasEstimationBatchResult.setContractAddress: $contract_address length must be <= 42');
        }
        if (!is_null($contract_address) && (mb_strlen($contract_address) < 42)) {
            throw new IAE('EthGasEstimationBatchResult.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\EthGasEstimationBatchResultData|null
     */
    public function getData(): ?\Tatum\Model\EthGasEstimationBatchResultData {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\EthGasEstimationBatchResultData|null $data data
     * @return $this
     */
    public function setData(?\Tatum\Model\EthGasEstimationBatchResultData $data) {
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get msg
     *
     * @return string|null
     */
    public function getMsg(): ?string {
        return $this->_data["msg"];
    }

    /**
     * Set msg
     * 
     * @param string|null $msg Error message. Present only if error - true.
     * @return $this
     */
    public function setMsg(?string $msg) {
        $this->_data['msg'] = $msg;

        return $this;
    }
}
