<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#transfernft
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_nft = (new \Tatum\Model\TransferNft())
    
    // (optional) If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token.
    ->setValue('1')
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // Blockchain address to send NFT token to
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // ID of the token.
    ->setTokenId('123')
    
    // Address of NFT token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) True if the contract is provenance type
    ->setProvenance(true)
    
    // (optional) data you want to store with transaction, optional and valid only if provenance contract
    ->setProvenanceData('test')
    
    // (optional) current price of the token, valid only for provenance
    ->setTokenPrice('1')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->transferNft($arg_transfer_nft, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->transferNft(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->transferNft(): " . $exc->getMessage() . PHP_EOL;
}