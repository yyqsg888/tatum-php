<?php

/**
 * SellAssetOnMarketplace_200_response Model
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
 * SellAssetOnMarketplace_200_response Model
 */
class SellAssetOnMarketplace200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SellAssetOnMarketplace_200_response";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId"]
    ];

    /**
     * SellAssetOnMarketplace200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_id"=>null, "signature_id"=>null, "listing_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (is_null($this->_data['listing_id'])) {
            $ip[] = "'listing_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id The hash (ID) of the transaction
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

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
     * @param string $signature_id The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get listing_id
     *
     * @return string
     */
    public function getListingId(): string {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param string $listing_id The ID of the listing
     * @return $this
     */
    public function setListingId(string $listing_id) {
        $this->_data['listing_id'] = $listing_id;

        return $this;
    }
}
