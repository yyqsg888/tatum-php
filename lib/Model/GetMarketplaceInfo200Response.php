<?php

/**
 * GetMarketplaceInfo_200_response Model
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
 * GetMarketplaceInfo_200_response Model
 */
class GetMarketplaceInfo200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "GetMarketplaceInfo_200_response";
    protected static $_definition = [
        "fee_account" => ["feeAccount", "string", null, "getFeeAccount", "setFeeAccount"], 
        "treasury_account" => ["treasuryAccount", "string", null, "getTreasuryAccount", "setTreasuryAccount"], 
        "authority" => ["authority", "string", null, "getAuthority", "setAuthority"], 
        "creator" => ["creator", "string", null, "getCreator", "setCreator"], 
        "marketplace_fee" => ["marketplaceFee", "float", null, "getMarketplaceFee", "setMarketplaceFee"], 
        "treasury_mint" => ["treasuryMint", "string", null, "getTreasuryMint", "setTreasuryMint"], 
        "treasury_withdrawal_destination" => ["treasuryWithdrawalDestination", "string", null, "getTreasuryWithdrawalDestination", "setTreasuryWithdrawalDestination"], 
        "fee_withdrawal_destination" => ["feeWithdrawalDestination", "string", null, "getFeeWithdrawalDestination", "setFeeWithdrawalDestination"], 
        "requires_sign_off" => ["requiresSignOff", "bool", null, "getRequiresSignOff", "setRequiresSignOff"], 
        "can_change_sale_price" => ["canChangeSalePrice", "bool", null, "getCanChangeSalePrice", "setCanChangeSalePrice"]
    ];

    /**
     * GetMarketplaceInfo200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["fee_account"=>null, "treasury_account"=>null, "authority"=>null, "creator"=>null, "marketplace_fee"=>null, "treasury_mint"=>null, "treasury_withdrawal_destination"=>null, "fee_withdrawal_destination"=>null, "requires_sign_off"=>null, "can_change_sale_price"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['fee_account'])) {
            $ip[] = "'fee_account' can't be null";
        }
        if ((mb_strlen($this->_data['fee_account']) > 44)) {
            $ip[] = "'fee_account' length must be <= 44";
        }
        if ((mb_strlen($this->_data['fee_account']) < 44)) {
            $ip[] = "'fee_account' length must be >= 44";
        }
        if (is_null($this->_data['treasury_account'])) {
            $ip[] = "'treasury_account' can't be null";
        }
        if ((mb_strlen($this->_data['treasury_account']) > 44)) {
            $ip[] = "'treasury_account' length must be <= 44";
        }
        if ((mb_strlen($this->_data['treasury_account']) < 44)) {
            $ip[] = "'treasury_account' length must be >= 44";
        }
        if (is_null($this->_data['authority'])) {
            $ip[] = "'authority' can't be null";
        }
        if ((mb_strlen($this->_data['authority']) > 44)) {
            $ip[] = "'authority' length must be <= 44";
        }
        if ((mb_strlen($this->_data['authority']) < 44)) {
            $ip[] = "'authority' length must be >= 44";
        }
        if (is_null($this->_data['creator'])) {
            $ip[] = "'creator' can't be null";
        }
        if ((mb_strlen($this->_data['creator']) > 44)) {
            $ip[] = "'creator' length must be <= 44";
        }
        if ((mb_strlen($this->_data['creator']) < 44)) {
            $ip[] = "'creator' length must be >= 44";
        }
        if (is_null($this->_data['marketplace_fee'])) {
            $ip[] = "'marketplace_fee' can't be null";
        }
        if (($this->_data['marketplace_fee'] > 10000)) {
            $ip[] = "'marketplace_fee' must be <= 10000";
        }
        if (($this->_data['marketplace_fee'] < 0)) {
            $ip[] = "'marketplace_fee' must be >= 0";
        }
        if (is_null($this->_data['treasury_mint'])) {
            $ip[] = "'treasury_mint' can't be null";
        }
        if ((mb_strlen($this->_data['treasury_mint']) > 44)) {
            $ip[] = "'treasury_mint' length must be <= 44";
        }
        if ((mb_strlen($this->_data['treasury_mint']) < 43)) {
            $ip[] = "'treasury_mint' length must be >= 43";
        }
        if (is_null($this->_data['treasury_withdrawal_destination'])) {
            $ip[] = "'treasury_withdrawal_destination' can't be null";
        }
        if ((mb_strlen($this->_data['treasury_withdrawal_destination']) > 44)) {
            $ip[] = "'treasury_withdrawal_destination' length must be <= 44";
        }
        if ((mb_strlen($this->_data['treasury_withdrawal_destination']) < 43)) {
            $ip[] = "'treasury_withdrawal_destination' length must be >= 43";
        }
        if (is_null($this->_data['fee_withdrawal_destination'])) {
            $ip[] = "'fee_withdrawal_destination' can't be null";
        }
        if ((mb_strlen($this->_data['fee_withdrawal_destination']) > 44)) {
            $ip[] = "'fee_withdrawal_destination' length must be <= 44";
        }
        if ((mb_strlen($this->_data['fee_withdrawal_destination']) < 43)) {
            $ip[] = "'fee_withdrawal_destination' length must be >= 43";
        }
        if (is_null($this->_data['requires_sign_off'])) {
            $ip[] = "'requires_sign_off' can't be null";
        }
        if (is_null($this->_data['can_change_sale_price'])) {
            $ip[] = "'can_change_sale_price' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get fee_account
     *
     * @return string
     */
    public function getFeeAccount(): string {
        return $this->_data["fee_account"];
    }

    /**
     * Set fee_account
     * 
     * @param string $fee_account Fee Account Address
     * @return $this
     */
    public function setFeeAccount(string $fee_account) {
        if ((mb_strlen($fee_account) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setFeeAccount: $fee_account length must be <= 44');
        }
        if ((mb_strlen($fee_account) < 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setFeeAccount: $fee_account length must be >= 44');
        }
        $this->_data['fee_account'] = $fee_account;

        return $this;
    }

    /**
     * Get treasury_account
     *
     * @return string
     */
    public function getTreasuryAccount(): string {
        return $this->_data["treasury_account"];
    }

    /**
     * Set treasury_account
     * 
     * @param string $treasury_account Treasury Account Address
     * @return $this
     */
    public function setTreasuryAccount(string $treasury_account) {
        if ((mb_strlen($treasury_account) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryAccount: $treasury_account length must be <= 44');
        }
        if ((mb_strlen($treasury_account) < 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryAccount: $treasury_account length must be >= 44');
        }
        $this->_data['treasury_account'] = $treasury_account;

        return $this;
    }

    /**
     * Get authority
     *
     * @return string
     */
    public function getAuthority(): string {
        return $this->_data["authority"];
    }

    /**
     * Set authority
     * 
     * @param string $authority Authority Address
     * @return $this
     */
    public function setAuthority(string $authority) {
        if ((mb_strlen($authority) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setAuthority: $authority length must be <= 44');
        }
        if ((mb_strlen($authority) < 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setAuthority: $authority length must be >= 44');
        }
        $this->_data['authority'] = $authority;

        return $this;
    }

    /**
     * Get creator
     *
     * @return string
     */
    public function getCreator(): string {
        return $this->_data["creator"];
    }

    /**
     * Set creator
     * 
     * @param string $creator Creator Address
     * @return $this
     */
    public function setCreator(string $creator) {
        if ((mb_strlen($creator) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setCreator: $creator length must be <= 44');
        }
        if ((mb_strlen($creator) < 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setCreator: $creator length must be >= 44');
        }
        $this->_data['creator'] = $creator;

        return $this;
    }

    /**
     * Get marketplace_fee
     *
     * @return float
     */
    public function getMarketplaceFee(): float {
        return $this->_data["marketplace_fee"];
    }

    /**
     * Set marketplace_fee
     * 
     * @param float $marketplace_fee The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.
     * @return $this
     */
    public function setMarketplaceFee(float $marketplace_fee) {
        if (($marketplace_fee > 10000)) {
            throw new IAE('GetMarketplaceInfo200Response.setMarketplaceFee: $marketplace_fee must be <=10000');
        }
        if (($marketplace_fee < 0)) {
            throw new IAE('GetMarketplaceInfo200Response.setMarketplaceFee: $marketplace_fee must be >=0');
        }
        $this->_data['marketplace_fee'] = $marketplace_fee;

        return $this;
    }

    /**
     * Get treasury_mint
     *
     * @return string
     */
    public function getTreasuryMint(): string {
        return $this->_data["treasury_mint"];
    }

    /**
     * Set treasury_mint
     * 
     * @param string $treasury_mint Address of a SPL token contract
     * @return $this
     */
    public function setTreasuryMint(string $treasury_mint) {
        if ((mb_strlen($treasury_mint) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryMint: $treasury_mint length must be <= 44');
        }
        if ((mb_strlen($treasury_mint) < 43)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryMint: $treasury_mint length must be >= 43');
        }
        $this->_data['treasury_mint'] = $treasury_mint;

        return $this;
    }

    /**
     * Get treasury_withdrawal_destination
     *
     * @return string
     */
    public function getTreasuryWithdrawalDestination(): string {
        return $this->_data["treasury_withdrawal_destination"];
    }

    /**
     * Set treasury_withdrawal_destination
     * 
     * @param string $treasury_withdrawal_destination The address that will be able to withdraw funds from the marketplace treasury account to own address
     * @return $this
     */
    public function setTreasuryWithdrawalDestination(string $treasury_withdrawal_destination) {
        if ((mb_strlen($treasury_withdrawal_destination) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryWithdrawalDestination: $treasury_withdrawal_destination length must be <= 44');
        }
        if ((mb_strlen($treasury_withdrawal_destination) < 43)) {
            throw new IAE('GetMarketplaceInfo200Response.setTreasuryWithdrawalDestination: $treasury_withdrawal_destination length must be >= 43');
        }
        $this->_data['treasury_withdrawal_destination'] = $treasury_withdrawal_destination;

        return $this;
    }

    /**
     * Get fee_withdrawal_destination
     *
     * @return string
     */
    public function getFeeWithdrawalDestination(): string {
        return $this->_data["fee_withdrawal_destination"];
    }

    /**
     * Set fee_withdrawal_destination
     * 
     * @param string $fee_withdrawal_destination The address that will be able to withdraw funds from the marketplace fee account to own address
     * @return $this
     */
    public function setFeeWithdrawalDestination(string $fee_withdrawal_destination) {
        if ((mb_strlen($fee_withdrawal_destination) > 44)) {
            throw new IAE('GetMarketplaceInfo200Response.setFeeWithdrawalDestination: $fee_withdrawal_destination length must be <= 44');
        }
        if ((mb_strlen($fee_withdrawal_destination) < 43)) {
            throw new IAE('GetMarketplaceInfo200Response.setFeeWithdrawalDestination: $fee_withdrawal_destination length must be >= 43');
        }
        $this->_data['fee_withdrawal_destination'] = $fee_withdrawal_destination;

        return $this;
    }

    /**
     * Get requires_sign_off
     *
     * @return bool
     */
    public function getRequiresSignOff(): bool {
        return $this->_data["requires_sign_off"];
    }

    /**
     * Set requires_sign_off
     * 
     * @param bool $requires_sign_off If set to \"true\", the marketplace must sign all operations related to the listings and sales.
     * @return $this
     */
    public function setRequiresSignOff(bool $requires_sign_off) {
        $this->_data['requires_sign_off'] = $requires_sign_off;

        return $this;
    }

    /**
     * Get can_change_sale_price
     *
     * @return bool
     */
    public function getCanChangeSalePrice(): bool {
        return $this->_data["can_change_sale_price"];
    }

    /**
     * Set can_change_sale_price
     * 
     * @param bool $can_change_sale_price If set to \"true\", the marketplace can change the sale price that the seller intentionally set to 0.
     * @return $this
     */
    public function setCanChangeSalePrice(bool $can_change_sale_price) {
        $this->_data['can_change_sale_price'] = $can_change_sale_price;

        return $this;
    }
}
