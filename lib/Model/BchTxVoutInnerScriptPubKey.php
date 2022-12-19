<?php

/**
 * BchTx_vout_inner_scriptPubKey Model
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
 * BchTx_vout_inner_scriptPubKey Model
 */
class BchTxVoutInnerScriptPubKey extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BchTx_vout_inner_scriptPubKey";
    protected static $_definition = [
        "hex" => ["hex", "string", null, "getHex", "setHex"], 
        "asm" => ["asm", "string", null, "getAsm", "setAsm"], 
        "addresses" => ["addresses", "string[]", null, "getAddresses", "setAddresses"], 
        "type" => ["type", "string", null, "getType", "setType"]
    ];

    /**
     * BchTxVoutInnerScriptPubKey
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hex"=>null, "asm"=>null, "addresses"=>null, "type"=>null] as $k => $v) {
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
     * Get hex
     *
     * @return string|null
     */
    public function getHex(): ?string {
        return $this->_data["hex"];
    }

    /**
     * Set hex
     * 
     * @param string|null $hex hex
     * @return $this
     */
    public function setHex(?string $hex) {
        $this->_data['hex'] = $hex;

        return $this;
    }

    /**
     * Get asm
     *
     * @return string|null
     */
    public function getAsm(): ?string {
        return $this->_data["asm"];
    }

    /**
     * Set asm
     * 
     * @param string|null $asm asm
     * @return $this
     */
    public function setAsm(?string $asm) {
        $this->_data['asm'] = $asm;

        return $this;
    }

    /**
     * Get addresses
     *
     * @return string[]|null
     */
    public function getAddresses(): ?array {
        return $this->_data["addresses"];
    }

    /**
     * Set addresses
     * 
     * @param string[]|null $addresses addresses
     * @return $this
     */
    public function setAddresses(?array $addresses) {
        $this->_data['addresses'] = $addresses;

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
     * @param string|null $type type
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }
}
