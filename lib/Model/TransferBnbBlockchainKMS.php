<?php

/**
 * TransferBnbBlockchainKMS Model
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
 * TransferBnbBlockchainKMS Model
 */
class TransferBnbBlockchainKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CURRENCY_BNB = 'BNB';
    protected static $_name = "TransferBnbBlockchainKMS";
    protected static $_definition = [
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "from_address" => ["fromAddress", "string", null, "getFromAddress", "setFromAddress"], 
        "message" => ["message", "string", null, "getMessage", "setMessage"]
    ];

    /**
     * TransferBnbBlockchainKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["to"=>null, "currency"=>null, "amount"=>null, "signature_id"=>null, "from_address"=>null, "message"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 100)) {
            $ip[] = "'to' length must be <= 100";
        }
        if ((mb_strlen($this->_data['to']) < 1)) {
            $ip[] = "'to' length must be >= 1";
        }
        if (is_null($this->_data['currency'])) {
            $ip[] = "'currency' can't be null";
        }
        $allowed = $this->getCurrencyAllowableValues();
        $value = $this->_data['currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (is_null($this->_data['from_address'])) {
            $ip[] = "'from_address' can't be null";
        }
        if ((mb_strlen($this->_data['from_address']) > 50)) {
            $ip[] = "'from_address' length must be <= 50";
        }
        if ((mb_strlen($this->_data['from_address']) < 42)) {
            $ip[] = "'from_address' length must be >= 42";
        }
        if (!is_null($this->_data['message']) && (mb_strlen($this->_data['message']) > 50)) {
            $ip[] = "'message' length must be <= 50";
        }
        if (!is_null($this->_data['message']) && (mb_strlen($this->_data['message']) < 1)) {
            $ip[] = "'message' length must be >= 1";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getCurrencyAllowableValues(): array {
        return [
            self::CURRENCY_BNB,
        ];
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
     * @param string $to Blockchain address to send assets.
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 100)) {
            throw new IAE('TransferBnbBlockchainKMS.setTo: $to length must be <= 100');
        }
        if ((mb_strlen($to) < 1)) {
            throw new IAE('TransferBnbBlockchainKMS.setTo: $to length must be >= 1');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency to transfer from Binance Blockchain Account.
     * @return $this
     */
    public function setCurrency(string $currency) {
        $allowed = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowed, true)) {
            throw new IAE(sprintf("TransferBnbBlockchainKMS.setCurrency: currency invalid value '%s', must be one of '%s'", $currency, implode("', '", $allowed)));
        }
        $this->_data['currency'] = $currency;

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
     * @param string $amount Amount to be sent in BNB.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferBnbBlockchainKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

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
     * @param string $signature_id Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get from_address
     *
     * @return string
     */
    public function getFromAddress(): string {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param string $from_address Blockchain address to send from
     * @return $this
     */
    public function setFromAddress(string $from_address) {
        if ((mb_strlen($from_address) > 50)) {
            throw new IAE('TransferBnbBlockchainKMS.setFromAddress: $from_address length must be <= 50');
        }
        if ((mb_strlen($from_address) < 42)) {
            throw new IAE('TransferBnbBlockchainKMS.setFromAddress: $from_address length must be >= 42');
        }
        $this->_data['from_address'] = $from_address;

        return $this;
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string|null $message Message to recipient.
     * @return $this
     */
    public function setMessage(?string $message) {
        if (!is_null($message) && (mb_strlen($message) > 50)) {
            throw new IAE('TransferBnbBlockchainKMS.setMessage: $message length must be <= 50');
        }
        if (!is_null($message) && (mb_strlen($message) < 1)) {
            throw new IAE('TransferBnbBlockchainKMS.setMessage: $message length must be >= 1');
        }
        $this->_data['message'] = $message;

        return $this;
    }
}
