<?php

/**
 * SolanaListingData_nft Model
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
 * SolanaListingData_nft Model
 */
class SolanaListingDataNft extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaListingData_nft";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "data" => ["data", "\Tatum\Model\SolanaNftMetadata", null, "getData", "setData"]
    ];

    /**
     * SolanaListingDataNft
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['data'])) {
            $ip[] = "'data' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address NFT Address
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\SolanaNftMetadata
     */
    public function getData(): \Tatum\Model\SolanaNftMetadata {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\SolanaNftMetadata $data data
     * @return $this
     */
    public function setData(\Tatum\Model\SolanaNftMetadata $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
