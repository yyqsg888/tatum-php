<?php

/**
 * Implementation of Solana API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException;
use Tatum\Sdk\ApiException;
use Tatum\Sdk\ObjectSerializer;

/**
 * Solana API
 */
class SolanaApi extends AbstractApi {
    /**
     * Send SOL from account to account
     *
     * @param \Tatum\Model\SolanaBlockchainTransferRequest $solana_blockchain_transfer_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function solanaBlockchainTransfer(\Tatum\Model\SolanaBlockchainTransferRequest $solana_blockchain_transfer_request) { 
        // Resource path
        $resourcePath = "/v3/solana/transaction";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\BtcTransferBlockchain200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $solana_blockchain_transfer_request
                ),
                "\Tatum\Model\BtcTransferBlockchain200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\BtcTransferBlockchain200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Broadcast and confirm signed Solana transaction
     *
     * @param \Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaTransactionHashWithConfirm
     */
    public function solanaBroadcastConfirm(\Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm) { 
        // Resource path
        $resourcePath = "/v3/solana/broadcast/confirm";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SolanaTransactionHashWithConfirm $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $solana_broadcast_confirm
                ),
                "\Tatum\Model\SolanaTransactionHashWithConfirm"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SolanaTransactionHashWithConfirm",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Generate Solana wallet
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaWallet
     */
    public function solanaGenerateWallet() { 
        // Resource path
        $resourcePath = "/v3/solana/wallet";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SolanaWallet $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\SolanaWallet"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SolanaWallet",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get Solana Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SolBalance
     */
    public function solanaGetBalance(string $address) { 
        // Resource path
        $resourcePath = "/v3/solana/account/balance/{address}";
        $resourcePath = str_replace("{" . "address" . "}", ObjectSerializer::toPathValue($address), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SolBalance $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\SolBalance"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SolBalance",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get Solana block by number
     *
     * @param float $height Block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaBlock
     */
    public function solanaGetBlock(float $height) { 
        // Resource path
        $resourcePath = "/v3/solana/block/{height}";
        $resourcePath = str_replace("{" . "height" . "}", ObjectSerializer::toPathValue($height), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SolanaBlock $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\SolanaBlock"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SolanaBlock",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return float
     */
    public function solanaGetCurrentBlock() { 
        // Resource path
        $resourcePath = "/v3/solana/block/current";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var float $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "float"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "float",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get Solana Transaction
     *
     * @param string $hash Transaction hash
     * @param string|null $commitment Commitment of the transaction. If not defined, all transactions are being scanned.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaTx
     */
    public function solanaGetTransaction(string $hash, string $commitment = null) { 
        // Resource path
        $resourcePath = "/v3/solana/transaction/{hash}";
        $resourcePath = str_replace("{" . "hash" . "}", ObjectSerializer::toPathValue($hash), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "commitment" => isset($commitment) ? ObjectSerializer::toQueryValue($commitment) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\SolanaTx $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\SolanaTx"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\SolanaTx",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * JSON RPC HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return object
     */
    public function solanaWeb3Driver(string $x_api_key, object $body) { 
        // Resource path
        $resourcePath = "/v3/solana/web3/{xApiKey}";
        $resourcePath = str_replace("{" . "xApiKey" . "}", ObjectSerializer::toPathValue($x_api_key), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var object $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $body
                ),
                "object"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "object",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}