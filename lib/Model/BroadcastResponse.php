<?php

/**
 * BroadcastResponse Model
 *
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
 * BroadcastResponse Model
 */
class BroadcastResponse extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BroadcastResponse";
    protected static $_definition = [
        "completed" => ["completed", "bool", null, "getCompleted", "setCompleted"], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"]
    ];

    /**
     * BroadcastResponse
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["completed"=>null, "tx_id"=>null] as $k => $v) {
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
     * Get completed
     *
     * @return bool|null
     */
    public function getCompleted(): ?bool {
        return $this->_data["completed"];
    }

    /**
     * Set completed
     * 
     * @param bool|null $completed Flag, if withdrawal is successfully completed within Tatum systems.
     * @return $this
     */
    public function setCompleted(?bool $completed) {
        $this->_data['completed'] = $completed;

        return $this;
    }

    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id Transaction ID of broadcast transaction and status
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }
}