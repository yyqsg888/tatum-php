<?php

/**
 * AlgorandGetBalance_200_response_assets_inner Model
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
 * AlgorandGetBalance_200_response_assets_inner Model
 */
class AlgorandGetBalance200ResponseAssetsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgorandGetBalance_200_response_assets_inner";
    protected static $_definition = [
        "amount" => ["amount", "float", null, "getAmount", "setAmount"], 
        "asset_index" => ["assetIndex", "float", null, "getAssetIndex", "setAssetIndex"]
    ];

    /**
     * AlgorandGetBalance200ResponseAssetsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["amount"=>null, "asset_index"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
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
     * @param float|null $amount Balance in asset unit
     * @return $this
     */
    public function setAmount(?float $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get asset_index
     *
     * @return float|null
     */
    public function getAssetIndex(): ?float {
        return $this->_data["asset_index"];
    }

    /**
     * Set asset_index
     * 
     * @param float|null $asset_index Asset Index of ASA
     * @return $this
     */
    public function setAssetIndex(?float $asset_index) {
        $this->_data['asset_index'] = $asset_index;

        return $this;
    }
}
