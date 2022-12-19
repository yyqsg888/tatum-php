<?php

/**
 * AdaTx_block Model
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
 * AdaTx_block Model
 */
class AdaTxBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTx_block";
    protected static $_definition = [
        "number" => ["number", "float", null, "getNumber", "setNumber"], 
        "hash" => ["hash", "string", null, "getHash", "setHash"]
    ];

    /**
     * AdaTxBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["number"=>null, "hash"=>null] as $k => $v) {
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
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number Index of the block this transaction belongs to.
     * @return $this
     */
    public function setNumber(?float $number) {
        $this->_data['number'] = $number;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Block hash.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }
}
