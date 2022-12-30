<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Cardano#operation/AdaGetBlockChainInfo
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagetblockchaininfo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\AdaInfo $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetBlockChainInfo();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->cardano()->adaGetBlockChainInfo(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->cardano()->adaGetBlockChainInfo(): " . $exc->getMessage() . PHP_EOL;
}