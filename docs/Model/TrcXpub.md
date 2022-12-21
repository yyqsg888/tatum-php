# TrcXpub

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain |
**supply** | **string** | The supply of the token |
**decimals** | **float** | The number of decimal places that the token has |
**type** | **string** | The type of the token |
**description** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain |
**xpub** | **string** | The extended public key of the TRON wallet from which a deposit address for the virtual account will be generated; the supply of the token will be stored on this address |
**derivation_index** | **int** | The derivation index to use together with the extended public key to generate the deposit address |
**url** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. |
**base_pair** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction |
**base_rate** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**accounting_currency** | **string** | The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed | [optional] [default to 'EUR']

[[Back to Index]](../index.md)