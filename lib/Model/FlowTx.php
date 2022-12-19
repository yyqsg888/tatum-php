<?php

/**
 * FlowTx Model
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
 * FlowTx Model
 */
class FlowTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowTx";
    protected static $_definition = [
        "reference_block_id" => ["referenceBlockId", "string", null, "getReferenceBlockId", "setReferenceBlockId"], 
        "script" => ["script", "string", null, "getScript", "setScript"], 
        "args" => ["args", "\Tatum\Model\FlowTxArgsInner[]", null, "getArgs", "setArgs"], 
        "gas_limit" => ["gasLimit", "float", null, "getGasLimit", "setGasLimit"], 
        "proposal_key" => ["proposalKey", "\Tatum\Model\FlowTxProposalKey", null, "getProposalKey", "setProposalKey"], 
        "payer" => ["payer", "string", null, "getPayer", "setPayer"], 
        "payload_signatures" => ["payloadSignatures", "\Tatum\Model\FlowTxPayloadSignaturesInner[]", null, "getPayloadSignatures", "setPayloadSignatures"], 
        "envelope_signatures" => ["envelopeSignatures", "\Tatum\Model\FlowTxPayloadSignaturesInner[]", null, "getEnvelopeSignatures", "setEnvelopeSignatures"], 
        "status" => ["status", "float", null, "getStatus", "setStatus"], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode"], 
        "error_message" => ["errorMessage", "string", null, "getErrorMessage", "setErrorMessage"], 
        "events" => ["events", "\Tatum\Model\FlowTxEventsInner[]", null, "getEvents", "setEvents"]
    ];

    /**
     * FlowTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["reference_block_id"=>null, "script"=>null, "args"=>null, "gas_limit"=>null, "proposal_key"=>null, "payer"=>null, "payload_signatures"=>null, "envelope_signatures"=>null, "status"=>null, "status_code"=>null, "error_message"=>null, "events"=>null] as $k => $v) {
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
     * Get reference_block_id
     *
     * @return string|null
     */
    public function getReferenceBlockId(): ?string {
        return $this->_data["reference_block_id"];
    }

    /**
     * Set reference_block_id
     * 
     * @param string|null $reference_block_id Id of the block
     * @return $this
     */
    public function setReferenceBlockId(?string $reference_block_id) {
        $this->_data['reference_block_id'] = $reference_block_id;

        return $this;
    }

    /**
     * Get script
     *
     * @return string|null
     */
    public function getScript(): ?string {
        return $this->_data["script"];
    }

    /**
     * Set script
     * 
     * @param string|null $script Script to execute in the transaction
     * @return $this
     */
    public function setScript(?string $script) {
        $this->_data['script'] = $script;

        return $this;
    }

    /**
     * Get args
     *
     * @return \Tatum\Model\FlowTxArgsInner[]|null
     */
    public function getArgs(): ?array {
        return $this->_data["args"];
    }

    /**
     * Set args
     * 
     * @param \Tatum\Model\FlowTxArgsInner[]|null $args Args to the transaction
     * @return $this
     */
    public function setArgs(?array $args) {
        $this->_data['args'] = $args;

        return $this;
    }

    /**
     * Get gas_limit
     *
     * @return float|null
     */
    public function getGasLimit(): ?float {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param float|null $gas_limit Gas limit for the transaction
     * @return $this
     */
    public function setGasLimit(?float $gas_limit) {
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get proposal_key
     *
     * @return \Tatum\Model\FlowTxProposalKey|null
     */
    public function getProposalKey(): ?\Tatum\Model\FlowTxProposalKey {
        return $this->_data["proposal_key"];
    }

    /**
     * Set proposal_key
     * 
     * @param \Tatum\Model\FlowTxProposalKey|null $proposal_key proposal_key
     * @return $this
     */
    public function setProposalKey(?\Tatum\Model\FlowTxProposalKey $proposal_key) {
        $this->_data['proposal_key'] = $proposal_key;

        return $this;
    }

    /**
     * Get payer
     *
     * @return string|null
     */
    public function getPayer(): ?string {
        return $this->_data["payer"];
    }

    /**
     * Set payer
     * 
     * @param string|null $payer Address from which the assets and fees were debited
     * @return $this
     */
    public function setPayer(?string $payer) {
        $this->_data['payer'] = $payer;

        return $this;
    }

    /**
     * Get payload_signatures
     *
     * @return \Tatum\Model\FlowTxPayloadSignaturesInner[]|null
     */
    public function getPayloadSignatures(): ?array {
        return $this->_data["payload_signatures"];
    }

    /**
     * Set payload_signatures
     * 
     * @param \Tatum\Model\FlowTxPayloadSignaturesInner[]|null $payload_signatures Array of payload signatures.
     * @return $this
     */
    public function setPayloadSignatures(?array $payload_signatures) {
        $this->_data['payload_signatures'] = $payload_signatures;

        return $this;
    }

    /**
     * Get envelope_signatures
     *
     * @return \Tatum\Model\FlowTxPayloadSignaturesInner[]|null
     */
    public function getEnvelopeSignatures(): ?array {
        return $this->_data["envelope_signatures"];
    }

    /**
     * Set envelope_signatures
     * 
     * @param \Tatum\Model\FlowTxPayloadSignaturesInner[]|null $envelope_signatures Array of envelope signatures.
     * @return $this
     */
    public function setEnvelopeSignatures(?array $envelope_signatures) {
        $this->_data['envelope_signatures'] = $envelope_signatures;

        return $this;
    }

    /**
     * Get status
     *
     * @return float|null
     */
    public function getStatus(): ?float {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param float|null $status Status of the transaction
     * @return $this
     */
    public function setStatus(?float $status) {
        $this->_data['status'] = $status;

        return $this;
    }

    /**
     * Get status_code
     *
     * @return float|null
     */
    public function getStatusCode(): ?float {
        return $this->_data["status_code"];
    }

    /**
     * Set status_code
     * 
     * @param float|null $status_code Status cofe of the transaction
     * @return $this
     */
    public function setStatusCode(?float $status_code) {
        $this->_data['status_code'] = $status_code;

        return $this;
    }

    /**
     * Get error_message
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string {
        return $this->_data["error_message"];
    }

    /**
     * Set error_message
     * 
     * @param string|null $error_message error_message
     * @return $this
     */
    public function setErrorMessage(?string $error_message) {
        $this->_data['error_message'] = $error_message;

        return $this;
    }

    /**
     * Get events
     *
     * @return \Tatum\Model\FlowTxEventsInner[]|null
     */
    public function getEvents(): ?array {
        return $this->_data["events"];
    }

    /**
     * Set events
     * 
     * @param \Tatum\Model\FlowTxEventsInner[]|null $events events
     * @return $this
     */
    public function setEvents(?array $events) {
        $this->_data['events'] = $events;

        return $this;
    }
}
