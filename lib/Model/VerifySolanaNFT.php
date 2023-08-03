<?php

/**
 * VerifySolanaNFT Model
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
 * VerifySolanaNFT Model
 */
class VerifySolanaNFT extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "VerifySolanaNFT";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "collection_address" => ["collectionAddress", "string", null, "getCollectionAddress", "setCollectionAddress", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 32, "xl" => 44]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 128]]
    ];

    /**
     * VerifySolanaNFT
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
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $nft_address The blockchain address of the NFT to verify
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get collection_address
     *
     * @return string
     */
    public function getCollectionAddress(): string {
        return $this->_data["collection_address"];
    }

    /**
     * Set collection_address
     * 
     * @param string $collection_address The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href=\"https://docs.metaplex.com/programs/token-metadata/changelog/v1.3\" target=\"_blank\">Version 1.3</a> of the Metaplex Token Metadata program.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCollectionAddress(string $collection_address) {
        return $this->_set("collection_address", $collection_address);
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
     * @param string $from The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
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
     * @param string $from_private_key The private key of the collection verifier's address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }
}
