<?php

/**
 * Address Model
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
 * Address Model
 */
class Address extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Address";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency"], 
        "derivation_key" => ["derivationKey", "int", 'int32', "getDerivationKey", "setDerivationKey"], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub"], 
        "destination_tag" => ["destinationTag", "float", null, "getDestinationTag", "setDestinationTag"], 
        "memo" => ["memo", "string", null, "getMemo", "setMemo"], 
        "message" => ["message", "string", null, "getMessage", "setMessage"]
    ];

    /**
     * Address
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "currency"=>null, "derivation_key"=>null, "xpub"=>null, "destination_tag"=>null, "memo"=>null, "message"=>null] as $k => $v) {
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
        if (is_null($this->_data['currency'])) {
            $ip[] = "'currency' can't be null";
        }
        if (!is_null($this->_data['derivation_key']) && ($this->_data['derivation_key'] > 2147483647)) {
            $ip[] = "'derivation_key' must be <= 2147483647";
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
     * @param string $address Blockchain address.
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency of generated address. BTC, LTC, DOGE, BCH, ETH, XRP, XLM, BNB, TRX, ERC20, TRC20.
     * @return $this
     */
    public function setCurrency(string $currency) {
        $this->_data['currency'] = $currency;

        return $this;
    }

    /**
     * Get derivation_key
     *
     * @return int|null
     */
    public function getDerivationKey(): ?int {
        return $this->_data["derivation_key"];
    }

    /**
     * Set derivation_key
     * 
     * @param int|null $derivation_key Derivation key index for given address.
     * @return $this
     */
    public function setDerivationKey(?int $derivation_key) {
        if (!is_null($derivation_key) && ($derivation_key > 2147483647)) {
            throw new IAE('Address.setDerivationKey: $derivation_key must be <=2147483647');
        }
        $this->_data['derivation_key'] = $derivation_key;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string|null
     */
    public function getXpub(): ?string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string|null $xpub Extended public key to derive address from. In case of XRP, this is account address, since address is defined as DestinationTag, which is address field. In case of XLM, this is account address, since address is defined as message, which is address field.
     * @return $this
     */
    public function setXpub(?string $xpub) {
        $this->_data['xpub'] = $xpub;

        return $this;
    }

    /**
     * Get destination_tag
     *
     * @return float|null
     */
    public function getDestinationTag(): ?float {
        return $this->_data["destination_tag"];
    }

    /**
     * Set destination_tag
     * 
     * @param float|null $destination_tag In case of XRP, destinationTag is the distinguisher of the account.
     * @return $this
     */
    public function setDestinationTag(?float $destination_tag) {
        $this->_data['destination_tag'] = $destination_tag;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string|null
     */
    public function getMemo(): ?string {
        return $this->_data["memo"];
    }

    /**
     * Set memo
     * 
     * @param string|null $memo In case of BNB, message is the distinguisher of the account.
     * @return $this
     */
    public function setMemo(?string $memo) {
        $this->_data['memo'] = $memo;

        return $this;
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string|null $message In case of XLM, message is the distinguisher of the account.
     * @return $this
     */
    public function setMessage(?string $message) {
        $this->_data['message'] = $message;

        return $this;
    }
}
