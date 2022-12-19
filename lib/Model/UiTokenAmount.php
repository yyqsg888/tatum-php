<?php

/**
 * UiTokenAmount Model
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
 * UiTokenAmount Model
 */
class UiTokenAmount extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "UiTokenAmount";
    protected static $_definition = [
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals"], 
        "ui_amount" => ["uiAmount", "mixed", null, "getUiAmount", "setUiAmount"], 
        "ui_amount_string" => ["uiAmountString", "string", null, "getUiAmountString", "setUiAmountString"]
    ];

    /**
     * UiTokenAmount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["amount"=>null, "decimals"=>null, "ui_amount"=>null, "ui_amount_string"=>null] as $k => $v) {
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
     * @param string|null $amount Raw amount of tokens as a string, ignoring decimals.
     * @return $this
     */
    public function setAmount(?string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float|null $decimals Number of decimals configured for token's mint.
     * @return $this
     */
    public function setDecimals(?float $decimals) {
        $this->_data['decimals'] = $decimals;

        return $this;
    }

    /**
     * Get ui_amount
     *
     * @return mixed|null
     */
    public function getUiAmount(): ?mixed {
        return $this->_data["ui_amount"];
    }

    /**
     * Set ui_amount
     * 
     * @param mixed|null $ui_amount Token amount as a float, accounting for decimals.
     * @return $this
     */
    public function setUiAmount(?mixed $ui_amount) {
        $this->_data['ui_amount'] = $ui_amount;

        return $this;
    }

    /**
     * Get ui_amount_string
     *
     * @return string|null
     */
    public function getUiAmountString(): ?string {
        return $this->_data["ui_amount_string"];
    }

    /**
     * Set ui_amount_string
     * 
     * @param string|null $ui_amount_string Token amount as a string, accounting for decimals.
     * @return $this
     */
    public function setUiAmountString(?string $ui_amount_string) {
        $this->_data['ui_amount_string'] = $ui_amount_string;

        return $this;
    }
}
