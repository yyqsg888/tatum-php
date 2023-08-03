<?php

/**
 * SellAssetOnMarketplaceSolana Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * SellAssetOnMarketplaceSolana Model
 */
class SellAssetOnMarketplaceSolana extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "SellAssetOnMarketplaceSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "from" => ["from", "mixed", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "authority_private_key" => ["authorityPrivateKey", "string", null, "getAuthorityPrivateKey", "setAuthorityPrivateKey", null, ["r" => 0, "nl" => 87, "xl" => 128]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 87, "xl" => 128]]
    ];

    /**
     * SellAssetOnMarketplaceSolana
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
            self::CHAIN_SOL,
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $contract_address Blockchain address of the smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get nft_address
     *
     * @return string
     */
    public function getNftAddress(): string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string $nft_address Blockchain address of the asset to sell
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get from
     *
     * @return mixed
     */
    public function getFrom(): mixed {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param mixed $from Blockchain address of the seller
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(mixed $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice(): string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string $price Price of the asset to sell. Marketplace fee will be obtained on top of this price.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(string $price) {
        return $this->_set("price", $price);
    }

    /**
     * Get authority_private_key
     *
     * @return string|null
     */
    public function getAuthorityPrivateKey(): ?string {
        return $this->_data["authority_private_key"];
    }

    /**
     * Set authority_private_key
     * 
     * @param string|null $authority_private_key The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to \"true\" for the marketplace
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorityPrivateKey(?string $authority_private_key) {
        return $this->_set("authority_private_key", $authority_private_key);
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
     * @param string $from_private_key The private key of the seller
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }
}
