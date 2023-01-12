<?php

/**
 * TronAccount Model
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
 * TronAccount Model
 */
class TronAccount extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronAccount";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "balance" => ["balance", "float", null, "getBalance", "setBalance", null, ["r" => 1]], 
        "trc10" => ["trc10", "\Tatum\Model\TronAccountTrc10Inner[]", null, "getTrc10", "setTrc10", null, ["r" => 1, "c" => 1]], 
        "trc20" => ["trc20", "object[]", null, "getTrc20", "setTrc20", null, ["r" => 1, "c" => 1]], 
        "create_time" => ["createTime", "float", null, "getCreateTime", "setCreateTime", null, ["r" => 1]], 
        "asset_issued_id" => ["assetIssuedId", "string", null, "getAssetIssuedId", "setAssetIssuedId", null, ["r" => 0]], 
        "asset_issued_name" => ["assetIssuedName", "float", null, "getAssetIssuedName", "setAssetIssuedName", null, ["r" => 0]], 
        "free_net_usage" => ["freeNetUsage", "float", null, "getFreeNetUsage", "setFreeNetUsage", null, ["r" => 1]], 
        "free_net_limit" => ["freeNetLimit", "float", null, "getFreeNetLimit", "setFreeNetLimit", null, ["r" => 0]], 
        "net_usage" => ["netUsage", "float", null, "getNetUsage", "setNetUsage", null, ["r" => 0]], 
        "net_limit" => ["netLimit", "float", null, "getNetLimit", "setNetLimit", null, ["r" => 0]], 
        "bandwidth" => ["bandwidth", "float", null, "getBandwidth", "setBandwidth", null, ["r" => 1]]
    ];

    /**
     * TronAccount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $address Account address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance(): float {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param float $balance Balance of the TRX, in SUN. SUN is 1/1000000 TRX.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalance(float $balance) {
        return $this->_set("balance", $balance);
    }

    /**
     * Get trc10
     *
     * @return \Tatum\Model\TronAccountTrc10Inner[]
     */
    public function getTrc10(): array {
        return $this->_data["trc10"];
    }

    /**
     * Set trc10
     * 
     * @param \Tatum\Model\TronAccountTrc10Inner[] $trc10 trc10
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTrc10(array $trc10) {
        return $this->_set("trc10", $trc10);
    }

    /**
     * Get trc20
     *
     * @return object[]
     */
    public function getTrc20(): array {
        return $this->_data["trc20"];
    }

    /**
     * Set trc20
     * 
     * @param object[] $trc20 trc20
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTrc20(array $trc20) {
        return $this->_set("trc20", $trc20);
    }

    /**
     * Get create_time
     *
     * @return float
     */
    public function getCreateTime(): float {
        return $this->_data["create_time"];
    }

    /**
     * Set create_time
     * 
     * @param float $create_time Date of creation of the account in UTC millis.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreateTime(float $create_time) {
        return $this->_set("create_time", $create_time);
    }

    /**
     * Get asset_issued_id
     *
     * @return string|null
     */
    public function getAssetIssuedId(): ?string {
        return $this->_data["asset_issued_id"];
    }

    /**
     * Set asset_issued_id
     * 
     * @param string|null $asset_issued_id ID of the issued TRC10 token, if any.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetIssuedId(?string $asset_issued_id) {
        return $this->_set("asset_issued_id", $asset_issued_id);
    }

    /**
     * Get asset_issued_name
     *
     * @return float|null
     */
    public function getAssetIssuedName(): ?float {
        return $this->_data["asset_issued_name"];
    }

    /**
     * Set asset_issued_name
     * 
     * @param float|null $asset_issued_name Balance of the issued TRC10 token, if any.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetIssuedName(?float $asset_issued_name) {
        return $this->_set("asset_issued_name", $asset_issued_name);
    }

    /**
     * Get free_net_usage
     *
     * @return float
     */
    public function getFreeNetUsage(): float {
        return $this->_data["free_net_usage"];
    }

    /**
     * Set free_net_usage
     * 
     * @param float $free_net_usage Free usage of the network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFreeNetUsage(float $free_net_usage) {
        return $this->_set("free_net_usage", $free_net_usage);
    }

    /**
     * Get free_net_limit
     *
     * @return float|null
     */
    public function getFreeNetLimit(): ?float {
        return $this->_data["free_net_limit"];
    }

    /**
     * Set free_net_limit
     * 
     * @param float|null $free_net_limit Free usage limit of the network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFreeNetLimit(?float $free_net_limit) {
        return $this->_set("free_net_limit", $free_net_limit);
    }

    /**
     * Get net_usage
     *
     * @return float|null
     */
    public function getNetUsage(): ?float {
        return $this->_data["net_usage"];
    }

    /**
     * Set net_usage
     * 
     * @param float|null $net_usage Extra usage of the network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNetUsage(?float $net_usage) {
        return $this->_set("net_usage", $net_usage);
    }

    /**
     * Get net_limit
     *
     * @return float|null
     */
    public function getNetLimit(): ?float {
        return $this->_data["net_limit"];
    }

    /**
     * Set net_limit
     * 
     * @param float|null $net_limit Extra usage limit of the network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNetLimit(?float $net_limit) {
        return $this->_set("net_limit", $net_limit);
    }

    /**
     * Get bandwidth
     *
     * @return float
     */
    public function getBandwidth(): float {
        return $this->_data["bandwidth"];
    }

    /**
     * Set bandwidth
     * 
     * @param float $bandwidth Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBandwidth(float $bandwidth) {
        return $this->_set("bandwidth", $bandwidth);
    }
}
