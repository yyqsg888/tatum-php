<?php

/**
 * ChainTransferAlgoErc20 Model
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
 * ChainTransferAlgoErc20 Model
 */
class ChainTransferAlgoErc20 extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ALGO = 'ALGO';
    protected static $_name = "ChainTransferAlgoErc20";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "digits" => ["digits", "float", null, "getDigits", "setDigits"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"]
    ];

    /**
     * ChainTransferAlgoErc20
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "to"=>null, "contract_address"=>null, "amount"=>null, "digits"=>null, "from_private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 58)) {
            $ip[] = "'to' length must be <= 58";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 43)) {
            $ip[] = "'contract_address' length must be <= 43";
        }
        if ((mb_strlen($this->_data['contract_address']) < 1)) {
            $ip[] = "'contract_address' length must be >= 1";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['digits'])) {
            $ip[] = "'digits' can't be null";
        }
        if (($this->_data['digits'] > 30)) {
            $ip[] = "'digits' must be <= 30";
        }
        if (($this->_data['digits'] < 1)) {
            $ip[] = "'digits' must be >= 1";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 103)) {
            $ip[] = "'from_private_key' length must be <= 103";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 103)) {
            $ip[] = "'from_private_key' length must be >= 103";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ALGO,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("ChainTransferAlgoErc20.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to The blockchain address to send the fungible tokens to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 58)) {
            throw new IAE('ChainTransferAlgoErc20.setTo: $to length must be <= 58');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('ChainTransferAlgoErc20.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

        return $this;
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
     * @param string $contract_address The asset ID (the ID of the fungible tokens)
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 43)) {
            throw new IAE('ChainTransferAlgoErc20.setContractAddress: $contract_address length must be <= 43');
        }
        if ((mb_strlen($contract_address) < 1)) {
            throw new IAE('ChainTransferAlgoErc20.setContractAddress: $contract_address length must be >= 1');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount The amount of the fungible tokens to be sent
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('ChainTransferAlgoErc20.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get digits
     *
     * @return float
     */
    public function getDigits(): float {
        return $this->_data["digits"];
    }

    /**
     * Set digits
     * 
     * @param float $digits The number of decimal places that the fungible tokens have
     * @return $this
     */
    public function setDigits(float $digits) {
        if (($digits > 30)) {
            throw new IAE('ChainTransferAlgoErc20.setDigits: $digits must be <=30');
        }
        if (($digits < 1)) {
            throw new IAE('ChainTransferAlgoErc20.setDigits: $digits must be >=1');
        }
        $this->_data['digits'] = $digits;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the blockchain address from which the fee will be deducted
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 103)) {
            throw new IAE('ChainTransferAlgoErc20.setFromPrivateKey: $from_private_key length must be <= 103');
        }
        if ((mb_strlen($from_private_key) < 103)) {
            throw new IAE('ChainTransferAlgoErc20.setFromPrivateKey: $from_private_key length must be >= 103');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }
}
