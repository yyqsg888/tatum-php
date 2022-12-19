<?php

/**
 * WebHook_response Model
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
 * WebHook_response Model
 * 
 * @description Response from the server in case the webhook was unsuccessful
 */
class WebHookResponse extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "WebHook_response";
    protected static $_definition = [
        "code" => ["code", "float", null, "getCode", "setCode"], 
        "data" => ["data", "string", null, "getData", "setData"], 
        "network_error" => ["networkError", "bool", null, "getNetworkError", "setNetworkError"]
    ];

    /**
     * WebHookResponse
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["code"=>null, "data"=>null, "network_error"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['network_error'])) {
            $ip[] = "'network_error' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get code
     *
     * @return float|null
     */
    public function getCode(): ?float {
        return $this->_data["code"];
    }

    /**
     * Set code
     * 
     * @param float|null $code HTTP Status
     * @return $this
     */
    public function setCode(?float $code) {
        $this->_data['code'] = $code;

        return $this;
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Response from the server
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get network_error
     *
     * @return bool
     */
    public function getNetworkError(): bool {
        return $this->_data["network_error"];
    }

    /**
     * Set network_error
     * 
     * @param bool $network_error Flag indicating whether an error has been caused by the network
     * @return $this
     */
    public function setNetworkError(bool $network_error) {
        $this->_data['network_error'] = $network_error;

        return $this;
    }
}
