<?php

/**
 * CallOneSmartContractMethodKMS Model
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
 * CallOneSmartContractMethodKMS Model
 */
class CallOneSmartContractMethodKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CallOneSmartContractMethodKMS";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "method_name" => ["methodName", "string", null, "getMethodName", "setMethodName"], 
        "method_abi" => ["methodABI", "object", null, "getMethodAbi", "setMethodAbi"], 
        "params" => ["params", "string[]", null, "getParams", "setParams"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee"]
    ];

    /**
     * CallOneSmartContractMethodKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["contract_address"=>null, "method_name"=>null, "method_abi"=>null, "params"=>null, "index"=>null, "signature_id"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (is_null($this->_data['method_name'])) {
            $ip[] = "'method_name' can't be null";
        }
        if ((mb_strlen($this->_data['method_name']) > 500)) {
            $ip[] = "'method_name' length must be <= 500";
        }
        if ((mb_strlen($this->_data['method_name']) < 1)) {
            $ip[] = "'method_name' length must be >= 1";
        }
        if (is_null($this->_data['method_abi'])) {
            $ip[] = "'method_abi' can't be null";
        }
        if (is_null($this->_data['params'])) {
            $ip[] = "'params' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        
        return $ip;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The address of the smart contract
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('CallOneSmartContractMethodKMS.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('CallOneSmartContractMethodKMS.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get method_name
     *
     * @return string
     */
    public function getMethodName(): string {
        return $this->_data["method_name"];
    }

    /**
     * Set method_name
     * 
     * @param string $method_name Name of the method to invoke on smart contract.
     * @return $this
     */
    public function setMethodName(string $method_name) {
        if ((mb_strlen($method_name) > 500)) {
            throw new IAE('CallOneSmartContractMethodKMS.setMethodName: $method_name length must be <= 500');
        }
        if ((mb_strlen($method_name) < 1)) {
            throw new IAE('CallOneSmartContractMethodKMS.setMethodName: $method_name length must be >= 1');
        }
        $this->_data['method_name'] = $method_name;

        return $this;
    }

    /**
     * Get method_abi
     *
     * @return object
     */
    public function getMethodAbi(): object {
        return $this->_data["method_abi"];
    }

    /**
     * Set method_abi
     * 
     * @param object $method_abi ABI of the method to invoke.
     * @return $this
     */
    public function setMethodAbi(object $method_abi) {
        $this->_data['method_abi'] = $method_abi;

        return $this;
    }

    /**
     * Get params
     *
     * @return string[]
     */
    public function getParams(): array {
        return $this->_data["params"];
    }

    /**
     * Set params
     * 
     * @param string[] $params Parameters of the method to be invoked.
     * @return $this
     */
    public function setParams(array $params) {
        $this->_data['params'] = $params;

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
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('CallOneSmartContractMethodKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
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
     * @param float|null $nonce Nonce to be set to ONE transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('CallOneSmartContractMethodKMS.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
