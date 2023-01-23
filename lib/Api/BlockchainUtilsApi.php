<?php

/**
 * Implementation of BlockchainUtils API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * BlockchainUtils API
 */
class BlockchainUtilsApi extends AbstractApi {
    /**
     * Estimate the block height for a future point in time
     *
     * @param string $chain The blockchain to work with
     * @param string $date The date and time in the ISO 8601 standard format
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function getAuctionEstimatedTime($chain, $date) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/auction/time/{chain}/{date}";
        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain, "date" => $date]), $rPath, [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get the blockchain address of a smart contract by the deployment transaction ID
     *
     * @param string $chain The blockchain to work with
     * @param string $hash The ID (hash) of the deployment transaction
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SCGetContractAddress200Response
     */
    public function sCGetContractAddress($chain, $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/sc/address/{chain}/{hash}";
        /** @var \Tatum\Model\SCGetContractAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain, "hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\SCGetContractAddress200Response"
        );
            
        return $result;
    }
    
}
