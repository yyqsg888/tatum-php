<?php

/**
 * AccountSettingsXrpBlockchainKMS Model
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
 * AccountSettingsXrpBlockchainKMS Model
 */
class AccountSettingsXrpBlockchainKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AccountSettingsXrpBlockchainKMS";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "rippling" => ["rippling", "bool", null, "getRippling", "setRippling"], 
        "require_destination_tag" => ["requireDestinationTag", "bool", null, "getRequireDestinationTag", "setRequireDestinationTag"]
    ];

    /**
     * AccountSettingsXrpBlockchainKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_account"=>null, "signature_id"=>null, "fee"=>null, "rippling"=>null, "require_destination_tag"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_account'])) {
            $ip[] = "'from_account' can't be null";
        }
        if ((mb_strlen($this->_data['from_account']) > 34)) {
            $ip[] = "'from_account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from_account']) < 33)) {
            $ip[] = "'from_account' length must be >= 33";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['fee']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        
        return $ip;
    }

    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XRP account address. Must be the one used for generating deposit tags.
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        if ((mb_strlen($from_account) > 34)) {
            throw new IAE('AccountSettingsXrpBlockchainKMS.setFromAccount: $from_account length must be <= 34');
        }
        if ((mb_strlen($from_account) < 33)) {
            throw new IAE('AccountSettingsXrpBlockchainKMS.setFromAccount: $from_account length must be >= 33');
        }
        $this->_data['from_account'] = $from_account;

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
     * @param string $signature_id Identifier of the private key associated in signing application. Secret or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be paid, in XRP. If omitted, current fee will be calculated.
     * @return $this
     */
    public function setFee(?string $fee) {
        if (!is_null($fee) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('AccountSettingsXrpBlockchainKMS.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get rippling
     *
     * @return bool|null
     */
    public function getRippling(): ?bool {
        return $this->_data["rippling"];
    }

    /**
     * Set rippling
     * 
     * @param bool|null $rippling Should be true, if an account is the issuer of assets.
     * @return $this
     */
    public function setRippling(?bool $rippling) {
        $this->_data['rippling'] = $rippling;

        return $this;
    }

    /**
     * Get require_destination_tag
     *
     * @return bool|null
     */
    public function getRequireDestinationTag(): ?bool {
        return $this->_data["require_destination_tag"];
    }

    /**
     * Set require_destination_tag
     * 
     * @param bool|null $require_destination_tag Should be true, if an account should support off-chain processing.
     * @return $this
     */
    public function setRequireDestinationTag(?bool $require_destination_tag) {
        $this->_data['require_destination_tag'] = $require_destination_tag;

        return $this;
    }
}
