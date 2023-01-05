<?php

/**
 * Implementation of IPFS API
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
 * IPFS API
 */
class IPFSApi extends AbstractApi {
    /**
     * Get file from IPFS
     * 
     * @see   https://apidoc.tatum.io/tag/IPFS/#operation/GetIPFSData
     *
     * @param string $id IPFS CID of the file
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \SplFileObject
     */
    public function getIPFSData(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["*", "application/json"], []);

        /** @var \SplFileObject $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ipfs/{id}", ["id" => $id]), [], $rHeaders, []
            ), 
            "\SplFileObject"
        );
            
        return $result;
    }
    
    /**
     * Store data to IPFS
     * 
     * @see   https://apidoc.tatum.io/tag/IPFS/#operation/StoreIPFS
     *
     * @param \SplFileObject|null $file Your file to store
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\StoreIPFS200Response
     */
    public function storeIPFS(\SplFileObject $file = null) {
        $rHeaders = $this->_headerSelector->selectHeadersForMultipart(["application/json"]);

        /** @var \Tatum\Model\StoreIPFS200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ipfs", [], $rHeaders, ["file" => S::fileToFormValue($file),]
            ), 
            "\Tatum\Model\StoreIPFS200Response"
        );
            
        return $result;
    }
    
}
