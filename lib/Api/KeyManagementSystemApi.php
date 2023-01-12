<?php

/**
 * Implementation of KeyManagementSystem API
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
 * KeyManagementSystem API
 */
class KeyManagementSystemApi extends AbstractApi {
    /**
     * Complete pending transaction to sign
     *
     * @param string $id ID of pending transaction
     * @param string $tx_id transaction ID of blockchain transaction
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function completePendingSignature(string $id, string $tx_id) {
        if (strlen($id) > 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.completePendingSignature, must be smaller than or equal to 24');
        }

        if (strlen($id) < 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.completePendingSignature, must be bigger than or equal to 24');
        }

        if (strlen($tx_id) > 80) {
            throw new IAE('Invalid length for "$tx_id" when calling KeyManagementSystemApi.completePendingSignature, must be smaller than or equal to 80');
        }

        if (strlen($tx_id) < 10) {
            throw new IAE('Invalid length for "$tx_id" when calling KeyManagementSystemApi.completePendingSignature, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/kms/{id}/{txId}", ["id" => $id, "txId" => $tx_id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Delete transaction
     *
     * @param string $id ID of transaction
     * @param bool|true $revert Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum ERC20 based currencies.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deletePendingTransactionToSign(string $id, bool $revert = true) {
        if (strlen($id) > 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.deletePendingTransactionToSign, must be smaller than or equal to 24');
        }

        if (strlen($id) < 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.deletePendingTransactionToSign, must be bigger than or equal to 24');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/kms/{id}", ["id" => $id]), [
                    "revert" => S::toQueryValue($revert),
                ], $rHeaders, []
            )
        );
    }
    
    /**
     * Get transaction details
     *
     * @param string $id ID of transaction
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PendingTransaction
     */
    public function getPendingTransactionToSign(string $id) {
        if (strlen($id) > 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.getPendingTransactionToSign, must be smaller than or equal to 24');
        }

        if (strlen($id) < 24) {
            throw new IAE('Invalid length for "$id" when calling KeyManagementSystemApi.getPendingTransactionToSign, must be bigger than or equal to 24');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\PendingTransaction $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kms/{id}", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\PendingTransaction"
        );
            
        return $result;
    }
    
    /**
     * Get pending transactions to sign
     *
     * @param string $chain Blockchain to get pending transactions for.
     * @param string|null $signatures Signature IDs of the KMS which invokes this endpoint. If multiple, they should be separated by comma.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PendingTransaction[]
     */
    public function getPendingTransactionsToSign(string $chain, string $signatures = null) {
        if (strlen($chain) > 24) {
            throw new IAE('Invalid length for "$chain" when calling KeyManagementSystemApi.getPendingTransactionsToSign, must be smaller than or equal to 24');
        }

        if (strlen($chain) < 24) {
            throw new IAE('Invalid length for "$chain" when calling KeyManagementSystemApi.getPendingTransactionsToSign, must be bigger than or equal to 24');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\PendingTransaction[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kms/pending/{chain}", ["chain" => $chain]), [
                    "signatures" => isset($signatures) ? S::toQueryValue($signatures) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\PendingTransaction[]"
        );
            
        return $result;
    }
    
    /**
     * Get pending transactions to sign
     *
     * @param string $chain Blockchain to get pending transactions for.
     * @param \Tatum\Model\KmsSignatureIds|null $kms_signature_ids Signature IDs of the KMS which invokes this endpoint.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PendingTransaction[]
     */
    public function receivePendingTransactionsToSign(string $chain, \Tatum\Model\KmsSignatureIds $kms_signature_ids = null) {
        if (strlen($chain) > 24) {
            throw new IAE('Invalid length for "$chain" when calling KeyManagementSystemApi.receivePendingTransactionsToSign, must be smaller than or equal to 24');
        }

        if (strlen($chain) < 24) {
            throw new IAE('Invalid length for "$chain" when calling KeyManagementSystemApi.receivePendingTransactionsToSign, must be bigger than or equal to 24');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PendingTransaction[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/kms/pending/{chain}", ["chain" => $chain]), [], $rHeaders, [], $kms_signature_ids
            ), 
            "\Tatum\Model\PendingTransaction[]"
        );
            
        return $result;
    }
    
}
