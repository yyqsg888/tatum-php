<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/UpdateFeeRecipient
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#updatefeerecipient
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_update_fee_recipient = new \Tatum\Model\UpdateFeeRecipient();

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->updateFeeRecipient($arg_update_fee_recipient);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->updateFeeRecipient(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->updateFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}