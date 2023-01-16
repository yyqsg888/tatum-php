<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TransactionApi.md#gettransactions
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transaction_filter_ledger = (new \Tatum\Model\TransactionFilterLedger())
    
    // (optional) Source account - source of transaction(s).
    ->setAccount('5e6be8e9e6aa436299950c41')
    
    // (optional) Counter account - transaction(s) destination account.
    ->setCounterAccount('5e6be8e9e6aa436299950c41')
    
    // (optional) Currency of the transactions.
    ->setCurrency('BTC')
    
    // (optional) Starting date to search for transactions from in UTC millis. If not present, search all history.
    ->setFrom(1571833231000)
    
    // (optional) Amount of the transaction. AND is used between filter options.
    ->setAmount(null)
    
    // (optional) List of currencies of the transactions.
    ->setCurrencies(null)
    
    // (optional) Type of payment
    ->setTransactionType('null')
    
    // (optional) Types of payment
    ->setTransactionTypes(null)
    
    // (optional) Type of operation.
    ->setOpType('PAYMENT')
    
    // (optional) For bookkeeping to distinct transaction purpose.
    ->setTransactionCode('1_01_EXTERNAL_CODE')
    
    // (optional) Payment ID defined in payment order by sender.
    ->setPaymentId('65426')
    
    // (optional) Recipient note defined in payment order by sender.
    ->setRecipientNote('65426')
    
    // (optional) Sender note defined in payment order by sender.
    ->setSenderNote('65426')
    
    // (optional) Date until to search for transactions in UTC millis. If not present, search up till now.
    ->setTo(1571833231000);

// Max number of items per page is 50. Either count or pageSize is accepted.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

// Get the total transaction count based on the filter. Either count or pageSize is accepted.
$arg_count = true;

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->transaction()
        ->getTransactions($arg_transaction_filter_ledger, $arg_page_size, $arg_offset, $arg_count);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->transaction()->getTransactions(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->transaction()->getTransactions(): " . $exc->getMessage() . PHP_EOL;
}