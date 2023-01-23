<?php

/**
 * Implementation of Celo API
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
 * Celo API
 */
class CeloApi extends AbstractApi {
    /**
     * Invoke a method in a smart contract on Celo
     *
     * @param \Tatum\Model\CallCeloReadSmartContractMethod $call_celo_read_smart_contract_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callCeloReadSmartContractMethod($call_celo_read_smart_contract_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/smartcontract";
        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $call_celo_read_smart_contract_method
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Celo
     *
     * @param \Tatum\Model\CallCeloSmartContractMethod $call_celo_smart_contract_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callCeloSmartContractMethod($call_celo_smart_contract_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/smartcontract";
        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $call_celo_smart_contract_method
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Celo
     *
     * @param \Tatum\Model\CallCeloSmartContractMethodKMS $call_celo_smart_contract_method_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callCeloSmartContractMethodKMS($call_celo_smart_contract_method_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/smartcontract";
        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $call_celo_smart_contract_method_kms
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed Celo transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function celoBroadcast($broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/broadcast";
        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Celo account address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloGenerateAddress200Response
     */
    public function celoGenerateAddress($xpub, $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/address/{xpub}/{index}";
        /** @var \Tatum\Model\CeloGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["xpub" => $xpub, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\CeloGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Celo private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function celoGenerateAddressPrivateKey($priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/wallet/priv";
        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Celo wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function celoGenerateWallet($mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling CeloApi.celoGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/wallet";
        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get Celo Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloGetBalance200Response
     */
    public function celoGetBalance($address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/account/balance/{address}";
        /** @var \Tatum\Model\CeloGetBalance200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\CeloGetBalance200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Celo block by hash
     *
     * @param string $hash Block hash or block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloBlock
     */
    public function celoGetBlock($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/block/{hash}";
        /** @var \Tatum\Model\CeloBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\CeloBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function celoGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/block/current";
        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Celo Transaction
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloTx
     */
    public function celoGetTransaction($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/transaction/{hash}";
        /** @var \Tatum\Model\CeloTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\CeloTx"
        );
            
        return $result;
    }
    
    /**
     * Get Celo transactions by address
     *
     * @param string $address Account address you want to get balance of
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param float|null $from Transactions from this block onwards will be included.
     * @param float|null $to Transactions up to this block will be included.
     * @param string|'DESC' $sort Sorting of the data. ASC - oldest first, DESC - newest first.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloTx[]
     */
    public function celoGetTransactionByAddress($address, $page_size, $offset = null, $from = null, $to = null, $sort = 'DESC') {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling CeloApi.celoGetTransactionByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling CeloApi.celoGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        if (isset($from) && $from < 0) {
            throw new IAE('Invalid value for "$from" when calling CeloApi.celoGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        if (isset($to) && $to < 0) {
            throw new IAE('Invalid value for "$to" when calling CeloApi.celoGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/account/transaction/{address}";
        /** @var \Tatum\Model\CeloTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "from" => isset($from) ? S::toQueryValue($from) : null,
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                    "sort" => S::toQueryValue($sort),
                ], $rHeaders, []
            ), 
            "\Tatum\Model\CeloTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing Celo transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function celoGetTransactionCount($address) {
        if (strlen($address) > 42) {
            throw new IAE('Invalid length for "$address" when calling CeloApi.celoGetTransactionCount, must be smaller than or equal to 42');
        }

        if (strlen($address) < 42) {
            throw new IAE('Invalid length for "$address" when calling CeloApi.celoGetTransactionCount, must be bigger than or equal to 42');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/celo/transaction/count/{address}";
        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Send Celo / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferCeloBlockchain $transfer_celo_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferCeloBlockchain($transfer_celo_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_celo_blockchain
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send Celo / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferCeloBlockchainKMS $transfer_celo_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferCeloBlockchainKMS($transfer_celo_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $transfer_celo_blockchain_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
}
