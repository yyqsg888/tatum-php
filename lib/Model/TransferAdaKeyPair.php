<?php

/**
 * TransferAdaKeyPair Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * TransferAdaKeyPair Model
 */
class TransferAdaKeyPair extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferAdaKeyPair";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1, "nl" => 1, "xl" => 150]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant", null, ["r" => 0]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "key_pair" => ["keyPair", "\Tatum\Model\TransferAdaKeyPairKeyPairInner[]", null, "getKeyPair", "setKeyPair", null, ["r" => 1, "c" => 1]], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr", null, ["r" => 1, "nl" => 1, "xl" => 256]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]]
    ];

    /**
     * TransferAdaKeyPair
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        return $this->_set("sender_account_id", $sender_account_id);
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
     * @param string $address Blockchain address to send assets to.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
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
     * @param string $amount Amount to be withdrawn to blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        return $this->_set("compliant", $compliant);
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.5 ADA is used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get key_pair
     *
     * @return \Tatum\Model\TransferAdaKeyPairKeyPairInner[]
     */
    public function getKeyPair(): array {
        return $this->_data["key_pair"];
    }

    /**
     * Set key_pair
     * 
     * @param \Tatum\Model\TransferAdaKeyPairKeyPairInner[] $key_pair Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKeyPair(array $key_pair) {
        return $this->_set("key_pair", $key_pair);
    }

    /**
     * Get attr
     *
     * @return string
     */
    public function getAttr(): string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string $attr Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(string $attr) {
        return $this->_set("attr", $attr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
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
     * @param string|null $sender_note Note visible to owner of withdrawing account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }
}
