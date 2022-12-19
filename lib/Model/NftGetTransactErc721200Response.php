<?php

/**
 * NftGetTransactErc721_200_response Model
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
 * NftGetTransactErc721_200_response Model
 */
class NftGetTransactErc721200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftGetTransactErc721_200_response";
    protected static $_definition = [
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash"], 
        "status" => ["status", "float", null, "getStatus", "setStatus"], 
        "block_number" => ["blockNumber", "mixed", null, "getBlockNumber", "setBlockNumber"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "gas" => ["gas", "float", null, "getGas", "setGas"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"], 
        "transaction_hash" => ["transactionHash", "string", null, "getTransactionHash", "setTransactionHash"], 
        "input" => ["input", "string", null, "getInput", "setInput"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "transaction_index" => ["transactionIndex", "mixed", null, "getTransactionIndex", "setTransactionIndex"], 
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "gas_used" => ["gasUsed", "mixed", null, "getGasUsed", "setGasUsed"], 
        "cumulative_gas_used" => ["cumulativeGasUsed", "mixed", null, "getCumulativeGasUsed", "setCumulativeGasUsed"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "logs" => ["logs", "\Tatum\Model\EthTxLog[]", null, "getLogs", "setLogs"], 
        "reference_block_id" => ["referenceBlockId", "string", null, "getReferenceBlockId", "setReferenceBlockId"], 
        "script" => ["script", "string", null, "getScript", "setScript"], 
        "args" => ["args", "\Tatum\Model\FlowTxArgsInner[]", null, "getArgs", "setArgs"], 
        "gas_limit" => ["gasLimit", "float", null, "getGasLimit", "setGasLimit"], 
        "proposal_key" => ["proposalKey", "\Tatum\Model\FlowTxProposalKey", null, "getProposalKey", "setProposalKey"], 
        "payer" => ["payer", "string", null, "getPayer", "setPayer"], 
        "payload_signatures" => ["payloadSignatures", "\Tatum\Model\FlowTxPayloadSignaturesInner[]", null, "getPayloadSignatures", "setPayloadSignatures"], 
        "envelope_signatures" => ["envelopeSignatures", "\Tatum\Model\FlowTxPayloadSignaturesInner[]", null, "getEnvelopeSignatures", "setEnvelopeSignatures"], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode"], 
        "error_message" => ["errorMessage", "string", null, "getErrorMessage", "setErrorMessage"], 
        "events" => ["events", "\Tatum\Model\FlowTxEventsInner[]", null, "getEvents", "setEvents"]
    ];

    /**
     * NftGetTransactErc721200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["block_hash"=>null, "status"=>null, "block_number"=>null, "from"=>null, "gas"=>null, "gas_price"=>null, "transaction_hash"=>null, "input"=>null, "nonce"=>null, "to"=>null, "transaction_index"=>null, "value"=>null, "gas_used"=>null, "cumulative_gas_used"=>null, "contract_address"=>null, "logs"=>null, "reference_block_id"=>null, "script"=>null, "args"=>null, "gas_limit"=>null, "proposal_key"=>null, "payer"=>null, "payload_signatures"=>null, "envelope_signatures"=>null, "status_code"=>null, "error_message"=>null, "events"=>null] as $k => $v) {
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
     * Get block_hash
     *
     * @return string|null
     */
    public function getBlockHash(): ?string {
        return $this->_data["block_hash"];
    }

    /**
     * Set block_hash
     * 
     * @param string|null $block_hash Hash of the block where this transaction was in.
     * @return $this
     */
    public function setBlockHash(?string $block_hash) {
        $this->_data['block_hash'] = $block_hash;

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
     * Get block_number
     *
     * @return mixed|null
     */
    public function getBlockNumber(): ?mixed {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param mixed|null $block_number Block number where this transaction was in.
     * @return $this
     */
    public function setBlockNumber(?mixed $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string|null $from Address of the sender.
     * @return $this
     */
    public function setFrom(?string $from) {
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get gas
     *
     * @return float|null
     */
    public function getGas(): ?float {
        return $this->_data["gas"];
    }

    /**
     * Set gas
     * 
     * @param float|null $gas Gas provided by the sender.
     * @return $this
     */
    public function setGas(?float $gas) {
        $this->_data['gas'] = $gas;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string|null
     */
    public function getGasPrice(): ?string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string|null $gas_price Gas price provided by the sender in wei.
     * @return $this
     */
    public function setGasPrice(?string $gas_price) {
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Get transaction_hash
     *
     * @return string|null
     */
    public function getTransactionHash(): ?string {
        return $this->_data["transaction_hash"];
    }

    /**
     * Set transaction_hash
     * 
     * @param string|null $transaction_hash Hash of the transaction.
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash) {
        $this->_data['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Get input
     *
     * @return string|null
     */
    public function getInput(): ?string {
        return $this->_data["input"];
    }

    /**
     * Set input
     * 
     * @param string|null $input The data sent along with the transaction.
     * @return $this
     */
    public function setInput(?string $input) {
        $this->_data['input'] = $input;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The number of transactions made by the sender prior to this one.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string|null $to Address of the receiver. 'null' when its a contract creation transaction.
     * @return $this
     */
    public function setTo(?string $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get transaction_index
     *
     * @return mixed|null
     */
    public function getTransactionIndex(): ?mixed {
        return $this->_data["transaction_index"];
    }

    /**
     * Set transaction_index
     * 
     * @param mixed|null $transaction_index Integer of the transactions index position in the block.
     * @return $this
     */
    public function setTransactionIndex(?mixed $transaction_index) {
        $this->_data['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Value transferred in wei.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
    }

    /**
     * Get gas_used
     *
     * @return mixed|null
     */
    public function getGasUsed(): ?mixed {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param mixed|null $gas_used The amount of gas used by this specific transaction alone.
     * @return $this
     */
    public function setGasUsed(?mixed $gas_used) {
        $this->_data['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Get cumulative_gas_used
     *
     * @return mixed|null
     */
    public function getCumulativeGasUsed(): ?mixed {
        return $this->_data["cumulative_gas_used"];
    }

    /**
     * Set cumulative_gas_used
     * 
     * @param mixed|null $cumulative_gas_used The total amount of gas used when this transaction was executed in the block.
     * @return $this
     */
    public function setCumulativeGasUsed(?mixed $cumulative_gas_used) {
        $this->_data['cumulative_gas_used'] = $cumulative_gas_used;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address The contract address created, if the transaction was a contract creation, otherwise null.
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get logs
     *
     * @return \Tatum\Model\EthTxLog[]|null
     */
    public function getLogs(): ?array {
        return $this->_data["logs"];
    }

    /**
     * Set logs
     * 
     * @param \Tatum\Model\EthTxLog[]|null $logs Log events, that happened in this transaction.
     * @return $this
     */
    public function setLogs(?array $logs) {
        $this->_data['logs'] = $logs;

        return $this;
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
