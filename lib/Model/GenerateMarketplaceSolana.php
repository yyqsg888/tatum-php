<?php

/**
 * GenerateMarketplaceSolana Model
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
 * GenerateMarketplaceSolana Model
 */
class GenerateMarketplaceSolana extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "GenerateMarketplaceSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "marketplace_fee" => ["marketplaceFee", "float", null, "getMarketplaceFee", "setMarketplaceFee"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "treasury_mint" => ["treasuryMint", "string", null, "getTreasuryMint", "setTreasuryMint"], 
        "treasury_withdrawal_destination" => ["treasuryWithdrawalDestination", "string", null, "getTreasuryWithdrawalDestination", "setTreasuryWithdrawalDestination"], 
        "fee_withdrawal_destination" => ["feeWithdrawalDestination", "string", null, "getFeeWithdrawalDestination", "setFeeWithdrawalDestination"], 
        "requires_sign_off" => ["requiresSignOff", "bool", null, "getRequiresSignOff", "setRequiresSignOff"], 
        "can_change_sale_price" => ["canChangeSalePrice", "bool", null, "getCanChangeSalePrice", "setCanChangeSalePrice"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"]
    ];

    /**
     * GenerateMarketplaceSolana
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "marketplace_fee"=>null, "from"=>null, "treasury_mint"=>null, "treasury_withdrawal_destination"=>null, "fee_withdrawal_destination"=>null, "requires_sign_off"=>null, "can_change_sale_price"=>null, "from_private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 43)) {
            $ip[] = "'from' length must be >= 43";
        }
        if (!is_null($this->_data['treasury_mint']) && (mb_strlen($this->_data['treasury_mint']) > 44)) {
            $ip[] = "'treasury_mint' length must be <= 44";
        }
        if (!is_null($this->_data['treasury_mint']) && (mb_strlen($this->_data['treasury_mint']) < 43)) {
            $ip[] = "'treasury_mint' length must be >= 43";
        }
        if (!is_null($this->_data['treasury_withdrawal_destination']) && (mb_strlen($this->_data['treasury_withdrawal_destination']) > 44)) {
            $ip[] = "'treasury_withdrawal_destination' length must be <= 44";
        }
        if (!is_null($this->_data['treasury_withdrawal_destination']) && (mb_strlen($this->_data['treasury_withdrawal_destination']) < 43)) {
            $ip[] = "'treasury_withdrawal_destination' length must be >= 43";
        }
        if (!is_null($this->_data['fee_withdrawal_destination']) && (mb_strlen($this->_data['fee_withdrawal_destination']) > 44)) {
            $ip[] = "'fee_withdrawal_destination' length must be <= 44";
        }
        if (!is_null($this->_data['fee_withdrawal_destination']) && (mb_strlen($this->_data['fee_withdrawal_destination']) < 43)) {
            $ip[] = "'fee_withdrawal_destination' length must be >= 43";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 128)) {
            $ip[] = "'from_private_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 87)) {
            $ip[] = "'from_private_key' length must be >= 87";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateMarketplaceSolana.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
            throw new IAE('GenerateMarketplaceSolana.setMarketplaceFee: $marketplace_fee must be <=10000');
        }
        if (($marketplace_fee < 0)) {
            throw new IAE('GenerateMarketplaceSolana.setMarketplaceFee: $marketplace_fee must be >=0');
        }
        $this->_data['marketplace_fee'] = $marketplace_fee;

        return $this;
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
     * @param string $from The address that will be the owner of the marketplace
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('GenerateMarketplaceSolana.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 43)) {
            throw new IAE('GenerateMarketplaceSolana.setFrom: $from length must be >= 43');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get treasury_mint
     *
     * @return string|null
     */
    public function getTreasuryMint(): ?string {
        return $this->_data["treasury_mint"];
    }

    /**
     * Set treasury_mint
     * 
     * @param string|null $treasury_mint Address of a SPL token contract
     * @return $this
     */
    public function setTreasuryMint(?string $treasury_mint) {
        if (!is_null($treasury_mint) && (mb_strlen($treasury_mint) > 44)) {
            throw new IAE('GenerateMarketplaceSolana.setTreasuryMint: $treasury_mint length must be <= 44');
        }
        if (!is_null($treasury_mint) && (mb_strlen($treasury_mint) < 43)) {
            throw new IAE('GenerateMarketplaceSolana.setTreasuryMint: $treasury_mint length must be >= 43');
        }
        $this->_data['treasury_mint'] = $treasury_mint;

        return $this;
    }

    /**
     * Get treasury_withdrawal_destination
     *
     * @return string|null
     */
    public function getTreasuryWithdrawalDestination(): ?string {
        return $this->_data["treasury_withdrawal_destination"];
    }

    /**
     * Set treasury_withdrawal_destination
     * 
     * @param string|null $treasury_withdrawal_destination The address that will be able to withdraw funds from the marketplace treasury account to own address
     * @return $this
     */
    public function setTreasuryWithdrawalDestination(?string $treasury_withdrawal_destination) {
        if (!is_null($treasury_withdrawal_destination) && (mb_strlen($treasury_withdrawal_destination) > 44)) {
            throw new IAE('GenerateMarketplaceSolana.setTreasuryWithdrawalDestination: $treasury_withdrawal_destination length must be <= 44');
        }
        if (!is_null($treasury_withdrawal_destination) && (mb_strlen($treasury_withdrawal_destination) < 43)) {
            throw new IAE('GenerateMarketplaceSolana.setTreasuryWithdrawalDestination: $treasury_withdrawal_destination length must be >= 43');
        }
        $this->_data['treasury_withdrawal_destination'] = $treasury_withdrawal_destination;

        return $this;
    }

    /**
     * Get fee_withdrawal_destination
     *
     * @return string|null
     */
    public function getFeeWithdrawalDestination(): ?string {
        return $this->_data["fee_withdrawal_destination"];
    }

    /**
     * Set fee_withdrawal_destination
     * 
     * @param string|null $fee_withdrawal_destination The address that will be able to withdraw funds from the marketplace fee account to own address
     * @return $this
     */
    public function setFeeWithdrawalDestination(?string $fee_withdrawal_destination) {
        if (!is_null($fee_withdrawal_destination) && (mb_strlen($fee_withdrawal_destination) > 44)) {
            throw new IAE('GenerateMarketplaceSolana.setFeeWithdrawalDestination: $fee_withdrawal_destination length must be <= 44');
        }
        if (!is_null($fee_withdrawal_destination) && (mb_strlen($fee_withdrawal_destination) < 43)) {
            throw new IAE('GenerateMarketplaceSolana.setFeeWithdrawalDestination: $fee_withdrawal_destination length must be >= 43');
        }
        $this->_data['fee_withdrawal_destination'] = $fee_withdrawal_destination;

        return $this;
    }

    /**
     * Get requires_sign_off
     *
     * @return bool|null
     */
    public function getRequiresSignOff(): ?bool {
        return $this->_data["requires_sign_off"];
    }

    /**
     * Set requires_sign_off
     * 
     * @param bool|null $requires_sign_off Set to \"false\" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to \"true\" (the marketplace must sign all the operations)
     * @return $this
     */
    public function setRequiresSignOff(?bool $requires_sign_off) {
        $this->_data['requires_sign_off'] = $requires_sign_off;

        return $this;
    }

    /**
     * Get can_change_sale_price
     *
     * @return bool|null
     */
    public function getCanChangeSalePrice(): ?bool {
        return $this->_data["can_change_sale_price"];
    }

    /**
     * Set can_change_sale_price
     * 
     * @param bool|null $can_change_sale_price Set to \"true\" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to \"false\" (the marketplace cannot change the sale price)
     * @return $this
     */
    public function setCanChangeSalePrice(?bool $can_change_sale_price) {
        $this->_data['can_change_sale_price'] = $can_change_sale_price;

        return $this;
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
     * @param string $from_private_key The private key of the blockchain address from which the fee will be deducted
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 128)) {
            throw new IAE('GenerateMarketplaceSolana.setFromPrivateKey: $from_private_key length must be <= 128');
        }
        if ((mb_strlen($from_private_key) < 87)) {
            throw new IAE('GenerateMarketplaceSolana.setFromPrivateKey: $from_private_key length must be >= 87');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }
}
