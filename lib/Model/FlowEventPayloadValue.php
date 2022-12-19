<?php

/**
 * FlowEvent_payload_value Model
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
 * FlowEvent_payload_value Model
 */
class FlowEventPayloadValue extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowEvent_payload_value";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "fields" => ["fields", "\Tatum\Model\FlowEventPayloadValueFieldsInner[]", null, "getFields", "setFields"]
    ];

    /**
     * FlowEventPayloadValue
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "fields"=>null] as $k => $v) {
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
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id Event type
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get fields
     *
     * @return \Tatum\Model\FlowEventPayloadValueFieldsInner[]|null
     */
    public function getFields(): ?array {
        return $this->_data["fields"];
    }

    /**
     * Set fields
     * 
     * @param \Tatum\Model\FlowEventPayloadValueFieldsInner[]|null $fields fields
     * @return $this
     */
    public function setFields(?array $fields) {
        $this->_data['fields'] = $fields;

        return $this;
    }
}
