<?php

/**
 * NftTransferErc721_request Model
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
 * NftTransferErc721_request Model
 */
class NftTransferErc721Request extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "NftTransferErc721_request";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance"], 
        "provenance_data" => ["provenanceData", "string", null, "getProvenanceData", "setProvenanceData"], 
        "token_price" => ["tokenPrice", "string", null, "getTokenPrice", "setTokenPrice"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "amount" => ["amount", "float", null, "getAmount", "setAmount"], 
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * NftTransferErc721Request
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["value"=>null, "chain"=>null, "to"=>null, "token_id"=>null, "contract_address"=>null, "provenance"=>null, "provenance_data"=>null, "token_price"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null, "fee_currency"=>null, "fee_limit"=>null, "from"=>null, "amount"=>1, "account"=>null, "private_key"=>null, "mnemonic"=>null, "index"=>null, "signature_id"=>null] as $k => $v) {
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
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 34)) {
            $ip[] = "'to' length must be <= 34";
        }
        if ((mb_strlen($this->_data['to']) < 34)) {
            $ip[] = "'to' length must be >= 34";
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 34)) {
            $ip[] = "'contract_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['contract_address']) < 34)) {
            $ip[] = "'contract_address' length must be >= 34";
        }
        if (!is_null($this->_data['token_price']) && (mb_strlen($this->_data['token_price']) > 256)) {
            $ip[] = "'token_price' length must be <= 256";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 103)) {
            $ip[] = "'from_private_key' length must be <= 103";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 106)) {
            $ip[] = "'from_private_key' length must be >= 106";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 44)) {
            $ip[] = "'from' length must be >= 44";
        }
        if (!is_null($this->_data['amount']) && ($this->_data['amount'] < 0)) {
            $ip[] = "'amount' must be >= 0";
        }
        if (is_null($this->_data['account'])) {
            $ip[] = "'account' can't be null";
        }
        if ((mb_strlen($this->_data['account']) > 34)) {
            $ip[] = "'account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['account']) < 34)) {
            $ip[] = "'account' length must be >= 34";
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
        if (is_null($this->_data['mnemonic'])) {
            $ip[] = "'mnemonic' can't be null";
        }
        if ((mb_strlen($this->_data['mnemonic']) > 500)) {
            $ip[] = "'mnemonic' length must be <= 500";
        }
        if ((mb_strlen($this->_data['mnemonic']) < 1)) {
            $ip[] = "'mnemonic' length must be >= 1";
        }
        if (is_null($this->_data['index'])) {
            $ip[] = "'index' can't be null";
        }
        if (($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
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
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("NftTransferErc721Request.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send NFT token to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 34)) {
            throw new IAE('NftTransferErc721Request.setTo: $to length must be <= 34');
        }
        if ((mb_strlen($to) < 34)) {
            throw new IAE('NftTransferErc721Request.setTo: $to length must be >= 34');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of the token.
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 78)) {
            throw new IAE('NftTransferErc721Request.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

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
     * @param string $contract_address Address of NFT token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 34)) {
            throw new IAE('NftTransferErc721Request.setContractAddress: $contract_address length must be <= 34');
        }
        if ((mb_strlen($contract_address) < 34)) {
            throw new IAE('NftTransferErc721Request.setContractAddress: $contract_address length must be >= 34');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance True if the contract is provenance type
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        $this->_data['provenance'] = $provenance;

        return $this;
    }

    /**
     * Get provenance_data
     *
     * @return string|null
     */
    public function getProvenanceData(): ?string {
        return $this->_data["provenance_data"];
    }

    /**
     * Set provenance_data
     * 
     * @param string|null $provenance_data data you want to store with transaction, optional and valid only if provenance contract
     * @return $this
     */
    public function setProvenanceData(?string $provenance_data) {
        $this->_data['provenance_data'] = $provenance_data;

        return $this;
    }

    /**
     * Get token_price
     *
     * @return string|null
     */
    public function getTokenPrice(): ?string {
        return $this->_data["token_price"];
    }

    /**
     * Set token_price
     * 
     * @param string|null $token_price current price of the token, valid only for provenance
     * @return $this
     */
    public function setTokenPrice(?string $token_price) {
        if (!is_null($token_price) && (mb_strlen($token_price) > 256)) {
            throw new IAE('NftTransferErc721Request.setTokenPrice: $token_price length must be <= 256');
        }
        $this->_data['token_price'] = $token_price;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the sender's blockchain address
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 103)) {
            throw new IAE('NftTransferErc721Request.setFromPrivateKey: $from_private_key length must be <= 103');
        }
        if ((mb_strlen($from_private_key) < 106)) {
            throw new IAE('NftTransferErc721Request.setFromPrivateKey: $from_private_key length must be >= 106');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("NftTransferErc721Request.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * @param float $fee_limit The maximum amount to be paid as the transaction fee (in TRX)
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
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
     * @param string $from The blockchain address to send the NFT from; this is the address that you used in the <code>to</code> parameter in the request body of the <a href=\"#operation/NftMintErc721\">minting call</a>; from this address, the transaction fee will be paid
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('NftTransferErc721Request.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 44)) {
            throw new IAE('NftTransferErc721Request.setFrom: $from length must be >= 44');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float|null
     */
    public function getAmount(): ?float {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param float|null $amount (For <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred
     * @return $this
     */
    public function setAmount(?float $amount) {
        if (!is_null($amount) && ($amount < 0)) {
            throw new IAE('NftTransferErc721Request.setAmount: $amount must be >=0');
        }
        $this->_data['amount'] = $amount;

        return $this;
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
     * @param string $account Blockchain address to perform transaction from
     * @return $this
     */
    public function setAccount(string $account) {
        if ((mb_strlen($account) > 34)) {
            throw new IAE('NftTransferErc721Request.setAccount: $account length must be <= 34');
        }
        if ((mb_strlen($account) < 34)) {
            throw new IAE('NftTransferErc721Request.setAccount: $account length must be >= 34');
        }
        $this->_data['account'] = $account;

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
     * @param string $private_key Private key of sender address. Private key, mnemonic and index or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 64)) {
            throw new IAE('NftTransferErc721Request.setPrivateKey: $private_key length must be <= 64');
        }
        if ((mb_strlen($private_key) < 64)) {
            throw new IAE('NftTransferErc721Request.setPrivateKey: $private_key length must be >= 64');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic to generate private key of sender address.
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        if ((mb_strlen($mnemonic) > 500)) {
            throw new IAE('NftTransferErc721Request.setMnemonic: $mnemonic length must be <= 500');
        }
        if ((mb_strlen($mnemonic) < 1)) {
            throw new IAE('NftTransferErc721Request.setMnemonic: $mnemonic length must be >= 1');
        }
        $this->_data['mnemonic'] = $mnemonic;

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
     * @param float $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @return $this
     */
    public function setIndex(float $index) {
        if (($index < 0)) {
            throw new IAE('NftTransferErc721Request.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
}
