<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ElrondApi.md#transferegldblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_egld_blockchain_kms = (new \Tatum\Model\TransferEgldBlockchainKMS())
    
    // Account address of the sender
    ->setFrom('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7')
    
    // Account address of the receiver or smart contract
    ->setTo('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6')
    
    // Value to be sent.
    ->setAmount('0')
    
    // (optional) 
    ->setFee(null)
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->elrond()
        ->transferEgldBlockchainKMS($arg_transfer_egld_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->elrond()->transferEgldBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->elrond()->transferEgldBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}