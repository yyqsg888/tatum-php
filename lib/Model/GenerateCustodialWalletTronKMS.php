<?php

/**
 * GenerateCustodialWalletTronKMS Model
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
 * GenerateCustodialWalletTronKMS Model
 */
class GenerateCustodialWalletTronKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "GenerateCustodialWalletTronKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "enable_fungible_tokens" => ["enableFungibleTokens", "bool", null, "getEnableFungibleTokens", "setEnableFungibleTokens"], 
        "enable_non_fungible_tokens" => ["enableNonFungibleTokens", "bool", null, "getEnableNonFungibleTokens", "setEnableNonFungibleTokens"], 
        "enable_semi_fungible_tokens" => ["enableSemiFungibleTokens", "bool", null, "getEnableSemiFungibleTokens", "setEnableSemiFungibleTokens"], 
        "enable_batch_transactions" => ["enableBatchTransactions", "bool", null, "getEnableBatchTransactions", "setEnableBatchTransactions"]
    ];

    /**
     * GenerateCustodialWalletTronKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "fee_limit"=>null, "from"=>null, "signature_id"=>null, "index"=>null, "enable_fungible_tokens"=>null, "enable_non_fungible_tokens"=>null, "enable_semi_fungible_tokens"=>null, "enable_batch_transactions"=>null] as $k => $v) {
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
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 0)) {
            $ip[] = "'fee_limit' must be >= 0";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 34)) {
            $ip[] = "'from' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from']) < 34)) {
            $ip[] = "'from' length must be >= 34";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['enable_fungible_tokens'])) {
            $ip[] = "'enable_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_non_fungible_tokens'])) {
            $ip[] = "'enable_non_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_semi_fungible_tokens'])) {
            $ip[] = "'enable_semi_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_batch_transactions'])) {
            $ip[] = "'enable_batch_transactions' can't be null";
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
            self::CHAIN_TRON,
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateCustodialWalletTronKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee in TRX to be paid.
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('GenerateCustodialWalletTronKMS.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender address of TRON account in Base58 format.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 34)) {
            throw new IAE('GenerateCustodialWalletTronKMS.setFrom: $from length must be <= 34');
        }
        if ((mb_strlen($from) < 34)) {
            throw new IAE('GenerateCustodialWalletTronKMS.setFrom: $from length must be >= 34');
        }
        $this->_data['from'] = $from;

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
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
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
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('GenerateCustodialWalletTronKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get enable_fungible_tokens
     *
     * @return bool
     */
    public function getEnableFungibleTokens(): bool {
        return $this->_data["enable_fungible_tokens"];
    }

    /**
     * Set enable_fungible_tokens
     * 
     * @param bool $enable_fungible_tokens If address should support ERC20 tokens, it should be marked as true.
     * @return $this
     */
    public function setEnableFungibleTokens(bool $enable_fungible_tokens) {
        $this->_data['enable_fungible_tokens'] = $enable_fungible_tokens;

        return $this;
    }

    /**
     * Get enable_non_fungible_tokens
     *
     * @return bool
     */
    public function getEnableNonFungibleTokens(): bool {
        return $this->_data["enable_non_fungible_tokens"];
    }

    /**
     * Set enable_non_fungible_tokens
     * 
     * @param bool $enable_non_fungible_tokens If address should support ERC721 tokens, it should be marked as true.
     * @return $this
     */
    public function setEnableNonFungibleTokens(bool $enable_non_fungible_tokens) {
        $this->_data['enable_non_fungible_tokens'] = $enable_non_fungible_tokens;

        return $this;
    }

    /**
     * Get enable_semi_fungible_tokens
     *
     * @return bool
     */
    public function getEnableSemiFungibleTokens(): bool {
        return $this->_data["enable_semi_fungible_tokens"];
    }

    /**
     * Set enable_semi_fungible_tokens
     * 
     * @param bool $enable_semi_fungible_tokens If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON.
     * @return $this
     */
    public function setEnableSemiFungibleTokens(bool $enable_semi_fungible_tokens) {
        $this->_data['enable_semi_fungible_tokens'] = $enable_semi_fungible_tokens;

        return $this;
    }

    /**
     * Get enable_batch_transactions
     *
     * @return bool
     */
    public function getEnableBatchTransactions(): bool {
        return $this->_data["enable_batch_transactions"];
    }

    /**
     * Set enable_batch_transactions
     * 
     * @param bool $enable_batch_transactions If address should support batch transfers of the assets, it should be marked as true.
     * @return $this
     */
    public function setEnableBatchTransactions(bool $enable_batch_transactions) {
        $this->_data['enable_batch_transactions'] = $enable_batch_transactions;

        return $this;
    }
}
