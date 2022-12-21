# Tatum/Api/WithdrawalApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastBlockchainTransaction()**](#broadcastblockchaintransaction) | **POST** /v3/offchain/withdrawal/broadcast | Broadcast signed transaction and complete withdrawal
[**cancelInProgressWithdrawal()**](#cancelinprogresswithdrawal) | **DELETE** /v3/offchain/withdrawal/{id} | Cancel withdrawal
[**completeWithdrawal()**](#completewithdrawal) | **PUT** /v3/offchain/withdrawal/{id}/{txId} | Complete withdrawal
[**getWithdrawals()**](#getwithdrawals) | **GET** /v3/offchain/withdrawal | Get withdrawals
[**storeWithdrawal()**](#storewithdrawal) | **POST** /v3/offchain/withdrawal | Store withdrawal


## `broadcastBlockchainTransaction()`

```php
api()->withdrawal()->broadcastBlockchainTransaction(
    ?\Tatum\Model\BroadcastWithdrawal $broadcast_withdrawal
): \Tatum\Model\BroadcastResponse
```

Broadcast signed transaction and complete withdrawal

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed raw transaction end complete withdrawal associated with it. When broadcast succeeded but it is impossible to complete withdrawal, transaction id of transaction is returned and withdrawal must be completed manually. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast_withdrawal = new \Tatum\Model\BroadcastWithdrawal();

try {
    /** @var \Tatum\Model\BroadcastResponse $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->broadcastBlockchainTransaction($broadcast_withdrawal);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling withdrawal()->broadcastBlockchainTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling withdrawal()->broadcastBlockchainTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_withdrawal** | [**\Tatum\Model\BroadcastWithdrawal**](../Model/BroadcastWithdrawal.md)|  |

### Return type

[**\Tatum\Model\BroadcastResponse**](../Model/BroadcastResponse.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `cancelInProgressWithdrawal()`

```php
api()->withdrawal()->cancelInProgressWithdrawal(
    ?string $id, 
    ?bool $revert
)
```

Cancel withdrawal

<h4>1 credit per API call.</h4><br/> <p>This method is helpful if you need to cancel the withdrawal if the blockchain transaction fails or is not yet processed. This does not cancel already broadcast blockchain transaction, only Tatum internal withdrawal, and the ledger transaction, that was linked to this withdrawal.<br/> By default, the transaction fee is included in the reverted transaction. There are situations, like sending ERC20 on ETH, TRC token on TRON, XLM or XRP based assets, when the fee should not be reverted, because e.g. the fee is in calculated in Ethereum and transaction was in ERC20 currency. In this situation, only the transaction amount should be reverted, not the fee. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// ID of created withdrawal
$id = 'id_example';

// Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum based currencies when gas was consumed but transaction was reverted.
$revert = 'true';

try {
        $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->cancelInProgressWithdrawal($id, $revert);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling withdrawal()->cancelInProgressWithdrawal(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling withdrawal()->cancelInProgressWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| ID of created withdrawal |
 **$revert** | **bool**| Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum based currencies when gas was consumed but transaction was reverted. | [optional] [default to true]

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `completeWithdrawal()`

```php
api()->withdrawal()->completeWithdrawal(
    ?string $id, 
    ?string $tx_id
)
```

Complete withdrawal

<h4>2 credits per API call.</h4><br/> <p>Invoke complete withdrawal as soon as blockchain transaction ID is available. All other withdrawals for the same currency will be pending unless the last one is processed and marked as completed.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// ID of created withdrawal
$id = 'id_example';

// Blockchain transaction ID of created withdrawal
$tx_id = 'tx_id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->completeWithdrawal($id, $tx_id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling withdrawal()->completeWithdrawal(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling withdrawal()->completeWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| ID of created withdrawal |
 **$tx_id** | **string**| Blockchain transaction ID of created withdrawal |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getWithdrawals()`

```php
api()->withdrawal()->getWithdrawals(
    ?float $page_size, 
    ?string $currency, 
    ?string $status, 
    ?float $offset
): \Tatum\Model\WithdrawalObject[]
```

Get withdrawals

<h4>1 credit per API call.</h4><br/><p>Get withdrawals.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 10;

// Currency of the withdrawal
$currency = 'BTC';

// Status of the withdrawal
$status = 'Done';

// Offset to obtain next page of the data.
$offset = 0;

try {
    /** @var \Tatum\Model\WithdrawalObject[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->getWithdrawals($page_size, $currency, $status, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling withdrawal()->getWithdrawals(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling withdrawal()->getWithdrawals(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. |
 **$currency** | **string**| Currency of the withdrawal | [optional]
 **$status** | **string**| Status of the withdrawal | [optional]
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\WithdrawalObject[]**](../Model/WithdrawalObject.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `storeWithdrawal()`

```php
api()->withdrawal()->storeWithdrawal(
    ?\Tatum\Model\Withdrawal $withdrawal
): \Tatum\Model\WithdrawalResponse
```

Store withdrawal

<h4>2 credits per API call.</h4><br/><p> <p>Create a withdrawal from Tatum Ledger account to the blockchain.<br/>   <h4>BTC, LTC, DOGE, BCH</h4>   <p>     When withdrawal from Tatum is executed, all deposits, which are not processed yet are used as an input and     change is moved to pool address 0 of wallet for defined account's xpub. If there are no unspent deposits, only last pool address 0 UTXO is used.     If balance of wallet is not sufficient, it is impossible to perform withdrawal from this account -> funds were transferred to another     linked wallet within system or outside of Tatum visibility.<br/>     For the first time of withdrawal from wallet, there must be some deposit made and funds are obtained from that. Since     there is no withdrawal, there was no transfer to pool address 0 and thus it is not present in vIn. Pool transfer is identified by missing data.address property in response.     When last not cancelled withdrawal is not completed and thus there is no tx id of output transaction given,     we cannot perform next withdrawal.   </p>   <h4>ETH</h4>   <p>     Withdrawal from Tatum can be processed only from 1 account. In Ethereum Blockchain, each address is recognized as an account and only funds from that account can be sent in 1 transaction.     Example: Account A has 0.5 ETH, Account B has 0.3 ETH. Account A is linked to Tatum Account 1, Account B is linked to Tatum Account 2. Tatum Account 1 has balance 0.7 Ethereum and     Tatum Account 2 has 0.1 ETH. Withdrawal from Tatum Account 1 can be at most 0.5 ETH, even though balance in Tatum Private Ledger is 0.7 ETH.     Because of this Ethereum Blockchain limitation, withdrawal request should always contain sourceAddress, from which withdrawal will be made. To get available balances for Ethereum wallet accounts, use hint endpoint.   </p>   <h4>XRP</h4>   <p>     XRP withdrawal can contain DestinationTag except of address, which is placed in attr parameter of withdrawal request. SourceTag of the blockchain transaction should be withdrawal ID for autocomplete purposes of withdrawals.   </p>   <h4>XLM</h4>   <p>     XLM withdrawal can contain memo except of address, which is placed in attr parameter of withdrawal request. XLM blockchain does not have possibility to enter source account information.     It is possible to create memo in format 'destination|source', which is supported way of memo in Tatum and also there is information about the sender account in the blockchain.   </p> <br/> When withdrawal is created, all other withdrawals with the same currency are pending, unless the current one is marked as complete or cancelled.<br/> Tatum ledger transaction is created for every withdrawal request with operation type WITHDRAWAL. The value of the transaction is the withdrawal amount + blockchain fee, which should be paid. In the situation, when there is withdrawal for ERC20, XLM, or XRP based custom assets, the fee is not included in the transaction because it is paid in different assets than the withdrawal itself. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$withdrawal = new \Tatum\Model\Withdrawal();

try {
    /** @var \Tatum\Model\WithdrawalResponse $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->storeWithdrawal($withdrawal);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling withdrawal()->storeWithdrawal(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling withdrawal()->storeWithdrawal(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdrawal** | [**\Tatum\Model\Withdrawal**](../Model/Withdrawal.md)|  |

### Return type

[**\Tatum\Model\WithdrawalResponse**](../Model/WithdrawalResponse.md)

[[Back to top]](#) | [[Back to Index]](../index.md)