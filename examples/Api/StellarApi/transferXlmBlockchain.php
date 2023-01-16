<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#transferxlmblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xlm_blockchain = (new \Tatum\Model\TransferXlmBlockchain())
    
    // Blockchain account to send assets from
    ->setFromAccount('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Blockchain address to send assets
    ->setTo('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Amount to be sent, in XLM.
    ->setAmount('10000')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setFromSecret('SCVVKNLBHOWBNJYHD3CNROOA2P3K35I5GNTYUHLLMUHMHWQYNEI7LVED')
    
    // (optional) Set to true, if the destination address is not yet initialized and should be funded for the first time.
    ->setInitialize(false)
    
    // (optional) Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number.
    ->setMessage('12355');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->transferXlmBlockchain($arg_transfer_xlm_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->transferXlmBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->transferXlmBlockchain(): " . $exc->getMessage() . PHP_EOL;
}