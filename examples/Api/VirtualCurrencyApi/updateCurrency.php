<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualCurrencyApi.md#updatecurrency
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_virtual_currency_update = (new \Tatum\Model\VirtualCurrencyUpdate())
    
    // Virtual currency name, which will be updated. It is not possible to update the name of the virtual currency.
    ->setName('VC_VIRTUAL')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
    ->setBaseRate(1)
    
    // (optional) Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC.
    ->setBasePair('EUR');

try {
    $sdk->mainnet()
        ->api()
        ->virtualCurrency()
        ->updateCurrency($arg_virtual_currency_update);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualCurrency()->updateCurrency(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualCurrency()->updateCurrency(): " . $exc->getMessage() . PHP_EOL;
}