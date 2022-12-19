<?php

/**
 * GasPumpTrxOut Model
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
 * GasPumpTrxOut Model
 */
class GasPumpTrxOut extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "GasPumpTrxOut";
    protected static $_definition = [
        "valid" => ["valid", "\Tatum\Model\ValidGasPumpAddress[]", null, "getValid", "setValid"], 
        "invalid" => ["invalid", "\Tatum\Model\InvalidGasPumpAddress[]", null, "getInvalid", "setInvalid"]
    ];

    /**
     * GasPumpTrxOut
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["valid"=>null, "invalid"=>null] as $k => $v) {
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
     * Get valid
     *
     * @return \Tatum\Model\ValidGasPumpAddress[]|null
     */
    public function getValid(): ?array {
        return $this->_data["valid"];
    }

    /**
     * Set valid
     * 
     * @param \Tatum\Model\ValidGasPumpAddress[]|null $valid Activated gas pump addresses
     * @return $this
     */
    public function setValid(?array $valid) {
        $this->_data['valid'] = $valid;

        return $this;
    }

    /**
     * Get invalid
     *
     * @return \Tatum\Model\InvalidGasPumpAddress[]|null
     */
    public function getInvalid(): ?array {
        return $this->_data["invalid"];
    }

    /**
     * Set invalid
     * 
     * @param \Tatum\Model\InvalidGasPumpAddress[]|null $invalid Not activated gas pump addresses
     * @return $this
     */
    public function setInvalid(?array $invalid) {
        $this->_data['invalid'] = $invalid;

        return $this;
    }
}
