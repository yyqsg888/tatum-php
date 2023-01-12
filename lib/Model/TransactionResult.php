<?php

/**
 * TransactionResult Model
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
 * TransactionResult Model
 */
class TransactionResult extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransactionResult";
    protected static $_definition = [
        "reference" => ["reference", "string", null, "getReference", "setReference", null, ["r" => 0]]
    ];

    /**
     * TransactionResult
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get reference
     *
     * @return string|null
     */
    public function getReference(): ?string {
        return $this->_data["reference"];
    }

    /**
     * Set reference
     * 
     * @param string|null $reference The internal reference to the transaction (a unique identifier of the transaction within the virtual account); if the transaction fails, use this reference to search through the logs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReference(?string $reference) {
        return $this->_set("reference", $reference);
    }
}
