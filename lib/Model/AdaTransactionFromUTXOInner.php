<?php

/**
 * AdaTransaction_fromUTXO_inner Model
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
 * AdaTransaction_fromUTXO_inner Model
 */
class AdaTransactionFromUTXOInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransaction_fromUTXO_inner";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * AdaTransactionFromUTXOInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_hash"=>null, "index"=>null, "private_key"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_hash'])) {
            $ip[] = "'tx_hash' can't be null";
        }
        if ((mb_strlen($this->_data['tx_hash']) > 64)) {
            $ip[] = "'tx_hash' length must be <= 64";
        }
        if ((mb_strlen($this->_data['tx_hash']) < 64)) {
            $ip[] = "'tx_hash' length must be >= 64";
        }
        if (is_null($this->_data['index'])) {
            $ip[] = "'index' can't be null";
        }
        if (($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['private_key']) && (mb_strlen($this->_data['private_key']) > 192)) {
            $ip[] = "'private_key' length must be <= 192";
        }
        if (!is_null($this->_data['private_key']) && (mb_strlen($this->_data['private_key']) < 192)) {
            $ip[] = "'private_key' length must be >= 192";
        }
        
        return $ip;
    }

    /**
     * Get tx_hash
     *
     * @return string
     */
    public function getTxHash(): string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string $tx_hash Transaction hash of the UTXO to be spent.
     * @return $this
     */
    public function setTxHash(string $tx_hash) {
        if ((mb_strlen($tx_hash) > 64)) {
            throw new IAE('AdaTransactionFromUTXOInner.setTxHash: $tx_hash length must be <= 64');
        }
        if ((mb_strlen($tx_hash) < 64)) {
            throw new IAE('AdaTransactionFromUTXOInner.setTxHash: $tx_hash length must be >= 64');
        }
        $this->_data['tx_hash'] = $tx_hash;

        return $this;
    }

    /**
     * Get index
     *
     * @return float
     */
    public function getIndex(): float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float $index Index of the UTXO to be spent.
     * @return $this
     */
    public function setIndex(float $index) {
        if (($index > 2147483647)) {
            throw new IAE('AdaTransactionFromUTXOInner.setIndex: $index must be <=2147483647');
        }
        if (($index < 0)) {
            throw new IAE('AdaTransactionFromUTXOInner.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string|null
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string|null $private_key Private key of the UTXO to be spent. Private key, or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        if (!is_null($private_key) && (mb_strlen($private_key) > 192)) {
            throw new IAE('AdaTransactionFromUTXOInner.setPrivateKey: $private_key length must be <= 192');
        }
        if (!is_null($private_key) && (mb_strlen($private_key) < 192)) {
            throw new IAE('AdaTransactionFromUTXOInner.setPrivateKey: $private_key length must be >= 192');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string|null $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}