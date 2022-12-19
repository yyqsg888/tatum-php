<?php

/**
 * VetEstimateGas Model
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
 * VetEstimateGas Model
 */
class VetEstimateGas extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetEstimateGas";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "data" => ["data", "string", null, "getData", "setData"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"]
    ];

    /**
     * VetEstimateGas
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "to"=>null, "value"=>null, "data"=>null, "nonce"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 50)) {
            $ip[] = "'from' length must be <= 50";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 50)) {
            $ip[] = "'to' length must be <= 50";
        }
        if (is_null($this->_data['value'])) {
            $ip[] = "'value' can't be null";
        }
        if ((mb_strlen($this->_data['value']) > 50)) {
            $ip[] = "'value' length must be <= 50";
        }
        if (!is_null($this->_data['data']) && (mb_strlen($this->_data['data']) > 10000)) {
            $ip[] = "'data' length must be <= 10000";
        }
        
        return $ip;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender account address.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 50)) {
            throw new IAE('VetEstimateGas.setFrom: $from length must be <= 50');
        }
        $this->_data['from'] = $from;

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
     * @param string $to Recipient account address.
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 50)) {
            throw new IAE('VetEstimateGas.setTo: $to length must be <= 50');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(): string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string $value Amount to send.
     * @return $this
     */
    public function setValue(string $value) {
        if ((mb_strlen($value) > 50)) {
            throw new IAE('VetEstimateGas.setValue: $value length must be <= 50');
        }
        $this->_data['value'] = $value;

        return $this;
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Data to send to Smart Contract
     * @return $this
     */
    public function setData(?string $data) {
        if (!is_null($data) && (mb_strlen($data) > 10000)) {
            throw new IAE('VetEstimateGas.setData: $data length must be <= 10000');
        }
        $this->_data['data'] = $data;

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
     * @param float|null $nonce Nonce
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }
}
