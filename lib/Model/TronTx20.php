<?php

/**
 * TronTx20 Model
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
 * TronTx20 Model
 */
class TronTx20 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx20";
    protected static $_definition = [
        "tx_id" => ["txID", "string", null, "getTxId", "setTxId"], 
        "token_info" => ["tokenInfo", "\Tatum\Model\TronTx20TokenInfo", null, "getTokenInfo", "setTokenInfo"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "value" => ["value", "string", null, "getValue", "setValue"]
    ];

    /**
     * TronTx20
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_id"=>null, "token_info"=>null, "from"=>null, "to"=>null, "type"=>null, "value"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        if (is_null($this->_data['token_info'])) {
            $ip[] = "'token_info' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        if (is_null($this->_data['value'])) {
            $ip[] = "'value' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id Transaction ID.
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get token_info
     *
     * @return \Tatum\Model\TronTx20TokenInfo
     */
    public function getTokenInfo(): \Tatum\Model\TronTx20TokenInfo {
        return $this->_data["token_info"];
    }

    /**
     * Set token_info
     * 
     * @param \Tatum\Model\TronTx20TokenInfo $token_info token_info
     * @return $this
     */
    public function setTokenInfo(\Tatum\Model\TronTx20TokenInfo $token_info) {
        $this->_data['token_info'] = $token_info;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from from
     * @return $this
     */
    public function setFrom(string $from) {
        $this->_data['from'] = $from;

        return $this;
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
     * @param string $to to
     * @return $this
     */
    public function setTo(string $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type type
     * @return $this
     */
    public function setType(string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(): string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string $value value
     * @return $this
     */
    public function setValue(string $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}