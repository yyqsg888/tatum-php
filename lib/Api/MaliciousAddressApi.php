<?php

/**
 * Implementation of MaliciousAddress API
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
 * MaliciousAddress API
 */
class MaliciousAddressApi extends AbstractApi {
    /**
     * Check malicous address
     *
     * @param string $address Blockchain Address to check
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CheckMalicousAddress200Response
     */
    public function checkMalicousAddress($address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/security/address/{address}";
        /** @var \Tatum\Model\CheckMalicousAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\CheckMalicousAddress200Response"
        );
            
        return $result;
    }
    
}
