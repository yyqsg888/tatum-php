<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#burnnftflowmnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_burn_nft_flow_mnemonic = (new \Tatum\Model\BurnNftFlowMnemonic())
    
    // The blockchain to work with
    ->setChain('FLOW')
    
    // ID of token to be destroyed.
    ->setTokenId('123')
    
    // Address of NFT token
    ->setContractAddress('17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f')
    
    // Blockchain address of the sender account.
    ->setAccount('0xc1b45bc27b9c61c3')
    
    // Mnemonic to generate private key of sender address.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Derivation index of sender address.
    ->setIndex(0);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->burnNftFlowMnemonic($arg_burn_nft_flow_mnemonic, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->burnNftFlowMnemonic(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->burnNftFlowMnemonic(): " . $exc->getMessage() . PHP_EOL;
}