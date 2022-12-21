<?php

/**
 * Implementation of Withdrawal API
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
 * Withdrawal API
 */
class WithdrawalApi extends AbstractApi {
    /**
     * Broadcast signed transaction and complete withdrawal
     *
     * @param \Tatum\Model\BroadcastWithdrawal $broadcast_withdrawal 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\BroadcastResponse
     */
    public function broadcastBlockchainTransaction(\Tatum\Model\BroadcastWithdrawal $broadcast_withdrawal) { 
        // Resource path
        $resourcePath = "/v3/offchain/withdrawal/broadcast";

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
            /** @var \Tatum\Model\BroadcastResponse $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $broadcast_withdrawal
                ),
                "\Tatum\Model\BroadcastResponse"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\BroadcastResponse",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Cancel withdrawal
     *
     * @param string $id ID of created withdrawal
     * @param bool|true $revert Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum based currencies when gas was consumed but transaction was reverted.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function cancelInProgressWithdrawal(string $id, bool $revert = true) { 
        if (strlen($id) > 24) {
            throw new InvalidArgumentException('Invalid length for "$id" when calling WithdrawalApi.cancelInProgressWithdrawal, must be smaller than or equal to 24');
        }
        if (strlen($id) < 24) {
            throw new InvalidArgumentException('Invalid length for "$id" when calling WithdrawalApi.cancelInProgressWithdrawal, must be bigger than or equal to 24');
        }

        // Resource path
        $resourcePath = "/v3/offchain/withdrawal/{id}";
        $resourcePath = str_replace("{" . "id" . "}", ObjectSerializer::toPathValue($id), $resourcePath);

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
                "revert" => ObjectSerializer::toQueryValue($revert),
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "DELETE",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                ""
            );
        } catch (ApiException $e) {
            throw $e;
        }
        
    }
    
    /**
     * Complete withdrawal
     *
     * @param string $id ID of created withdrawal
     * @param string $tx_id Blockchain transaction ID of created withdrawal
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function completeWithdrawal(string $id, string $tx_id) { 
        if (strlen($id) > 50) {
            throw new InvalidArgumentException('Invalid length for "$id" when calling WithdrawalApi.completeWithdrawal, must be smaller than or equal to 50');
        }
        if (strlen($id) < 10) {
            throw new InvalidArgumentException('Invalid length for "$id" when calling WithdrawalApi.completeWithdrawal, must be bigger than or equal to 10');
        }

        if (strlen($tx_id) > 80) {
            throw new InvalidArgumentException('Invalid length for "$tx_id" when calling WithdrawalApi.completeWithdrawal, must be smaller than or equal to 80');
        }
        if (strlen($tx_id) < 10) {
            throw new InvalidArgumentException('Invalid length for "$tx_id" when calling WithdrawalApi.completeWithdrawal, must be bigger than or equal to 10');
        }

        // Resource path
        $resourcePath = "/v3/offchain/withdrawal/{id}/{txId}";
        $resourcePath = str_replace("{" . "id" . "}", ObjectSerializer::toPathValue($id), $resourcePath);
        $resourcePath = str_replace("{" . "txId" . "}", ObjectSerializer::toPathValue($tx_id), $resourcePath);

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
            $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "PUT",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                ""
            );
        } catch (ApiException $e) {
            throw $e;
        }
        
    }
    
    /**
     * Get withdrawals
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $currency Currency of the withdrawal
     * @param string|null $status Status of the withdrawal
     * @param float|null $offset Offset to obtain next page of the data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\WithdrawalObject[]
     */
    public function getWithdrawals(float $page_size, string $currency = null, string $status = null, float $offset = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling WithdrawalApi.getWithdrawals, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling WithdrawalApi.getWithdrawals, must be bigger than or equal to 1.');
        }

        if (isset($currency) && strlen($currency) > 30) {
            throw new InvalidArgumentException('Invalid length for "$currency" when calling WithdrawalApi.getWithdrawals, must be smaller than or equal to 30');
        }
        if (isset($currency) && strlen($currency) < 2) {
            throw new InvalidArgumentException('Invalid length for "$currency" when calling WithdrawalApi.getWithdrawals, must be bigger than or equal to 2');
        }

        // Resource path
        $resourcePath = "/v3/offchain/withdrawal";

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
                "currency" => isset($currency) ? ObjectSerializer::toQueryValue($currency) : null,
            
                "status" => isset($status) ? ObjectSerializer::toQueryValue($status) : null,
            
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\WithdrawalObject[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\WithdrawalObject[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\WithdrawalObject[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Store withdrawal
     *
     * @param \Tatum\Model\Withdrawal $withdrawal 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\WithdrawalResponse
     */
    public function storeWithdrawal(\Tatum\Model\Withdrawal $withdrawal) { 
        // Resource path
        $resourcePath = "/v3/offchain/withdrawal";

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
            /** @var \Tatum\Model\WithdrawalResponse $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $withdrawal
                ),
                "\Tatum\Model\WithdrawalResponse"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\WithdrawalResponse",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}