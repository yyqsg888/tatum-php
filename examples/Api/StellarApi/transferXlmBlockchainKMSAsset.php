<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#transferxlmblockchainkmsasset
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xlm_blockchain_kms_asset = (new \Tatum\Model\TransferXlmBlockchainKMSAsset())
    
    // Blockchain account to send assets from
    ->setFromAccount('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Blockchain address to send assets
    ->setTo('GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H')
    
    // Amount to be sent, in XLM.
    ->setAmount('10000')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Set to true, if the destination address is not yet initialized and should be funded for the first time.
    ->setInitialize(false)
    
    // Asset name. If not defined, transaction is being sent in native XLM asset.
    ->setToken('TOKEN123')
    
    // Blockchain address of the issuer of the assets to send, if not native XLM asset.
    ->setIssuerAccount('GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT')
    
    // (optional) Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number.
    ->setMessage('12355');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->transferXlmBlockchainKMSAsset($arg_transfer_xlm_blockchain_kms_asset);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->transferXlmBlockchainKMSAsset(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->transferXlmBlockchainKMSAsset(): " . $exc->getMessage() . PHP_EOL;
}