<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustomerApi.md#disablecustomer
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Customer internal ID
$arg_id = 'id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->disableCustomer($arg_id);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->customer()->disableCustomer(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->customer()->disableCustomer(): " . $exc->getMessage() . PHP_EOL;
}