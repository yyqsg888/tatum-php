<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainStorageApi.md#createrecordkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_record_kms = (new \Tatum\Model\CreateRecordKMS())
    
    // The data to be stored on the blockchain
    ->setData('My example log data')
    
    // The blockchain to store the data on
    ->setChain('ETH')
    
    // Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Derivation index of sender address.
    ->setIndex(0)
    
    // (optional) The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made.
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainStorage()
        ->createRecordKMS($arg_create_record_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainStorage()->createRecordKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainStorage()->createRecordKMS(): " . $exc->getMessage() . PHP_EOL;
}