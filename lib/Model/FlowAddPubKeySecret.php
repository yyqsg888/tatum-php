<?php

/**
 * FlowAddPubKeySecret Model
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
 * FlowAddPubKeySecret Model
 */
class FlowAddPubKeySecret extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowAddPubKeySecret";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"], 
        "weight" => ["weight", "float", null, "getWeight", "setWeight"]
    ];

    /**
     * FlowAddPubKeySecret
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "public_key"=>null, "private_key"=>null, "weight"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['account'])) {
            $ip[] = "'account' can't be null";
        }
        if ((mb_strlen($this->_data['account']) > 18)) {
            $ip[] = "'account' length must be <= 18";
        }
        if ((mb_strlen($this->_data['account']) < 18)) {
            $ip[] = "'account' length must be >= 18";
        }
        if (is_null($this->_data['public_key'])) {
            $ip[] = "'public_key' can't be null";
        }
        if ((mb_strlen($this->_data['public_key']) > 128)) {
            $ip[] = "'public_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['public_key']) < 128)) {
            $ip[] = "'public_key' length must be >= 128";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        if ((mb_strlen($this->_data['private_key']) > 64)) {
            $ip[] = "'private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['private_key']) < 64)) {
            $ip[] = "'private_key' length must be >= 64";
        }
        if (!is_null($this->_data['weight']) && ($this->_data['weight'] > 1000)) {
            $ip[] = "'weight' must be <= 1000";
        }
        if (!is_null($this->_data['weight']) && ($this->_data['weight'] < 0)) {
            $ip[] = "'weight' must be >= 0";
        }
        
        return $ip;
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
     * @return $this
     */
    public function setAccount(string $account) {
        if ((mb_strlen($account) > 18)) {
            throw new IAE('FlowAddPubKeySecret.setAccount: $account length must be <= 18');
        }
        if ((mb_strlen($account) < 18)) {
            throw new IAE('FlowAddPubKeySecret.setAccount: $account length must be >= 18');
        }
        $this->_data['account'] = $account;

        return $this;
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
     * @param string $public_key Public key to be used
     * @return $this
     */
    public function setPublicKey(string $public_key) {
        if ((mb_strlen($public_key) > 128)) {
            throw new IAE('FlowAddPubKeySecret.setPublicKey: $public_key length must be <= 128');
        }
        if ((mb_strlen($public_key) < 128)) {
            throw new IAE('FlowAddPubKeySecret.setPublicKey: $public_key length must be >= 128');
        }
        $this->_data['public_key'] = $public_key;

        return $this;
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
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 64)) {
            throw new IAE('FlowAddPubKeySecret.setPrivateKey: $private_key length must be <= 64');
        }
        if ((mb_strlen($private_key) < 64)) {
            throw new IAE('FlowAddPubKeySecret.setPrivateKey: $private_key length must be >= 64');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float|null
     */
    public function getWeight(): ?float {
        return $this->_data["weight"];
    }

    /**
     * Set weight
     * 
     * @param float|null $weight Weight of the key. If not set, default 1000 will be used.
     * @return $this
     */
    public function setWeight(?float $weight) {
        if (!is_null($weight) && ($weight > 1000)) {
            throw new IAE('FlowAddPubKeySecret.setWeight: $weight must be <=1000');
        }
        if (!is_null($weight) && ($weight < 0)) {
            throw new IAE('FlowAddPubKeySecret.setWeight: $weight must be >=0');
        }
        $this->_data['weight'] = $weight;

        return $this;
    }
}
