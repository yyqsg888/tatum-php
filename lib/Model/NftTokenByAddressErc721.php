<?php

/**
 * NftTokenByAddressErc721 Model
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
 * NftTokenByAddressErc721 Model
 */
class NftTokenByAddressErc721 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftTokenByAddressErc721";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "balances" => ["balances", "string[]", 'uint256', "getBalances", "setBalances"], 
        "block_number" => ["blockNumber", "float[]", null, "getBlockNumber", "setBlockNumber"], 
        "metadata" => ["metadata", "\Tatum\Model\NftTokenByAddressErc721TokenMetadata[]", null, "getMetadata", "setMetadata"], 
        "supply" => ["supply", "float", null, "getSupply", "setSupply"], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals"]
    ];

    /**
     * NftTokenByAddressErc721
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["contract_address"=>null, "balances"=>null, "block_number"=>null, "metadata"=>null, "supply"=>null, "decimals"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if (is_null($this->_data['balances'])) {
            $ip[] = "'balances' can't be null";
        }
        if (is_null($this->_data['metadata'])) {
            $ip[] = "'metadata' can't be null";
        }
        
        return $ip;
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
     * @param string $contract_address On Algorand, this is the asset ID (the ID of the NFT); on the other blockchains, this is the address of the NFT smart contract.
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get balances
     *
     * @return string[]
     */
    public function getBalances(): array {
        return $this->_data["balances"];
    }

    /**
     * Set balances
     * 
     * @param string[] $balances On Algorand, this is either an array of \"1\" to indicate that the NFTs with the specified IDs exist, or an array with the number of NFT fractions if the NFTs are <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional</a>; on the other blockchains, this is an array of the IDs of the NFTs.
     * @return $this
     */
    public function setBalances(array $balances) {
        $this->_data['balances'] = $balances;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float[]|null
     */
    public function getBlockNumber(): ?array {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float[]|null $block_number (EVM-based blockchains only) An array of the numbers of the blocks in which the NFT was received by the address
     * @return $this
     */
    public function setBlockNumber(?array $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\NftTokenByAddressErc721TokenMetadata[]
     */
    public function getMetadata(): array {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\NftTokenByAddressErc721TokenMetadata[] $metadata metadata
     * @return $this
     */
    public function setMetadata(array $metadata) {
        $this->_data['metadata'] = $metadata;

        return $this;
    }

    /**
     * Get supply
     *
     * @return float|null
     */
    public function getSupply(): ?float {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param float|null $supply (Algorand only) The number of fractions in the NFT if the NFT is <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional</a>
     * @return $this
     */
    public function setSupply(?float $supply) {
        $this->_data['supply'] = $supply;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float|null $decimals (Algorand only) The number of decimal places in an NFT fraction if the NFT is <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional</a>
     * @return $this
     */
    public function setDecimals(?float $decimals) {
        $this->_data['decimals'] = $decimals;

        return $this;
    }
}
