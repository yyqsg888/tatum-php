<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#transferxrpblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_blockchain = (new \Tatum\Model\TransferXrpBlockchain())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address to send assets
    ->setTo('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Amount to be sent, in XRP.
    ->setAmount('10000')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setFromSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000')
    
    // (optional) Source tag of sender account, if any.
    ->setSourceTag(12355)
    
    // (optional) Destination tag of recipient account, if any.
    ->setDestinationTag(12355);

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->transferXrpBlockchain($arg_transfer_xrp_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->transferXrpBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->transferXrpBlockchain(): " . $exc->getMessage() . PHP_EOL;
}