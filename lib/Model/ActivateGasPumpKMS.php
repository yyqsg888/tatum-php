<?php

/**
 * ActivateGasPumpKMS Model
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
 * ActivateGasPumpKMS Model
 */
class ActivateGasPumpKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ONE = 'ONE';
    protected static $_name = "ActivateGasPumpKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner"], 
        "from" => ["from", "int", null, "getFrom", "setFrom"], 
        "to" => ["to", "int", null, "getTo", "setTo"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"]
    ];

    /**
     * ActivateGasPumpKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "owner"=>null, "from"=>null, "to"=>null, "signature_id"=>null, "index"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['owner'])) {
            $ip[] = "'owner' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if (($this->_data['from'] < 0)) {
            $ip[] = "'from' must be >= 0";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if (($this->_data['to'] < 0)) {
            $ip[] = "'to' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_BSC,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_MATIC,
            self::CHAIN_ONE,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("ActivateGasPumpKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as \"master address\"
     * @return $this
     */
    public function setOwner(string $owner) {
        $this->_data['owner'] = $owner;

        return $this;
    }

    /**
     * Get from
     *
     * @return int
     */
    public function getFrom(): int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int $from The start index of the range of gas pump addresses to activate
     * @return $this
     */
    public function setFrom(int $from) {
        if (($from < 0)) {
            throw new IAE('ActivateGasPumpKMS.setFrom: $from must be >=0');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get to
     *
     * @return int
     */
    public function getTo(): int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int $to The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter
     * @return $this
     */
    public function setTo(int $to) {
        if (($to < 0)) {
            throw new IAE('ActivateGasPumpKMS.setTo: $to must be >=0');
        }
        $this->_data['to'] = $to;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction
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
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('ActivateGasPumpKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }
}
