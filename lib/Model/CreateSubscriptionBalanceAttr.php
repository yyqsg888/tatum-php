<?php

/**
 * CreateSubscriptionBalance_attr Model
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
 * CreateSubscriptionBalance_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionBalanceAttr extends AbstractModel {

    public const _D = null;
    public const TYPE_OF_BALANCE_ACCOUNT = 'account';
    public const TYPE_OF_BALANCE_AVAILABLE = 'available';
    protected static $_name = "CreateSubscriptionBalance_attr";
    protected static $_definition = [
        "limit" => ["limit", "string", null, "getLimit", "setLimit", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "type_of_balance" => ["typeOfBalance", "string", null, "getTypeOfBalance", "setTypeOfBalance", null, ["r" => 1, "e" => 1]]
    ];

    /**
     * CreateSubscriptionBalanceAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeOfBalanceAllowableValues(): array {
        return [
            self::TYPE_OF_BALANCE_ACCOUNT,
            self::TYPE_OF_BALANCE_AVAILABLE,
        ];
    }

    /**
     * Get limit
     *
     * @return string
     */
    public function getLimit(): string {
        return $this->_data["limit"];
    }

    /**
     * Set limit
     * 
     * @param string $limit Limit to filter accounts with balance above it.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLimit(string $limit) {
        return $this->_set("limit", $limit);
    }

    /**
     * Get type_of_balance
     *
     * @return string
     */
    public function getTypeOfBalance(): string {
        return $this->_data["type_of_balance"];
    }

    /**
     * Set type_of_balance
     * 
     * @param string $type_of_balance Type of balance to filter.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTypeOfBalance(string $type_of_balance) {
        return $this->_set("type_of_balance", $type_of_balance);
    }
}
