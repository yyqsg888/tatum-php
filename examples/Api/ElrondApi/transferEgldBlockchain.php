<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Elrond#operation/TransferEgldBlockchain
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ElrondApi.md#transferegldblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_egld_blockchain = new \Tatum\Model\TransferEgldBlockchain();

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->transferEgldBlockchain($arg_transfer_egld_blockchain);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->elrond()->transferEgldBlockchain(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->elrond()->transferEgldBlockchain(): " . $exc->getMessage() . PHP_EOL;
}