<?php

/**
 * GeneratedAddressEth Model
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
 * GeneratedAddressEth Model
 */
class GeneratedAddressEth extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "GeneratedAddressEth";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"]
    ];

    /**
     * GeneratedAddressEth
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null] as $k => $v) {
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
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Ethereum address
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }
}
