<?php

/**
 * SolanaNftMetadataCreator Model
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
 * SolanaNftMetadataCreator Model
 */
class SolanaNftMetadataCreator extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaNftMetadataCreator";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "verified" => ["verified", "bool", null, "getVerified", "setVerified"], 
        "share" => ["share", "float", null, "getShare", "setShare"]
    ];

    /**
     * SolanaNftMetadataCreator
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "verified"=>null, "share"=>null] as $k => $v) {
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
        if ((mb_strlen($this->_data['address']) > 44)) {
            $ip[] = "'address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['address']) < 43)) {
            $ip[] = "'address' length must be >= 43";
        }
        if (is_null($this->_data['verified'])) {
            $ip[] = "'verified' can't be null";
        }
        if (is_null($this->_data['share'])) {
            $ip[] = "'share' can't be null";
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
     * @param string $address The blockchain address of the NFT creator
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 44)) {
            throw new IAE('SolanaNftMetadataCreator.setAddress: $address length must be <= 44');
        }
        if ((mb_strlen($address) < 43)) {
            throw new IAE('SolanaNftMetadataCreator.setAddress: $address length must be >= 43');
        }
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get verified
     *
     * @return bool
     */
    public function getVerified(): bool {
        return $this->_data["verified"];
    }

    /**
     * Set verified
     * 
     * @param bool $verified If set to \"true\", the NFT creator was verified. Only the address whose private key was used during the minting of the NFT can be a verified creator. If you are minting the NFT using NFT Express, set this parameter to \"false\".
     * @return $this
     */
    public function setVerified(bool $verified) {
        $this->_data['verified'] = $verified;

        return $this;
    }

    /**
     * Get share
     *
     * @return float
     */
    public function getShare(): float {
        return $this->_data["share"];
    }

    /**
     * Set share
     * 
     * @param float $share The share to be sent to the NFT creator (in %)
     * @return $this
     */
    public function setShare(float $share) {
        $this->_data['share'] = $share;

        return $this;
    }
}
