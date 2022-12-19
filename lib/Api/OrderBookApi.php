<?php

/**
 * Implementation of OrderBook API
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

namespace Tatum\Api;

use InvalidArgumentException;
use Tatum\Sdk\ApiException;
use Tatum\Sdk\ObjectSerializer;

/**
 * OrderBook API
 */
class OrderBookApi extends AbstractApi {
    /**
     * Obtain chart data from historical closed trades
     *
     * @param \Tatum\Model\ChartRequest $chart_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Chart[]
     */
    public function chartRequest(\Tatum\Model\ChartRequest $chart_request) { 
        // Resource path
        $resourcePath = "/v3/trade/chart";

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
            /** @var \Tatum\Model\Chart[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $chart_request
                ),
                "\Tatum\Model\Chart[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Chart[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Cancel all existing trades for account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function deleteAccountTrades(string $id) { 
        // Resource path
        $resourcePath = "/v3/trade/account/{id}";
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
        $queryParams = [];

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
     * Cancel existing trade
     *
     * @param string $id Trade ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function deleteTrade(string $id) { 
        // Resource path
        $resourcePath = "/v3/trade/{id}";
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
        $queryParams = [];

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
     * List all active buy trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, list current active buy trades for that account.
     * @param string|null $customer_id Customer ID. If present, list current active buy trades for that customer.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $pair Trade pair. If present, list current active buy trades for that pair.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string|null $trade_type Trade type.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getBuyTrades(float $page_size, string $id = null, string $customer_id = null, float $offset = null, string $pair = null, bool $count = null, string $trade_type = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getBuyTrades, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getBuyTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getBuyTrades, must be smaller than or equal to 30');
        }
        if (isset($pair) && strlen($pair) < 3) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getBuyTrades, must be bigger than or equal to 3');
        }
        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new InvalidArgumentException('Invalid value for "$pair" when calling OrderBookApi.getBuyTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        // Resource path
        $resourcePath = "/v3/trade/buy";

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
                "id" => isset($id) ? ObjectSerializer::toQueryValue($id) : null,
            
                "customerId" => isset($customer_id) ? ObjectSerializer::toQueryValue($customer_id) : null,
            
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "pair" => isset($pair) ? ObjectSerializer::toQueryValue($pair) : null,
            
                "count" => isset($count) ? ObjectSerializer::toQueryValue($count) : null,
            
                "tradeType" => isset($trade_type) ? ObjectSerializer::toQueryValue($trade_type) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all active buy trades
     *
     * @param \Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getBuyTradesBody(\Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body) { 
        // Resource path
        $resourcePath = "/v3/trade/buy";

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
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $list_oder_book_active_buy_body
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all historical trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, only closed trades for given account will be present.
     * @param string|null $pair Trade pair. If present, only closed trades on given trade pair will be present.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string[]|null $types Trade types.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getHistoricalTrades(float $page_size, string $id = null, string $pair = null, float $offset = null, bool $count = null, array $types = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getHistoricalTrades, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getHistoricalTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getHistoricalTrades, must be smaller than or equal to 30');
        }
        if (isset($pair) && strlen($pair) < 3) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getHistoricalTrades, must be bigger than or equal to 3');
        }
        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new InvalidArgumentException('Invalid value for "$pair" when calling OrderBookApi.getHistoricalTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        // Resource path
        $resourcePath = "/v3/trade/history";

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
                "id" => isset($id) ? ObjectSerializer::toQueryValue($id) : null,
            
                "pair" => isset($pair) ? ObjectSerializer::toQueryValue($pair) : null,
            
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "count" => isset($count) ? ObjectSerializer::toQueryValue($count) : null,
            
                "types" => isset($types) ? ObjectSerializer::serializeCollection($types, "multi") : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all historical trades
     *
     * @param \Tatum\Model\ListOderBookHistoryBody|null $list_oder_book_history_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getHistoricalTradesBody(\Tatum\Model\ListOderBookHistoryBody $list_oder_book_history_body = null) { 
        // Resource path
        $resourcePath = "/v3/trade/history";

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
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $list_oder_book_history_body
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all matched orders from FUTURE_SELL/FUTURE_BUY trades
     *
     * @param \Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getMatchedTrades(\Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body) { 
        // Resource path
        $resourcePath = "/v3/trade/matched";

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
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $list_oder_book_matched_body
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all active sell trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, list current active sell trades for that account.
     * @param string|null $customer_id Customer ID. If present, list current active buy trades for that customer.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $pair Trade pair. If present, list current active sell trades for that pair.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string|null $trade_type Trade type.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getSellTrades(float $page_size, string $id = null, string $customer_id = null, float $offset = null, string $pair = null, bool $count = null, string $trade_type = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getSellTrades, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling OrderBookApi.getSellTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getSellTrades, must be smaller than or equal to 30');
        }
        if (isset($pair) && strlen($pair) < 3) {
            throw new InvalidArgumentException('Invalid length for "$pair" when calling OrderBookApi.getSellTrades, must be bigger than or equal to 3');
        }
        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new InvalidArgumentException('Invalid value for "$pair" when calling OrderBookApi.getSellTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        // Resource path
        $resourcePath = "/v3/trade/sell";

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
                "id" => isset($id) ? ObjectSerializer::toQueryValue($id) : null,
            
                "customerId" => isset($customer_id) ? ObjectSerializer::toQueryValue($customer_id) : null,
            
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "pair" => isset($pair) ? ObjectSerializer::toQueryValue($pair) : null,
            
                "count" => isset($count) ? ObjectSerializer::toQueryValue($count) : null,
            
                "tradeType" => isset($trade_type) ? ObjectSerializer::toQueryValue($trade_type) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all active sell trades
     *
     * @param \Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getSellTradesBody(\Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body) { 
        // Resource path
        $resourcePath = "/v3/trade/sell";

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
            /** @var \Tatum\Model\Trade[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $list_oder_book_active_sell_body
                ),
                "\Tatum\Model\Trade[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get existing trade
     *
     * @param string $id Trade ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade
     */
    public function getTradeById(string $id) { 
        // Resource path
        $resourcePath = "/v3/trade/{id}";
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
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Trade $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\Trade"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Trade",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Store buy / sell trade
     *
     * @param \Tatum\Model\StoreTradeRequest $store_trade_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function storeTrade(\Tatum\Model\StoreTradeRequest $store_trade_request) { 
        // Resource path
        $resourcePath = "/v3/trade";

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
            /** @var \Tatum\Model\Id $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $store_trade_request
                ),
                "\Tatum\Model\Id"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Id",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}
