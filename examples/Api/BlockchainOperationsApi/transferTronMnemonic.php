<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transfertronmnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_tron_mnemonic = (new \Tatum\Model\TransferTronMnemonic())
    
    // Blockchain address to send assets
    ->setAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Amount to be sent in Tron.
    ->setAmount('100000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 2.5 TRX is used.
    ->setFee('2.5')
    
    // Derivation index of sender address.
    ->setIndex(0)
    
    // Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferTronMnemonic($arg_transfer_tron_mnemonic);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferTronMnemonic(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferTronMnemonic(): " . $exc->getMessage() . PHP_EOL;
}