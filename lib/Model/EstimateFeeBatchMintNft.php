<?php

/**
 * EstimateFeeBatchMintNft Model
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
 * EstimateFeeBatchMintNft Model
 */
class EstimateFeeBatchMintNft extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KLAY = 'KLAY';
    public const TYPE_MINT_NFT_BATCH = 'MINT_NFT_BATCH';
    protected static $_name = "EstimateFeeBatchMintNft";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "sender" => ["sender", "string", null, "getSender", "setSender", null, ["r" => 1, "nl" => 43, "xl" => 42]], 
        "recipients" => ["recipients", "string[]", null, "getRecipients", "setRecipients", null, ["r" => 1, "c" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 43, "xl" => 42]], 
        "token_ids" => ["tokenIds", "string[]", null, "getTokenIds", "setTokenIds", null, ["r" => 1, "c" => 1]], 
        "urls" => ["urls", "string[]", null, "getUrls", "setUrls", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * EstimateFeeBatchMintNft
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_BSC,
            self::CHAIN_XDC,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
            self::CHAIN_KLAY,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_MINT_NFT_BATCH,
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
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
     * @param string $sender Address of the minter
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSender(string $sender) {
        return $this->_set("sender", $sender);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipients(array $recipients) {
        return $this->_set("recipients", $recipients);
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
     * @param string $contract_address Contract address of NFT token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenIds(array $token_ids) {
        return $this->_set("token_ids", $token_ids);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrls(array $urls) {
        return $this->_set("urls", $urls);
    }
}
