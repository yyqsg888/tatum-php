<?php

/**
 * TransferBnbKMS Model
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
 * TransferBnbKMS Model
 */
class TransferBnbKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferBnbKMS";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant"], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "from_address" => ["fromAddress", "string", null, "getFromAddress", "setFromAddress"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"]
    ];

    /**
     * TransferBnbKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["sender_account_id"=>null, "address"=>null, "amount"=>null, "compliant"=>null, "attr"=>null, "payment_id"=>null, "signature_id"=>null, "from_address"=>null, "sender_note"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['sender_account_id'])) {
            $ip[] = "'sender_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['sender_account_id']) > 24)) {
            $ip[] = "'sender_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['sender_account_id']) < 24)) {
            $ip[] = "'sender_account_id' length must be >= 24";
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 100)) {
            $ip[] = "'address' length must be <= 100";
        }
        if ((mb_strlen($this->_data['address']) < 1)) {
            $ip[] = "'address' length must be >= 1";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
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
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        
        return $ip;
    }

    /**
     * Get sender_account_id
     *
     * @return string
     */
    public function getSenderAccountId(): string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Sender account ID
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        if ((mb_strlen($sender_account_id) > 24)) {
            throw new IAE('TransferBnbKMS.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('TransferBnbKMS.setSenderAccountId: $sender_account_id length must be >= 24');
        }
        $this->_data['sender_account_id'] = $sender_account_id;

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
     * @param string $address Blockchain address to send assets
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 100)) {
            throw new IAE('TransferBnbKMS.setAddress: $address length must be <= 100');
        }
        if ((mb_strlen($address) < 1)) {
            throw new IAE('TransferBnbKMS.setAddress: $address length must be >= 1');
        }
        $this->_data['address'] = $address;

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
     * @param string $amount Amount to be sent, in BNB.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('TransferBnbKMS.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferBnbKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get compliant
     *
     * @return bool|null
     */
    public function getCompliant(): ?bool {
        return $this->_data["compliant"];
    }

    /**
     * Set compliant
     * 
     * @param bool|null $compliant Compliance check, if withdrawal is not compliant, it will not be processed.
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        $this->_data['compliant'] = $compliant;

        return $this;
    }

    /**
     * Get attr
     *
     * @return string|null
     */
    public function getAttr(): ?string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string|null $attr Memo of the recipient account, if any.
     * @return $this
     */
    public function setAttr(?string $attr) {
        $this->_data['attr'] = $attr;

        return $this;
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Identifier of the payment, shown for created Transaction within Tatum sender account.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('TransferBnbKMS.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('TransferBnbKMS.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

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
     * @param string $signature_id Identifier of the secret associated in signing application. Secret, or signature Id must be present.
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
     * @param string $from_address Blockchain address to send from.
     * @return $this
     */
    public function setFromAddress(string $from_address) {
        if ((mb_strlen($from_address) > 50)) {
            throw new IAE('TransferBnbKMS.setFromAddress: $from_address length must be <= 50');
        }
        if ((mb_strlen($from_address) < 42)) {
            throw new IAE('TransferBnbKMS.setFromAddress: $from_address length must be >= 42');
        }
        $this->_data['from_address'] = $from_address;

        return $this;
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible to owner of withdrawing account.
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('TransferBnbKMS.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('TransferBnbKMS.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}
