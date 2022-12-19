<?php

/**
 * Blockage Model
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
 * Blockage Model
 */
class Blockage extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Blockage";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "description" => ["description", "string", null, "getDescription", "setDescription"]
    ];

    /**
     * Blockage
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "account_id"=>null, "amount"=>null, "type"=>null, "description"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id ID of the blockage.
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get account_id
     *
     * @return string|null
     */
    public function getAccountId(): ?string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string|null $account_id ID of the account this blockage is for.
     * @return $this
     */
    public function setAccountId(?string $account_id) {
        $this->_data['account_id'] = $account_id;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Amount blocked on account.
     * @return $this
     */
    public function setAmount(?string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of blockage.
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string|null $description Description of blockage.
     * @return $this
     */
    public function setDescription(?string $description) {
        $this->_data['description'] = $description;

        return $this;
    }
}
