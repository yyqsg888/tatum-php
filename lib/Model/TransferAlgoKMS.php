<?php

/**
 * TransferAlgoKMS Model
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
 * TransferAlgoKMS Model
 */
class TransferAlgoKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferAlgoKMS";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"]
    ];

    /**
     * TransferAlgoKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["sender_account_id"=>null, "address"=>null, "amount"=>null, "fee"=>null, "signature_id"=>null, "index"=>null, "compliant"=>null, "payment_id"=>null, "sender_note"=>null] as $k => $v) {
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
        if ((mb_strlen($this->_data['address']) > 58)) {
            $ip[] = "'address' length must be <= 58";
        }
        if ((mb_strlen($this->_data['address']) < 58)) {
            $ip[] = "'address' length must be >= 58";
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
        if (is_null($this->_data['fee'])) {
            $ip[] = "'fee' can't be null";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
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
     * @param string $sender_account_id The ID of the virtual account to send Algos from
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        if ((mb_strlen($sender_account_id) > 24)) {
            throw new IAE('TransferAlgoKMS.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('TransferAlgoKMS.setSenderAccountId: $sender_account_id length must be >= 24');
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
     * @param string $address The blockchain address to send Algos to
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 58)) {
            throw new IAE('TransferAlgoKMS.setAddress: $address length must be <= 58');
        }
        if ((mb_strlen($address) < 58)) {
            throw new IAE('TransferAlgoKMS.setAddress: $address length must be >= 58');
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
     * @param string $amount The amount to send in Algos
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('TransferAlgoKMS.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferAlgoKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee(): string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string $fee The transaction fee in Algos
     * @return $this
     */
    public function setFee(string $fee) {
        $this->_data['fee'] = $fee;

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
     * @param string $signature_id The identifier of the secret of the Algorand wallet (account) in the signing application. Secret, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

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
            throw new IAE('TransferAlgoKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
     * @param bool|null $compliant Compliance check; if the withdrawal is not compliant, it will not be processed
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        $this->_data['compliant'] = $compliant;

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
     * @param string|null $payment_id The identifier of the Algo transfer that is shown on the virtual account for the created transaction
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('TransferAlgoKMS.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('TransferAlgoKMS.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

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
     * @param string|null $sender_note The note for the recipient; must not contain spaces
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('TransferAlgoKMS.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('TransferAlgoKMS.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}
