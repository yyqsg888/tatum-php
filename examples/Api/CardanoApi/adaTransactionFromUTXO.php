<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adatransactionfromutxo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_ada_transaction_from_utxo = (new \Tatum\Model\AdaTransactionFromUTXO())
    
    // The array of transaction hashes, indexes of its UTXOs, and the private keys of the associated blockchain addresses
    ->setFromUtxo(null)
    
    // The array of blockchain addresses to send the assets to and the amounts that each address should receive (in ADA). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
    ->setTo(null)
    
    // (optional) The fee to be paid for the transaction (in ADA); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together.
    ->setFee('0.0015')
    
    // (optional) The blockchain address to send any extra assets remaning after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
    ->setChangeAddress('2MzNGwuKvMEvKMQogtgzSqJcH2UW3Tc5oc7');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaTransactionFromUTXO($arg_ada_transaction_from_utxo);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->cardano()->adaTransactionFromUTXO(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->cardano()->adaTransactionFromUTXO(): " . $exc->getMessage() . PHP_EOL;
}