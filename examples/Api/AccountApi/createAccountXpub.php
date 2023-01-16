<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#createaccountxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_account_xpub = (new \Tatum\Model\CreateAccountXpub())
    
    // <p>The currency for the virtual account</p> <ul> <li><b>Native blockchain assets:</b> ALGO, BCH, BNB, BSC, BTC, CELO, DOGE, EGLD, ETH, FLOW, KCS, KLAY, LTC, MATIC, ONE, SOL, TRON, VET, XDC, XLM, XRP</li> <li><b>Digital assets:</b> BADA, BAT, BBCH, BBTC, BDOT, BETH, BLTC, BUSD, BUSD_BSC, BXRP, CAKE, FREE, GMC, LEO, LINK, MKR, MMY, PAX, PAXG, TUSD, UNI, USD_BSC, USDC, USDC_MATIC, USDT, USDT_TRON, WBNB, WBTC, XCON</li> <li><b><a href="https://apidoc.tatum.io/tag/Virtual-Currency" target="_blank">Virtual currency</a></b> registered on the Tatum platform and starting with the "VC_" prefix</li> <li><b><a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/BnbAssetOffchain" target="_blank">BNB assets</a>, <a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/XlmAssetOffchain" target="_blank">XLM assets</a>, and <a href="https://apidoc.tatum.io/tag/Blockchain-operations#operation/XrpAssetOffchain" target="_blank">XRP assets</a></b> created via the Tatum platform</li> <li><b>Custom fungible tokens</b> (ERC-20 or equivalent, such as BEP-20 or TRC-10/20) registered on the Tatum platform; for more information, see <a href="https://docs.tatum.io/guides/ledger-and-off-chain/how-to-connect-custom-erc-20-token-to-the-ledger" target="_blank">our user documentation</a> <br/>The fungible tokens do not have direct faucets on the testnet. To use them in a testnet environment, you have to register a new fungible token in a virtual account (use <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/createTrc" target="_blank">this API</a> for TRON TRC-10/20 tokens and <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/registerErc20Token" target="_blank">this API</a> for any other tokens) and make sure that your tokens minted on the testnet are <a href="https://apidoc.tatum.io/tag/Blockchain-operations/#operation/storeTokenAddress" target="_blank">linked to the token smart contract</a>.</li> </ul>
    ->setCurrency('BTC')
    
    // Extended public key to generate addresses from.
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) Enable compliant checks. If this is enabled, it is impossible to create account if compliant check fails.
    ->setCompliant(false)
    
    // (optional) For bookkeeping to distinct account purpose.
    ->setAccountCode('AC_1011_B')
    
    // (optional) All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, customer accountingCurrency is used or EUR by default. ISO-4217
    ->setAccountingCurrency('USD')
    
    // (optional) Account number from external system.
    ->setAccountNumber('123456');

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->createAccountXpub($arg_create_account_xpub);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->createAccountXpub(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->createAccountXpub(): " . $exc->getMessage() . PHP_EOL;
}