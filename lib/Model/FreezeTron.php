<?php

/**
 * FreezeTron Model
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
 * FreezeTron Model
 */
class FreezeTron extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const RESOURCE_BANDWIDTH = 'BANDWIDTH';
    public const RESOURCE_ENERGY = 'ENERGY';
    protected static $_name = "FreezeTron";
    protected static $_definition = [
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "receiver" => ["receiver", "string", null, "getReceiver", "setReceiver"], 
        "duration" => ["duration", "float", null, "getDuration", "setDuration"], 
        "resource" => ["resource", "string", null, "getResource", "setResource"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"]
    ];

    /**
     * FreezeTron
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_private_key"=>null, "receiver"=>null, "duration"=>null, "resource"=>null, "amount"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['receiver'])) {
            $ip[] = "'receiver' can't be null";
        }
        if ((mb_strlen($this->_data['receiver']) > 34)) {
            $ip[] = "'receiver' length must be <= 34";
        }
        if ((mb_strlen($this->_data['receiver']) < 34)) {
            $ip[] = "'receiver' length must be >= 34";
        }
        if (is_null($this->_data['duration'])) {
            $ip[] = "'duration' can't be null";
        }
        if (($this->_data['duration'] < 3)) {
            $ip[] = "'duration' must be >= 3";
        }
        if (is_null($this->_data['resource'])) {
            $ip[] = "'resource' can't be null";
        }
        $allowed = $this->getResourceAllowableValues();
        $value = $this->_data['resource'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'resource' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getResourceAllowableValues(): array {
        return [
            self::RESOURCE_BANDWIDTH,
            self::RESOURCE_ENERGY,
        ];
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
     * @param string $from_private_key Private key of the address, from which the TRX will be sent.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('FreezeTron.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('FreezeTron.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver(): string {
        return $this->_data["receiver"];
    }

    /**
     * Set receiver
     * 
     * @param string $receiver Recipient address of frozen BANDWIDTH or ENERGY.
     * @return $this
     */
    public function setReceiver(string $receiver) {
        if ((mb_strlen($receiver) > 34)) {
            throw new IAE('FreezeTron.setReceiver: $receiver length must be <= 34');
        }
        if ((mb_strlen($receiver) < 34)) {
            throw new IAE('FreezeTron.setReceiver: $receiver length must be >= 34');
        }
        $this->_data['receiver'] = $receiver;

        return $this;
    }

    /**
     * Get duration
     *
     * @return float
     */
    public function getDuration(): float {
        return $this->_data["duration"];
    }

    /**
     * Set duration
     * 
     * @param float $duration Duration of frozen funds, in days.
     * @return $this
     */
    public function setDuration(float $duration) {
        if (($duration < 3)) {
            throw new IAE('FreezeTron.setDuration: $duration must be >=3');
        }
        $this->_data['duration'] = $duration;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource(): string {
        return $this->_data["resource"];
    }

    /**
     * Set resource
     * 
     * @param string $resource Resource to obtain, BANDWIDTH or ENERGY.
     * @return $this
     */
    public function setResource(string $resource) {
        $allowed = $this->getResourceAllowableValues();
        if (!in_array($resource, $allowed, true)) {
            throw new IAE(sprintf("FreezeTron.setResource: resource invalid value '%s', must be one of '%s'", $resource, implode("', '", $allowed)));
        }
        $this->_data['resource'] = $resource;

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
     * @param string $amount Amount to be frozen in TRX.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('FreezeTron.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }
}
