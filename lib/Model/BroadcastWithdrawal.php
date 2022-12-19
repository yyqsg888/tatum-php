<?php

/**
 * BroadcastWithdrawal Model
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
 * BroadcastWithdrawal Model
 */
class BroadcastWithdrawal extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BroadcastWithdrawal";
    protected static $_definition = [
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency"], 
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData"], 
        "withdrawal_id" => ["withdrawalId", "string", null, "getWithdrawalId", "setWithdrawalId"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * BroadcastWithdrawal
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["currency"=>null, "tx_data"=>null, "withdrawal_id"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['currency'])) {
            $ip[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->_data['currency']) > 40)) {
            $ip[] = "'currency' length must be <= 40";
        }
        if ((mb_strlen($this->_data['currency']) < 2)) {
            $ip[] = "'currency' length must be >= 2";
        }
        if (is_null($this->_data['tx_data'])) {
            $ip[] = "'tx_data' can't be null";
        }
        if ((mb_strlen($this->_data['tx_data']) > 500000)) {
            $ip[] = "'tx_data' length must be <= 500000";
        }
        if ((mb_strlen($this->_data['tx_data']) < 1)) {
            $ip[] = "'tx_data' length must be >= 1";
        }
        if (!is_null($this->_data['withdrawal_id']) && (mb_strlen($this->_data['withdrawal_id']) > 24)) {
            $ip[] = "'withdrawal_id' length must be <= 24";
        }
        if (!is_null($this->_data['withdrawal_id']) && (mb_strlen($this->_data['withdrawal_id']) < 24)) {
            $ip[] = "'withdrawal_id' length must be >= 24";
        }
        
        return $ip;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency of signed transaction to be broadcast, BTC, LTC, DOGE, BNB, XLM, TRX, BCH, ETH, XRP, ERC20, TRC20
     * @return $this
     */
    public function setCurrency(string $currency) {
        if ((mb_strlen($currency) > 40)) {
            throw new IAE('BroadcastWithdrawal.setCurrency: $currency length must be <= 40');
        }
        if ((mb_strlen($currency) < 2)) {
            throw new IAE('BroadcastWithdrawal.setCurrency: $currency length must be >= 2');
        }
        $this->_data['currency'] = $currency;

        return $this;
    }

    /**
     * Get tx_data
     *
     * @return string
     */
    public function getTxData(): string {
        return $this->_data["tx_data"];
    }

    /**
     * Set tx_data
     * 
     * @param string $tx_data Raw signed transaction to be published to network.
     * @return $this
     */
    public function setTxData(string $tx_data) {
        if ((mb_strlen($tx_data) > 500000)) {
            throw new IAE('BroadcastWithdrawal.setTxData: $tx_data length must be <= 500000');
        }
        if ((mb_strlen($tx_data) < 1)) {
            throw new IAE('BroadcastWithdrawal.setTxData: $tx_data length must be >= 1');
        }
        $this->_data['tx_data'] = $tx_data;

        return $this;
    }

    /**
     * Get withdrawal_id
     *
     * @return string|null
     */
    public function getWithdrawalId(): ?string {
        return $this->_data["withdrawal_id"];
    }

    /**
     * Set withdrawal_id
     * 
     * @param string|null $withdrawal_id Withdrawal ID to be completed by transaction broadcast
     * @return $this
     */
    public function setWithdrawalId(?string $withdrawal_id) {
        if (!is_null($withdrawal_id) && (mb_strlen($withdrawal_id) > 24)) {
            throw new IAE('BroadcastWithdrawal.setWithdrawalId: $withdrawal_id length must be <= 24');
        }
        if (!is_null($withdrawal_id) && (mb_strlen($withdrawal_id) < 24)) {
            throw new IAE('BroadcastWithdrawal.setWithdrawalId: $withdrawal_id length must be >= 24');
        }
        $this->_data['withdrawal_id'] = $withdrawal_id;

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
     * @param string|null $signature_id ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain.
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
