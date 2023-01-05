<?php

/**
 * Implementation of NodeRPC API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * NodeRPC API
 */
class NodeRPCApi extends AbstractApi {
    /**
     * Connect to the blockchain node through an RPC driver
     * 
     * @see   https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonPostRpcDriver
     *
     * @param string $chain Blockchain to communicate with.
     * @param object $body 
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @param string|'avax-c' $chain_type Type of Avalanche network. Defaults to Avalanche C-Chain.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonPostRpcDriver(string $chain, object $body, string $x_api_key = null, string $node_type = null, string $testnet_type = 'ethereum-sepolia', string $chain_type = 'avax-c', string $rpc_path = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}", ["xApiKey" => $x_api_key, "chain" => $chain, "rpcPath" => $rpc_path]), [
                    "nodeType" => isset($node_type) ? S::toQueryValue($node_type) : null,
                    "testnetType" => S::toQueryValue($testnet_type),
                    "chainType" => S::toQueryValue($chain_type),
                ], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
    /**
     * Connect to the blockchain node through an RPC driver
     * 
     * @see   https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonRpcGetDriver
     *
     * @param string $chain Blockchain to communicate with.
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonRpcGetDriver(string $chain, string $x_api_key = null, string $node_type = null, string $rpc_path = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}", ["xApiKey" => $x_api_key, "chain" => $chain, "rpcPath" => $rpc_path]), [
                    "nodeType" => isset($node_type) ? S::toQueryValue($node_type) : null,
                ], $rHeaders, []
            ), 
            "object"
        );
            
        return $result;
    }
    
    /**
     * Connect to the blockchain node through an RPC driver
     * 
     * @see   https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonRpcPutDriver
     *
     * @param string $chain Blockchain to communicate with.
     * @param object $body 
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonRpcPutDriver(string $chain, object $body, string $x_api_key = null, string $node_type = null, string $rpc_path = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}", ["xApiKey" => $x_api_key, "chain" => $chain, "rpcPath" => $rpc_path]), [
                    "nodeType" => isset($node_type) ? S::toQueryValue($node_type) : null,
                ], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
