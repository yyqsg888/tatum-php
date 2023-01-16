<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#callonesmartcontractmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_one_smart_contract_method = (new \Tatum\Model\CallOneSmartContractMethod())
    
    // The address of the smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Amount of the assets to be sent.
    ->setAmount('100000')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            '{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}'
        )
    )
    
    // 
    ->setParams(["0x632"])
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) Nonce to be set to ONE transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->callOneSmartContractMethod($arg_call_one_smart_contract_method, $arg_shard_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->callOneSmartContractMethod(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->callOneSmartContractMethod(): " . $exc->getMessage() . PHP_EOL;
}