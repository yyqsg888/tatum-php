<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#mintnftalgorand
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_mint_nft_algorand = (new \Tatum\Model\MintNftAlgorand())
    
    // The blockchain to work with
    ->setChain('ALGO')
    
    // The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a>
    ->setUrl('https://my_token_data.com')
    
    // The name of the NFT
    ->setName('My Crazy NFT')
    
    // The private key of the minting account; the transaction fee will be paid from this account
    ->setFromPrivateKey('EPD5VYFGXWNZ2PY4AQNPD3E3LMAXISKNMGR4IJ44YI74QL5AMNTAIJNQ6Q373RDANF2YERVFQY3C5CKK7VUJDJR4DT6EPP5HZQUPORQ')
    
    // (optional) 
    ->setAttr(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MintNftExpress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftAlgorand($arg_mint_nft_algorand, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->mintNftAlgorand(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->mintNftAlgorand(): " . $exc->getMessage() . PHP_EOL;
}