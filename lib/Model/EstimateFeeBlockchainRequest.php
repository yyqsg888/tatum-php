<?php

/**
 * EstimateFeeBlockchain_request Model
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
 * EstimateFeeBlockchain_request Model
 */
class EstimateFeeBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_BTC = 'BTC';
    public const CHAIN_LTC = 'LTC';
    public const TYPE_TRANSFER = 'TRANSFER';
    protected static $_name = "EstimateFeeBlockchain_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "sender" => ["sender", "string", null, "getSender", "setSender"], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "recipients" => ["recipients", "string[]", null, "getRecipients", "setRecipients"], 
        "token_ids" => ["tokenIds", "string[]", null, "getTokenIds", "setTokenIds"], 
        "urls" => ["urls", "string[]", null, "getUrls", "setUrls"], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount"], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress"], 
        "token_type" => ["tokenType", "float", null, "getTokenType", "setTokenType"], 
        "from_address" => ["fromAddress", "string[]", null, "getFromAddress", "setFromAddress"], 
        "to" => ["to", "\Tatum\Model\EstimateFeeFromAddressToInner[]", null, "getTo", "setTo"], 
        "from_utxo" => ["fromUTXO", "\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]", null, "getFromUtxo", "setFromUtxo"]
    ];

    /**
     * EstimateFeeBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "type"=>null, "sender"=>null, "recipient"=>null, "contract_address"=>null, "amount"=>null, "recipients"=>null, "token_ids"=>null, "urls"=>null, "batch_count"=>null, "custodial_address"=>null, "token_type"=>null, "from_address"=>null, "to"=>null, "from_utxo"=>null] as $k => $v) {
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
        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['sender'])) {
            $ip[] = "'sender' can't be null";
        }
        if ((mb_strlen($this->_data['sender']) > 42)) {
            $ip[] = "'sender' length must be <= 42";
        }
        if ((mb_strlen($this->_data['sender']) < 42)) {
            $ip[] = "'sender' length must be >= 42";
        }
        if (is_null($this->_data['recipient'])) {
            $ip[] = "'recipient' can't be null";
        }
        if ((mb_strlen($this->_data['recipient']) > 42)) {
            $ip[] = "'recipient' length must be <= 42";
        }
        if ((mb_strlen($this->_data['recipient']) < 42)) {
            $ip[] = "'recipient' length must be >= 42";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['recipients'])) {
            $ip[] = "'recipients' can't be null";
        }
        if (is_null($this->_data['token_ids'])) {
            $ip[] = "'token_ids' can't be null";
        }
        if (is_null($this->_data['urls'])) {
            $ip[] = "'urls' can't be null";
        }
        if (is_null($this->_data['batch_count'])) {
            $ip[] = "'batch_count' can't be null";
        }
        if (($this->_data['batch_count'] > 300)) {
            $ip[] = "'batch_count' must be <= 300";
        }
        if (($this->_data['batch_count'] < 1)) {
            $ip[] = "'batch_count' must be >= 1";
        }
        if (is_null($this->_data['custodial_address'])) {
            $ip[] = "'custodial_address' can't be null";
        }
        if ((mb_strlen($this->_data['custodial_address']) > 42)) {
            $ip[] = "'custodial_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['custodial_address']) < 42)) {
            $ip[] = "'custodial_address' length must be >= 42";
        }
        if (is_null($this->_data['token_type'])) {
            $ip[] = "'token_type' can't be null";
        }
        if (($this->_data['token_type'] > 3)) {
            $ip[] = "'token_type' must be <= 3";
        }
        if (($this->_data['token_type'] < 0)) {
            $ip[] = "'token_type' must be >= 0";
        }
        if (is_null($this->_data['from_address'])) {
            $ip[] = "'from_address' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if (is_null($this->_data['from_utxo'])) {
            $ip[] = "'from_utxo' can't be null";
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
            self::CHAIN_BTC,
            self::CHAIN_LTC,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_TRANSFER,
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
     * @param string $chain Blockchain to estimate fee for.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeBlockchainRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $type Type of transaction
     * @return $this
     */
    public function setType(string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeBlockchainRequest.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender(): string {
        return $this->_data["sender"];
    }

    /**
     * Set sender
     * 
     * @param string $sender Sender address
     * @return $this
     */
    public function setSender(string $sender) {
        if ((mb_strlen($sender) > 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setSender: $sender length must be <= 42');
        }
        if ((mb_strlen($sender) < 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setSender: $sender length must be >= 42');
        }
        $this->_data['sender'] = $sender;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient Blockchain address to send assets
     * @return $this
     */
    public function setRecipient(string $recipient) {
        if ((mb_strlen($recipient) > 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setRecipient: $recipient length must be <= 42');
        }
        if ((mb_strlen($recipient) < 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setRecipient: $recipient length must be >= 42');
        }
        $this->_data['recipient'] = $recipient;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Contract address of the token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in native asset, ERC20 or ERC1155
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('EstimateFeeBlockchainRequest.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get recipients
     *
     * @return string[]
     */
    public function getRecipients(): array {
        return $this->_data["recipients"];
    }

    /**
     * Set recipients
     * 
     * @param string[] $recipients Blockchain addresses to mint tokens to
     * @return $this
     */
    public function setRecipients(array $recipients) {
        $this->_data['recipients'] = $recipients;

        return $this;
    }

    /**
     * Get token_ids
     *
     * @return string[]
     */
    public function getTokenIds(): array {
        return $this->_data["token_ids"];
    }

    /**
     * Set token_ids
     * 
     * @param string[] $token_ids Token IDs
     * @return $this
     */
    public function setTokenIds(array $token_ids) {
        $this->_data['token_ids'] = $token_ids;

        return $this;
    }

    /**
     * Get urls
     *
     * @return string[]
     */
    public function getUrls(): array {
        return $this->_data["urls"];
    }

    /**
     * Set urls
     * 
     * @param string[] $urls Metadata URLs
     * @return $this
     */
    public function setUrls(array $urls) {
        $this->_data['urls'] = $urls;

        return $this;
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to create
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        if (($batch_count > 300)) {
            throw new IAE('EstimateFeeBlockchainRequest.setBatchCount: $batch_count must be <=300');
        }
        if (($batch_count < 1)) {
            throw new IAE('EstimateFeeBlockchainRequest.setBatchCount: $batch_count must be >=1');
        }
        $this->_data['batch_count'] = $batch_count;

        return $this;
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address Contract address of custodial wallet contract
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        if ((mb_strlen($custodial_address) > 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setCustodialAddress: $custodial_address length must be <= 42');
        }
        if ((mb_strlen($custodial_address) < 42)) {
            throw new IAE('EstimateFeeBlockchainRequest.setCustodialAddress: $custodial_address length must be >= 42');
        }
        $this->_data['custodial_address'] = $custodial_address;

        return $this;
    }

    /**
     * Get token_type
     *
     * @return float
     */
    public function getTokenType(): float {
        return $this->_data["token_type"];
    }

    /**
     * Set token_type
     * 
     * @param float $token_type Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset
     * @return $this
     */
    public function setTokenType(float $token_type) {
        if (($token_type > 3)) {
            throw new IAE('EstimateFeeBlockchainRequest.setTokenType: $token_type must be <=3');
        }
        if (($token_type < 0)) {
            throw new IAE('EstimateFeeBlockchainRequest.setTokenType: $token_type must be >=0');
        }
        $this->_data['token_type'] = $token_type;

        return $this;
    }

    /**
     * Get from_address
     *
     * @return string[]
     */
    public function getFromAddress(): array {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param string[] $from_address Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only.
     * @return $this
     */
    public function setFromAddress(array $from_address) {
        $this->_data['from_address'] = $from_address;

        return $this;
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\EstimateFeeFromAddressToInner[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\EstimateFeeFromAddressToInner[] $to Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee.
     * @return $this
     */
    public function setTo(array $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get from_utxo
     *
     * @return \Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]
     */
    public function getFromUtxo(): array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[] $from_utxo Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present.
     * @return $this
     */
    public function setFromUtxo(array $from_utxo) {
        $this->_data['from_utxo'] = $from_utxo;

        return $this;
    }
}
