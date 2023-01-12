<?php

/**
 * Account Model
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
 * Account Model
 */
class Account extends AbstractModel {

    public const _D = null;
    protected static $_name = "Account";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "balance" => ["balance", "\Tatum\Model\AccountBalance", null, "getBalance", "setBalance", null, ["r" => 1]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1]], 
        "frozen" => ["frozen", "bool", null, "getFrozen", "setFrozen", null, ["r" => 1]], 
        "active" => ["active", "bool", null, "getActive", "setActive", null, ["r" => 1]], 
        "customer_id" => ["customerId", "string", null, "getCustomerId", "setCustomerId", null, ["r" => 0]], 
        "account_number" => ["accountNumber", "string", null, "getAccountNumber", "setAccountNumber", null, ["r" => 0, "nl" => 1, "xl" => 50]], 
        "account_code" => ["accountCode", "string", null, "getAccountCode", "setAccountCode", null, ["r" => 0]], 
        "accounting_currency" => ["accountingCurrency", "string", null, "getAccountingCurrency", "setAccountingCurrency", null, ["r" => 0]], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub", null, ["r" => 0]]
    ];

    /**
     * Account
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id The ID of the virtual account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get balance
     *
     * @return \Tatum\Model\AccountBalance
     */
    public function getBalance(): \Tatum\Model\AccountBalance {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param \Tatum\Model\AccountBalance $balance balance
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalance(\Tatum\Model\AccountBalance $balance) {
        return $this->_set("balance", $balance);
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
     * @param string $currency The currency of the virtual account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get frozen
     *
     * @return bool
     */
    public function getFrozen(): bool {
        return $this->_data["frozen"];
    }

    /**
     * Set frozen
     * 
     * @param bool $frozen If set to \"true\", the virtual account is frozen
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrozen(bool $frozen) {
        return $this->_set("frozen", $frozen);
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive(): bool {
        return $this->_data["active"];
    }

    /**
     * Set active
     * 
     * @param bool $active If set to \"true\", the virtual account is active
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setActive(bool $active) {
        return $this->_set("active", $active);
    }

    /**
     * Get customer_id
     *
     * @return string|null
     */
    public function getCustomerId(): ?string {
        return $this->_data["customer_id"];
    }

    /**
     * Set customer_id
     * 
     * @param string|null $customer_id The ID of the customer (newly created or existing one) associated with the virtual account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomerId(?string $customer_id) {
        return $this->_set("customer_id", $customer_id);
    }

    /**
     * Get account_number
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string {
        return $this->_data["account_number"];
    }

    /**
     * Set account_number
     * 
     * @param string|null $account_number The number associated with the virtual account in an external system
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountNumber(?string $account_number) {
        return $this->_set("account_number", $account_number);
    }

    /**
     * Get account_code
     *
     * @return string|null
     */
    public function getAccountCode(): ?string {
        return $this->_data["account_code"];
    }

    /**
     * Set account_code
     * 
     * @param string|null $account_code The code associated with the virtual account in an external system to designate the purpose of the account in bookkeeping
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountCode(?string $account_code) {
        return $this->_set("account_code", $account_code);
    }

    /**
     * Get accounting_currency
     *
     * @return string|null
     */
    public function getAccountingCurrency(): ?string {
        return $this->_data["accounting_currency"];
    }

    /**
     * Set accounting_currency
     * 
     * @param string|null $accounting_currency The currency in which all the transactions for all accounts will be accounted
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountingCurrency(?string $accounting_currency) {
        return $this->_set("accounting_currency", $accounting_currency);
    }

    /**
     * Get xpub
     *
     * @return string|null
     */
    public function getXpub(): ?string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string|null $xpub The extended public key of the blockchain wallet associated with the virtual account; used to generate deposit addresses for the virtual account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setXpub(?string $xpub) {
        return $this->_set("xpub", $xpub);
    }
}
