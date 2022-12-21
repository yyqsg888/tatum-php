# Tatum/Api/ExchangeRateApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExchangeRate()**](#getexchangerate) | **GET** /v3/tatum/rate/{currency} | Get the current exchange rate for exchanging fiat/crypto assets


## `getExchangeRate()`

```php
api()->exchangeRate()->getExchangeRate(
    ?string $currency, 
    ?string $base_pair
): \Tatum\Model\ExchangeRate
```

Get the current exchange rate for exchanging fiat/crypto assets

<p><b>1 credit per API call</b></p> <p>Get the current exchange rate for exchanging fiat/crypto assets.</p> <p>By default, the base pair (the target asset) is EUR. When obtaining the exchange rate for an asset (for example, BTC), the value returned by the API expresses the amount of EUR that can be currently exchanged into 1 BTC.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The fiat or crypto asset to exchange
$currency = 'BTC';

// The target fiat asset to get the exchange rate for
$base_pair = 'USD';

try {
    /** @var \Tatum\Model\ExchangeRate $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->exchangeRate()
        ->getExchangeRate($currency, $base_pair);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling exchangeRate()->getExchangeRate(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling exchangeRate()->getExchangeRate(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$currency** | **string**| The fiat or crypto asset to exchange |
 **$base_pair** | **string**| The target fiat asset to get the exchange rate for | [optional] [default to &#39;EUR&#39;]

### Return type

[**\Tatum\Model\ExchangeRate**](../Model/ExchangeRate.md)

[[Back to top]](#) | [[Back to Index]](../index.md)