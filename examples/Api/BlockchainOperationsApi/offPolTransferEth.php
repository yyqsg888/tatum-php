<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offpoltransfereth
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_eth = (new \Tatum\Model\TransferEth())
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // Blockchain address to send assets
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Amount to be sent in Ether / MATIC / XDC / KCS.
    ->setAmount('100000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub.
    ->setPrivateKey('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note')
    
    // (optional) Gas limit for transaction in gas price. If not set, automatic calculation will be used.
    ->setGasLimit('40000')
    
    // (optional) Gas price in Gwei. If not set, automatic calculation will be used.
    ->setGasPrice('20');

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offPolTransferEth($arg_transfer_eth);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offPolTransferEth(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offPolTransferEth(): " . $exc->getMessage() . PHP_EOL;
}