<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Elrond#operation/EgldGenerateWallet
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ElrondApi.md#egldgeneratewallet
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generation of private key.
$arg_mnemonic = 'mnemonic_example';

try {
    /** @var \Tatum\Model\EgldGenerateWallet200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGenerateWallet($arg_mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->elrond()->egldGenerateWallet(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->elrond()->egldGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}