<?php

/**
 * CreateSubscriptionTradeMatch_attr Model
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
 * CreateSubscriptionTradeMatch_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionTradeMatchAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateSubscriptionTradeMatch_attr";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "url" => ["url", "string", null, "getUrl", "setUrl"]
    ];

    /**
     * CreateSubscriptionTradeMatchAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "url"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if ((mb_strlen($this->_data['id']) > 24)) {
            $ip[] = "'id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['id']) < 24)) {
            $ip[] = "'id' length must be >= 24";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if ((mb_strlen($this->_data['url']) > 500)) {
            $ip[] = "'url' length must be <= 500";
        }
        
        return $ip;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the customer, on which the webhook will be applied, when on any of his accounts trade will be matched and closed.
     * @return $this
     */
    public function setId(string $id) {
        if ((mb_strlen($id) > 24)) {
            throw new IAE('CreateSubscriptionTradeMatchAttr.setId: $id length must be <= 24');
        }
        if ((mb_strlen($id) < 24)) {
            throw new IAE('CreateSubscriptionTradeMatchAttr.setId: $id length must be >= 24');
        }
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url URL of the endpoint, where HTTP POST request will be sent, when on any of his accounts trade will be matched and closed.
     * @return $this
     */
    public function setUrl(string $url) {
        if ((mb_strlen($url) > 500)) {
            throw new IAE('CreateSubscriptionTradeMatchAttr.setUrl: $url length must be <= 500');
        }
        $this->_data['url'] = $url;

        return $this;
    }
}
