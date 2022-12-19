<?php

/**
 * SolanaNftMetadataKMS Model
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
 * SolanaNftMetadataKMS Model
 */
class SolanaNftMetadataKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaNftMetadataKMS";
    protected static $_definition = [
        "name" => ["name", "string", null, "getName", "setName"], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "seller_fee_basis_points" => ["sellerFeeBasisPoints", "float", null, "getSellerFeeBasisPoints", "setSellerFeeBasisPoints"], 
        "uri" => ["uri", "string", null, "getUri", "setUri"], 
        "collection" => ["collection", "string", null, "getCollection", "setCollection"], 
        "mutable" => ["mutable", "bool", null, "getMutable", "setMutable"], 
        "creators" => ["creators", "\Tatum\Model\SolanaNftMetadataCreator[]", null, "getCreators", "setCreators"]
    ];

    /**
     * SolanaNftMetadataKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["name"=>null, "symbol"=>null, "seller_fee_basis_points"=>null, "uri"=>null, "collection"=>null, "mutable"=>true, "creators"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 255)) {
            $ip[] = "'name' length must be <= 255";
        }
        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if ((mb_strlen($this->_data['symbol']) > 255)) {
            $ip[] = "'symbol' length must be <= 255";
        }
        if (is_null($this->_data['seller_fee_basis_points'])) {
            $ip[] = "'seller_fee_basis_points' can't be null";
        }
        if (is_null($this->_data['uri'])) {
            $ip[] = "'uri' can't be null";
        }
        if ((mb_strlen($this->_data['uri']) > 500)) {
            $ip[] = "'uri' length must be <= 500";
        }
        if (!is_null($this->_data['collection']) && (mb_strlen($this->_data['collection']) > 44)) {
            $ip[] = "'collection' length must be <= 44";
        }
        if (!is_null($this->_data['collection']) && (mb_strlen($this->_data['collection']) < 43)) {
            $ip[] = "'collection' length must be >= 43";
        }
        
        return $ip;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name The name of the NFT
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 255)) {
            throw new IAE('SolanaNftMetadataKMS.setName: $name length must be <= 255');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol The symbol or abbreviated name of the NFT
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 255)) {
            throw new IAE('SolanaNftMetadataKMS.setSymbol: $symbol length must be <= 255');
        }
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get seller_fee_basis_points
     *
     * @return float
     */
    public function getSellerFeeBasisPoints(): float {
        return $this->_data["seller_fee_basis_points"];
    }

    /**
     * Set seller_fee_basis_points
     * 
     * @param float $seller_fee_basis_points The royalty that will be paid to the authors of the minted NFT every time the NFT is transferred<br/>The royalty is calculated as a percentage of the NFT price. To set the royalty to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.<br/>To specify the NFT authors and their shares in the royalty, set the <code>creators</code> parameter.<br/>To disable the royalty for the NFT completely, set <code>sellerFeeBasisPoints</code> to <code>0</code> and do not set <code>creators</code>.
     * @return $this
     */
    public function setSellerFeeBasisPoints(float $seller_fee_basis_points) {
        $this->_data['seller_fee_basis_points'] = $seller_fee_basis_points;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri(): string {
        return $this->_data["uri"];
    }

    /**
     * Set uri
     * 
     * @param string $uri The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @return $this
     */
    public function setUri(string $uri) {
        if ((mb_strlen($uri) > 500)) {
            throw new IAE('SolanaNftMetadataKMS.setUri: $uri length must be <= 500');
        }
        $this->_data['uri'] = $uri;

        return $this;
    }

    /**
     * Get collection
     *
     * @return string|null
     */
    public function getCollection(): ?string {
        return $this->_data["collection"];
    }

    /**
     * Set collection
     * 
     * @param string|null $collection The blockchain address of the NFT collection where the NFT will be minted in. The minted NFT will get verified in the collection on behalf of the blockchain address specified in the <code>from</code> parameter. To know more about Solana collections and verification, refer to the <a href=\"https://docs.metaplex.com/programs/token-metadata/certified-collections\" target=\"_blank\">Solana user documentation</a> and <a href=\"https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftVerifyInCollection\" target=\"_blank\">NFT verification API</a>.
     * @return $this
     */
    public function setCollection(?string $collection) {
        if (!is_null($collection) && (mb_strlen($collection) > 44)) {
            throw new IAE('SolanaNftMetadataKMS.setCollection: $collection length must be <= 44');
        }
        if (!is_null($collection) && (mb_strlen($collection) < 43)) {
            throw new IAE('SolanaNftMetadataKMS.setCollection: $collection length must be >= 43');
        }
        $this->_data['collection'] = $collection;

        return $this;
    }

    /**
     * Get mutable
     *
     * @return bool|null
     */
    public function getMutable(): ?bool {
        return $this->_data["mutable"];
    }

    /**
     * Set mutable
     * 
     * @param bool|null $mutable Specifies whether the NFT metadata is mutable (\"true\") or immutable (\"false\"); if not set, defaults to \"true\"
     * @return $this
     */
    public function setMutable(?bool $mutable) {
        $this->_data['mutable'] = $mutable;

        return $this;
    }

    /**
     * Get creators
     *
     * @return \Tatum\Model\SolanaNftMetadataCreator[]|null
     */
    public function getCreators(): ?array {
        return $this->_data["creators"];
    }

    /**
     * Set creators
     * 
     * @param \Tatum\Model\SolanaNftMetadataCreator[]|null $creators The blockchain addresses where the royalties will be sent every time the minted NFT is transferred
     * @return $this
     */
    public function setCreators(?array $creators) {
        $this->_data['creators'] = $creators;

        return $this;
    }
}
