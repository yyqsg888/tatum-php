<?php

/**
 * FlowCreateAddressFromPubKeySecret Model
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
 * FlowCreateAddressFromPubKeySecret Model
 */
class FlowCreateAddressFromPubKeySecret extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowCreateAddressFromPubKeySecret";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey", null, ["r" => 1, "nl" => 128, "xl" => 128]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]]
    ];

    /**
     * FlowCreateAddressFromPubKeySecret
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain account to send from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get public_key
     *
     * @return string
     */
    public function getPublicKey(): string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string $public_key Public key to be used; will be assigned to a newly created address and will have a weight of 1000
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPublicKey(string $public_key) {
        return $this->_set("public_key", $public_key);
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Secret for account. Secret, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
