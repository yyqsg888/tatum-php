<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#createtrade
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_trade = (new \Tatum\Model\CreateTrade())
    
    // Type of the regular trade, BUY, SELL
    ->setType('BUY')
    
    // Price to buy / sell
    ->setPrice('8650.4')
    
    // Amount of the trade to be bought / sold
    ->setAmount('15000')
    
    // Trading pair
    ->setPair('BTC/EUR')
    
    // ID of the account of the currency 1 trade currency
    ->setCurrency1AccountId('7c21ed165e294db78b95f0f1')
    
    // ID of the account of the currency 2 trade currency
    ->setCurrency2AccountId('7c21ed165e294db78b95f0f1')
    
    // (optional) ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId.
    ->setFeeAccountId('7c21ed165e294db78b95f0f1')
    
    // (optional) Percentage of the trade amount to be paid as a fee.
    ->setFee(1.5);

try {
    /** @var \Tatum\Model\Id $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->createTrade($arg_create_trade);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->createTrade(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->createTrade(): " . $exc->getMessage() . PHP_EOL;
}