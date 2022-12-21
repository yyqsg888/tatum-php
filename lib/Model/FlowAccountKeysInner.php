<?php

/**
 * FlowAccount_keys_inner Model
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
 * FlowAccount_keys_inner Model
 */
class FlowAccountKeysInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowAccount_keys_inner";
    protected static $_definition = [
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey"], 
        "sign_algo" => ["signAlgo", "float", null, "getSignAlgo", "setSignAlgo"], 
        "hash_algo" => ["hashAlgo", "float", null, "getHashAlgo", "setHashAlgo"], 
        "sequence_number" => ["sequenceNumber", "float", null, "getSequenceNumber", "setSequenceNumber"], 
        "revoked" => ["revoked", "bool", null, "getRevoked", "setRevoked"], 
        "weight" => ["weight", "float", null, "getWeight", "setWeight"]
    ];

    /**
     * FlowAccountKeysInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["index"=>null, "public_key"=>null, "sign_algo"=>null, "hash_algo"=>null, "sequence_number"=>null, "revoked"=>null, "weight"=>null] as $k => $v) {
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
     * @param float|null $index Index of the public key.
     * @return $this
     */
    public function setIndex(?float $index) {
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get public_key
     *
     * @return string|null
     */
    public function getPublicKey(): ?string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string|null $public_key public_key
     * @return $this
     */
    public function setPublicKey(?string $public_key) {
        $this->_data['public_key'] = $public_key;

        return $this;
    }

    /**
     * Get sign_algo
     *
     * @return float|null
     */
    public function getSignAlgo(): ?float {
        return $this->_data["sign_algo"];
    }

    /**
     * Set sign_algo
     * 
     * @param float|null $sign_algo Type of signature algorithm. 2 - ECDSA_secp256k1
     * @return $this
     */
    public function setSignAlgo(?float $sign_algo) {
        $this->_data['sign_algo'] = $sign_algo;

        return $this;
    }

    /**
     * Get hash_algo
     *
     * @return float|null
     */
    public function getHashAlgo(): ?float {
        return $this->_data["hash_algo"];
    }

    /**
     * Set hash_algo
     * 
     * @param float|null $hash_algo Type of hash algo. 3 - SHA3_256
     * @return $this
     */
    public function setHashAlgo(?float $hash_algo) {
        $this->_data['hash_algo'] = $hash_algo;

        return $this;
    }

    /**
     * Get sequence_number
     *
     * @return float|null
     */
    public function getSequenceNumber(): ?float {
        return $this->_data["sequence_number"];
    }

    /**
     * Set sequence_number
     * 
     * @param float|null $sequence_number Number of outgoing transactions for this public key.
     * @return $this
     */
    public function setSequenceNumber(?float $sequence_number) {
        $this->_data['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Get revoked
     *
     * @return bool|null
     */
    public function getRevoked(): ?bool {
        return $this->_data["revoked"];
    }

    /**
     * Set revoked
     * 
     * @param bool|null $revoked revoked
     * @return $this
     */
    public function setRevoked(?bool $revoked) {
        $this->_data['revoked'] = $revoked;

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
     * @param float|null $weight Weight of the key. 1000 means single signature necessary.
     * @return $this
     */
    public function setWeight(?float $weight) {
        $this->_data['weight'] = $weight;

        return $this;
    }
}