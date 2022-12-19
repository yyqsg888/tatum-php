<?php

/**
 * DeployErc20KMS Model
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
 * DeployErc20KMS Model
 */
class DeployErc20KMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "DeployErc20KMS";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "name" => ["name", "string", null, "getName", "setName"], 
        "total_cap" => ["totalCap", "string", null, "getTotalCap", "setTotalCap"], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply"], 
        "digits" => ["digits", "float", null, "getDigits", "setDigits"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * DeployErc20KMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["symbol"=>null, "name"=>null, "total_cap"=>null, "supply"=>null, "digits"=>null, "address"=>null, "index"=>null, "signature_id"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
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
        if ((mb_strlen($this->_data['symbol']) > 30)) {
            $ip[] = "'symbol' length must be <= 30";
        }
        if ((mb_strlen($this->_data['symbol']) < 1)) {
            $ip[] = "'symbol' length must be >= 1";
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 100)) {
            $ip[] = "'name' length must be <= 100";
        }
        if ((mb_strlen($this->_data['name']) < 1)) {
            $ip[] = "'name' length must be >= 1";
        }
        if (!preg_match("/^[a-zA-Z0-9_]+$/", $this->_data['name'])) {
            $ip[] = "'name' must match /^[a-zA-Z0-9_]+$/";
        }
        if (!is_null($this->_data['total_cap']) && (mb_strlen($this->_data['total_cap']) > 38)) {
            $ip[] = "'total_cap' length must be <= 38";
        }
        if (!is_null($this->_data['total_cap']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['total_cap'])) {
            $ip[] = "'total_cap' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['supply'])) {
            $ip[] = "'supply' can't be null";
        }
        if ((mb_strlen($this->_data['supply']) > 38)) {
            $ip[] = "'supply' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['supply'])) {
            $ip[] = "'supply' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
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
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 43)) {
            $ip[] = "'address' length must be <= 43";
        }
        if ((mb_strlen($this->_data['address']) < 42)) {
            $ip[] = "'address' length must be >= 42";
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
     * @param string $symbol Symbol of the ERC20 token
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 30)) {
            throw new IAE('DeployErc20KMS.setSymbol: $symbol length must be <= 30');
        }
        if ((mb_strlen($symbol) < 1)) {
            throw new IAE('DeployErc20KMS.setSymbol: $symbol length must be >= 1');
        }
        $this->_data['symbol'] = $symbol;

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
     * @param string $name Name of the ERC20 token
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 100)) {
            throw new IAE('DeployErc20KMS.setName: $name length must be <= 100');
        }
        if ((mb_strlen($name) < 1)) {
            throw new IAE('DeployErc20KMS.setName: $name length must be >= 1');
        }
        if ((!preg_match("/^[a-zA-Z0-9_]+$/", $name))) {
            throw new IAE('DeployErc20KMS.setName: $name must match /^[a-zA-Z0-9_]+$/, ' . var_export($name, true) . ' given');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get total_cap
     *
     * @return string|null
     */
    public function getTotalCap(): ?string {
        return $this->_data["total_cap"];
    }

    /**
     * Set total_cap
     * 
     * @param string|null $total_cap Max supply of ERC20 token.
     * @return $this
     */
    public function setTotalCap(?string $total_cap) {
        if (!is_null($total_cap) && (mb_strlen($total_cap) > 38)) {
            throw new IAE('DeployErc20KMS.setTotalCap: $total_cap length must be <= 38');
        }
        if (!is_null($total_cap) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $total_cap))) {
            throw new IAE('DeployErc20KMS.setTotalCap: $total_cap must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($total_cap, true) . ' given');
        }
        $this->_data['total_cap'] = $total_cap;

        return $this;
    }

    /**
     * Get supply
     *
     * @return string
     */
    public function getSupply(): string {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param string $supply Max supply of ERC20 token.
     * @return $this
     */
    public function setSupply(string $supply) {
        if ((mb_strlen($supply) > 38)) {
            throw new IAE('DeployErc20KMS.setSupply: $supply length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $supply))) {
            throw new IAE('DeployErc20KMS.setSupply: $supply must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($supply, true) . ' given');
        }
        $this->_data['supply'] = $supply;

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
     * @param float $digits Number of decimal points
     * @return $this
     */
    public function setDigits(float $digits) {
        if (($digits > 30)) {
            throw new IAE('DeployErc20KMS.setDigits: $digits must be <=30');
        }
        if (($digits < 1)) {
            throw new IAE('DeployErc20KMS.setDigits: $digits must be >=1');
        }
        $this->_data['digits'] = $digits;

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
     * @param string $address Address on XDC blockchain, where all created ERC20 tokens will be transferred.
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 43)) {
            throw new IAE('DeployErc20KMS.setAddress: $address length must be <= 43');
        }
        if ((mb_strlen($address) < 42)) {
            throw new IAE('DeployErc20KMS.setAddress: $address length must be >= 42');
        }
        $this->_data['address'] = $address;

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
            throw new IAE('DeployErc20KMS.setIndex: $index must be >=0');
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
     * @param float|null $nonce Nonce to be set to XDC transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('DeployErc20KMS.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
