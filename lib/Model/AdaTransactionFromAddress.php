<?php

/**
 * AdaTransactionFromAddress Model
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
 * AdaTransactionFromAddress Model
 */
class AdaTransactionFromAddress extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransactionFromAddress";
    protected static $_definition = [
        "from_address" => ["fromAddress", "\Tatum\Model\AdaTransactionFromAddressFromAddressInner[]", null, "getFromAddress", "setFromAddress"], 
        "to" => ["to", "\Tatum\Model\AdaTransactionFromAddressToInner[]", null, "getTo", "setTo"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress"]
    ];

    /**
     * AdaTransactionFromAddress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_address"=>null, "to"=>null, "fee"=>null, "change_address"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_address'])) {
            $ip[] = "'from_address' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from_address
     *
     * @return \Tatum\Model\AdaTransactionFromAddressFromAddressInner[]
     */
    public function getFromAddress(): array {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param \Tatum\Model\AdaTransactionFromAddressFromAddressInner[] $from_address The array of blockchain addresses to send the assets from and their private keys. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction.
     * @return $this
     */
    public function setFromAddress(array $from_address) {
        $this->_data['from_address'] = $from_address;

        return $this;
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\AdaTransactionFromAddressToInner[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\AdaTransactionFromAddressToInner[] $to The array of blockchain addresses to send the assets to and the amounts that each address should receive (in ADA). The difference between the UTXOs calculated in the <code>fromAddress</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
     * @return $this
     */
    public function setTo(array $to) {
        $this->_data['to'] = $to;

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
     * @param string|null $fee The fee to be paid for the transaction (in ADA); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together.
     * @return $this
     */
    public function setFee(?string $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get change_address
     *
     * @return string|null
     */
    public function getChangeAddress(): ?string {
        return $this->_data["change_address"];
    }

    /**
     * Set change_address
     * 
     * @param string|null $change_address The blockchain address to send any extra assets remaning after covering the fee to; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
     * @return $this
     */
    public function setChangeAddress(?string $change_address) {
        $this->_data['change_address'] = $change_address;

        return $this;
    }
}
