<?php

/**
 * DeployKCSErc20OffchainMnemXpub Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * DeployKCSErc20OffchainMnemXpub Model
 */
class DeployKCSErc20OffchainMnemXpub extends AbstractModel {

    public const _D = null;
    public const BASE_PAIR_AED = 'AED';
    public const BASE_PAIR_AFN = 'AFN';
    public const BASE_PAIR_ALL = 'ALL';
    public const BASE_PAIR_AMD = 'AMD';
    public const BASE_PAIR_ANG = 'ANG';
    public const BASE_PAIR_AOA = 'AOA';
    public const BASE_PAIR_ARS = 'ARS';
    public const BASE_PAIR_AUD = 'AUD';
    public const BASE_PAIR_AWG = 'AWG';
    public const BASE_PAIR_AZN = 'AZN';
    public const BASE_PAIR_BAM = 'BAM';
    public const BASE_PAIR_BAT = 'BAT';
    public const BASE_PAIR_BBD = 'BBD';
    public const BASE_PAIR_BCH = 'BCH';
    public const BASE_PAIR_BDT = 'BDT';
    public const BASE_PAIR_BGN = 'BGN';
    public const BASE_PAIR_BHD = 'BHD';
    public const BASE_PAIR_BIF = 'BIF';
    public const BASE_PAIR_BMD = 'BMD';
    public const BASE_PAIR_BND = 'BND';
    public const BASE_PAIR_BOB = 'BOB';
    public const BASE_PAIR_BRL = 'BRL';
    public const BASE_PAIR_BSD = 'BSD';
    public const BASE_PAIR_BTC = 'BTC';
    public const BASE_PAIR_BTN = 'BTN';
    public const BASE_PAIR_BWP = 'BWP';
    public const BASE_PAIR_BYN = 'BYN';
    public const BASE_PAIR_BYR = 'BYR';
    public const BASE_PAIR_BZD = 'BZD';
    public const BASE_PAIR_CAD = 'CAD';
    public const BASE_PAIR_CDF = 'CDF';
    public const BASE_PAIR_CHF = 'CHF';
    public const BASE_PAIR_CLF = 'CLF';
    public const BASE_PAIR_CLP = 'CLP';
    public const BASE_PAIR_CNY = 'CNY';
    public const BASE_PAIR_COP = 'COP';
    public const BASE_PAIR_CRC = 'CRC';
    public const BASE_PAIR_CUC = 'CUC';
    public const BASE_PAIR_CUP = 'CUP';
    public const BASE_PAIR_CVE = 'CVE';
    public const BASE_PAIR_CZK = 'CZK';
    public const BASE_PAIR_DJF = 'DJF';
    public const BASE_PAIR_DKK = 'DKK';
    public const BASE_PAIR_DOP = 'DOP';
    public const BASE_PAIR_DOGE = 'DOGE';
    public const BASE_PAIR_DZD = 'DZD';
    public const BASE_PAIR_EGP = 'EGP';
    public const BASE_PAIR_ERN = 'ERN';
    public const BASE_PAIR_ETB = 'ETB';
    public const BASE_PAIR_ETH = 'ETH';
    public const BASE_PAIR_EUR = 'EUR';
    public const BASE_PAIR_FJD = 'FJD';
    public const BASE_PAIR_FKP = 'FKP';
    public const BASE_PAIR_FLOW = 'FLOW';
    public const BASE_PAIR_FUSD = 'FUSD';
    public const BASE_PAIR_FREE = 'FREE';
    public const BASE_PAIR_GMC = 'GMC';
    public const BASE_PAIR_GMC_BSC = 'GMC_BSC';
    public const BASE_PAIR_RMD = 'RMD';
    public const BASE_PAIR_GBP = 'GBP';
    public const BASE_PAIR_GEL = 'GEL';
    public const BASE_PAIR_GGP = 'GGP';
    public const BASE_PAIR_GHS = 'GHS';
    public const BASE_PAIR_GIP = 'GIP';
    public const BASE_PAIR_GMD = 'GMD';
    public const BASE_PAIR_GNF = 'GNF';
    public const BASE_PAIR_GTQ = 'GTQ';
    public const BASE_PAIR_GYD = 'GYD';
    public const BASE_PAIR_HKD = 'HKD';
    public const BASE_PAIR_HNL = 'HNL';
    public const BASE_PAIR_HRK = 'HRK';
    public const BASE_PAIR_HTG = 'HTG';
    public const BASE_PAIR_HUF = 'HUF';
    public const BASE_PAIR_IDR = 'IDR';
    public const BASE_PAIR_ILS = 'ILS';
    public const BASE_PAIR_IMP = 'IMP';
    public const BASE_PAIR_INR = 'INR';
    public const BASE_PAIR_IQD = 'IQD';
    public const BASE_PAIR_IRR = 'IRR';
    public const BASE_PAIR_ISK = 'ISK';
    public const BASE_PAIR_JEP = 'JEP';
    public const BASE_PAIR_JMD = 'JMD';
    public const BASE_PAIR_JOD = 'JOD';
    public const BASE_PAIR_JPY = 'JPY';
    public const BASE_PAIR_KES = 'KES';
    public const BASE_PAIR_KGS = 'KGS';
    public const BASE_PAIR_KHR = 'KHR';
    public const BASE_PAIR_KMF = 'KMF';
    public const BASE_PAIR_KPW = 'KPW';
    public const BASE_PAIR_KRW = 'KRW';
    public const BASE_PAIR_KWD = 'KWD';
    public const BASE_PAIR_KYD = 'KYD';
    public const BASE_PAIR_KZT = 'KZT';
    public const BASE_PAIR_LAK = 'LAK';
    public const BASE_PAIR_LBP = 'LBP';
    public const BASE_PAIR_LEO = 'LEO';
    public const BASE_PAIR_LINK = 'LINK';
    public const BASE_PAIR_LKR = 'LKR';
    public const BASE_PAIR_LRD = 'LRD';
    public const BASE_PAIR_LSL = 'LSL';
    public const BASE_PAIR_LTC = 'LTC';
    public const BASE_PAIR_LTL = 'LTL';
    public const BASE_PAIR_LVL = 'LVL';
    public const BASE_PAIR_LYD = 'LYD';
    public const BASE_PAIR_MAD = 'MAD';
    public const BASE_PAIR_MDL = 'MDL';
    public const BASE_PAIR_MGA = 'MGA';
    public const BASE_PAIR_MKD = 'MKD';
    public const BASE_PAIR_MKR = 'MKR';
    public const BASE_PAIR_MMK = 'MMK';
    public const BASE_PAIR_MMY = 'MMY';
    public const BASE_PAIR_MNT = 'MNT';
    public const BASE_PAIR_MOP = 'MOP';
    public const BASE_PAIR_MRO = 'MRO';
    public const BASE_PAIR_MUR = 'MUR';
    public const BASE_PAIR_MVR = 'MVR';
    public const BASE_PAIR_MWK = 'MWK';
    public const BASE_PAIR_MXN = 'MXN';
    public const BASE_PAIR_MYR = 'MYR';
    public const BASE_PAIR_MZN = 'MZN';
    public const BASE_PAIR_NAD = 'NAD';
    public const BASE_PAIR_NGN = 'NGN';
    public const BASE_PAIR_NIO = 'NIO';
    public const BASE_PAIR_NOK = 'NOK';
    public const BASE_PAIR_NPR = 'NPR';
    public const BASE_PAIR_NZD = 'NZD';
    public const BASE_PAIR_OMR = 'OMR';
    public const BASE_PAIR_PAB = 'PAB';
    public const BASE_PAIR_PAX = 'PAX';
    public const BASE_PAIR_PAXG = 'PAXG';
    public const BASE_PAIR_PEN = 'PEN';
    public const BASE_PAIR_PGK = 'PGK';
    public const BASE_PAIR_PHP = 'PHP';
    public const BASE_PAIR_PKR = 'PKR';
    public const BASE_PAIR_PLN = 'PLN';
    public const BASE_PAIR_PYG = 'PYG';
    public const BASE_PAIR_QAR = 'QAR';
    public const BASE_PAIR_RON = 'RON';
    public const BASE_PAIR_RSD = 'RSD';
    public const BASE_PAIR_RUB = 'RUB';
    public const BASE_PAIR_RWF = 'RWF';
    public const BASE_PAIR_SAR = 'SAR';
    public const BASE_PAIR_SBD = 'SBD';
    public const BASE_PAIR_SCR = 'SCR';
    public const BASE_PAIR_SDG = 'SDG';
    public const BASE_PAIR_SEK = 'SEK';
    public const BASE_PAIR_SGD = 'SGD';
    public const BASE_PAIR_SHP = 'SHP';
    public const BASE_PAIR_SLL = 'SLL';
    public const BASE_PAIR_SOS = 'SOS';
    public const BASE_PAIR_SRD = 'SRD';
    public const BASE_PAIR_STD = 'STD';
    public const BASE_PAIR_SVC = 'SVC';
    public const BASE_PAIR_SYP = 'SYP';
    public const BASE_PAIR_SZL = 'SZL';
    public const BASE_PAIR_THB = 'THB';
    public const BASE_PAIR_TJS = 'TJS';
    public const BASE_PAIR_TMT = 'TMT';
    public const BASE_PAIR_TND = 'TND';
    public const BASE_PAIR_TOP = 'TOP';
    public const BASE_PAIR__TRY = 'TRY';
    public const BASE_PAIR_TTD = 'TTD';
    public const BASE_PAIR_TRON = 'TRON';
    public const BASE_PAIR_TUSD = 'TUSD';
    public const BASE_PAIR_BUSD = 'BUSD';
    public const BASE_PAIR_TWD = 'TWD';
    public const BASE_PAIR_TZS = 'TZS';
    public const BASE_PAIR_UAH = 'UAH';
    public const BASE_PAIR_UGX = 'UGX';
    public const BASE_PAIR_UNI = 'UNI';
    public const BASE_PAIR_USD = 'USD';
    public const BASE_PAIR_USDC = 'USDC';
    public const BASE_PAIR_USDT = 'USDT';
    public const BASE_PAIR_USDT_TRON = 'USDT_TRON';
    public const BASE_PAIR_USDT_MATIC = 'USDT_MATIC';
    public const BASE_PAIR_UYU = 'UYU';
    public const BASE_PAIR_UZS = 'UZS';
    public const BASE_PAIR_VEF = 'VEF';
    public const BASE_PAIR_VND = 'VND';
    public const BASE_PAIR_VUV = 'VUV';
    public const BASE_PAIR_WBTC = 'WBTC';
    public const BASE_PAIR_WST = 'WST';
    public const BASE_PAIR_XAF = 'XAF';
    public const BASE_PAIR_XAG = 'XAG';
    public const BASE_PAIR_XAU = 'XAU';
    public const BASE_PAIR_XCD = 'XCD';
    public const BASE_PAIR_XCON = 'XCON';
    public const BASE_PAIR_XDR = 'XDR';
    public const BASE_PAIR_XLM = 'XLM';
    public const BASE_PAIR_XOF = 'XOF';
    public const BASE_PAIR_XPF = 'XPF';
    public const BASE_PAIR_XRP = 'XRP';
    public const BASE_PAIR_YER = 'YER';
    public const BASE_PAIR_ZAR = 'ZAR';
    public const BASE_PAIR_ZMK = 'ZMK';
    public const BASE_PAIR_ZMW = 'ZMW';
    public const BASE_PAIR_ZWL = 'ZWL';
    protected static $_name = "DeployKCSErc20OffchainMnemXpub";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 1, "p" => "/^[a-zA-Z0-9_]+$/", "nl" => 1, "xl" => 30]], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "base_pair" => ["basePair", "string", null, "getBasePair", "setBasePair", null, ["r" => 1, "e" => 1, "nl" => 2, "xl" => 30]], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate", 1, ["r" => 0, "n" => [0]]], 
        "customer" => ["customer", "\Tatum\Model\CustomerRegistration", null, "getCustomer", "setCustomer", null, ["r" => 0]], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub", null, ["r" => 1, "nl" => 1, "xl" => 150]], 
        "derivation_index" => ["derivationIndex", "int", 'int32', "getDerivationIndex", "setDerivationIndex", null, ["r" => 1, "x" => [2147483647]]], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic", null, ["r" => 1, "nl" => 1, "xl" => 500]], 
        "index" => ["index", "int", null, "getIndex", "setIndex", null, ["r" => 1, "x" => [2147483647]]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]]
    ];

    /**
     * DeployKCSErc20OffchainMnemXpub
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getBasePairAllowableValues(): array {
        return [
            self::BASE_PAIR_AED,
            self::BASE_PAIR_AFN,
            self::BASE_PAIR_ALL,
            self::BASE_PAIR_AMD,
            self::BASE_PAIR_ANG,
            self::BASE_PAIR_AOA,
            self::BASE_PAIR_ARS,
            self::BASE_PAIR_AUD,
            self::BASE_PAIR_AWG,
            self::BASE_PAIR_AZN,
            self::BASE_PAIR_BAM,
            self::BASE_PAIR_BAT,
            self::BASE_PAIR_BBD,
            self::BASE_PAIR_BCH,
            self::BASE_PAIR_BDT,
            self::BASE_PAIR_BGN,
            self::BASE_PAIR_BHD,
            self::BASE_PAIR_BIF,
            self::BASE_PAIR_BMD,
            self::BASE_PAIR_BND,
            self::BASE_PAIR_BOB,
            self::BASE_PAIR_BRL,
            self::BASE_PAIR_BSD,
            self::BASE_PAIR_BTC,
            self::BASE_PAIR_BTN,
            self::BASE_PAIR_BWP,
            self::BASE_PAIR_BYN,
            self::BASE_PAIR_BYR,
            self::BASE_PAIR_BZD,
            self::BASE_PAIR_CAD,
            self::BASE_PAIR_CDF,
            self::BASE_PAIR_CHF,
            self::BASE_PAIR_CLF,
            self::BASE_PAIR_CLP,
            self::BASE_PAIR_CNY,
            self::BASE_PAIR_COP,
            self::BASE_PAIR_CRC,
            self::BASE_PAIR_CUC,
            self::BASE_PAIR_CUP,
            self::BASE_PAIR_CVE,
            self::BASE_PAIR_CZK,
            self::BASE_PAIR_DJF,
            self::BASE_PAIR_DKK,
            self::BASE_PAIR_DOP,
            self::BASE_PAIR_DOGE,
            self::BASE_PAIR_DZD,
            self::BASE_PAIR_EGP,
            self::BASE_PAIR_ERN,
            self::BASE_PAIR_ETB,
            self::BASE_PAIR_ETH,
            self::BASE_PAIR_EUR,
            self::BASE_PAIR_FJD,
            self::BASE_PAIR_FKP,
            self::BASE_PAIR_FLOW,
            self::BASE_PAIR_FUSD,
            self::BASE_PAIR_FREE,
            self::BASE_PAIR_GMC,
            self::BASE_PAIR_GMC_BSC,
            self::BASE_PAIR_RMD,
            self::BASE_PAIR_GBP,
            self::BASE_PAIR_GEL,
            self::BASE_PAIR_GGP,
            self::BASE_PAIR_GHS,
            self::BASE_PAIR_GIP,
            self::BASE_PAIR_GMD,
            self::BASE_PAIR_GNF,
            self::BASE_PAIR_GTQ,
            self::BASE_PAIR_GYD,
            self::BASE_PAIR_HKD,
            self::BASE_PAIR_HNL,
            self::BASE_PAIR_HRK,
            self::BASE_PAIR_HTG,
            self::BASE_PAIR_HUF,
            self::BASE_PAIR_IDR,
            self::BASE_PAIR_ILS,
            self::BASE_PAIR_IMP,
            self::BASE_PAIR_INR,
            self::BASE_PAIR_IQD,
            self::BASE_PAIR_IRR,
            self::BASE_PAIR_ISK,
            self::BASE_PAIR_JEP,
            self::BASE_PAIR_JMD,
            self::BASE_PAIR_JOD,
            self::BASE_PAIR_JPY,
            self::BASE_PAIR_KES,
            self::BASE_PAIR_KGS,
            self::BASE_PAIR_KHR,
            self::BASE_PAIR_KMF,
            self::BASE_PAIR_KPW,
            self::BASE_PAIR_KRW,
            self::BASE_PAIR_KWD,
            self::BASE_PAIR_KYD,
            self::BASE_PAIR_KZT,
            self::BASE_PAIR_LAK,
            self::BASE_PAIR_LBP,
            self::BASE_PAIR_LEO,
            self::BASE_PAIR_LINK,
            self::BASE_PAIR_LKR,
            self::BASE_PAIR_LRD,
            self::BASE_PAIR_LSL,
            self::BASE_PAIR_LTC,
            self::BASE_PAIR_LTL,
            self::BASE_PAIR_LVL,
            self::BASE_PAIR_LYD,
            self::BASE_PAIR_MAD,
            self::BASE_PAIR_MDL,
            self::BASE_PAIR_MGA,
            self::BASE_PAIR_MKD,
            self::BASE_PAIR_MKR,
            self::BASE_PAIR_MMK,
            self::BASE_PAIR_MMY,
            self::BASE_PAIR_MNT,
            self::BASE_PAIR_MOP,
            self::BASE_PAIR_MRO,
            self::BASE_PAIR_MUR,
            self::BASE_PAIR_MVR,
            self::BASE_PAIR_MWK,
            self::BASE_PAIR_MXN,
            self::BASE_PAIR_MYR,
            self::BASE_PAIR_MZN,
            self::BASE_PAIR_NAD,
            self::BASE_PAIR_NGN,
            self::BASE_PAIR_NIO,
            self::BASE_PAIR_NOK,
            self::BASE_PAIR_NPR,
            self::BASE_PAIR_NZD,
            self::BASE_PAIR_OMR,
            self::BASE_PAIR_PAB,
            self::BASE_PAIR_PAX,
            self::BASE_PAIR_PAXG,
            self::BASE_PAIR_PEN,
            self::BASE_PAIR_PGK,
            self::BASE_PAIR_PHP,
            self::BASE_PAIR_PKR,
            self::BASE_PAIR_PLN,
            self::BASE_PAIR_PYG,
            self::BASE_PAIR_QAR,
            self::BASE_PAIR_RON,
            self::BASE_PAIR_RSD,
            self::BASE_PAIR_RUB,
            self::BASE_PAIR_RWF,
            self::BASE_PAIR_SAR,
            self::BASE_PAIR_SBD,
            self::BASE_PAIR_SCR,
            self::BASE_PAIR_SDG,
            self::BASE_PAIR_SEK,
            self::BASE_PAIR_SGD,
            self::BASE_PAIR_SHP,
            self::BASE_PAIR_SLL,
            self::BASE_PAIR_SOS,
            self::BASE_PAIR_SRD,
            self::BASE_PAIR_STD,
            self::BASE_PAIR_SVC,
            self::BASE_PAIR_SYP,
            self::BASE_PAIR_SZL,
            self::BASE_PAIR_THB,
            self::BASE_PAIR_TJS,
            self::BASE_PAIR_TMT,
            self::BASE_PAIR_TND,
            self::BASE_PAIR_TOP,
            self::BASE_PAIR__TRY,
            self::BASE_PAIR_TTD,
            self::BASE_PAIR_TRON,
            self::BASE_PAIR_TUSD,
            self::BASE_PAIR_BUSD,
            self::BASE_PAIR_TWD,
            self::BASE_PAIR_TZS,
            self::BASE_PAIR_UAH,
            self::BASE_PAIR_UGX,
            self::BASE_PAIR_UNI,
            self::BASE_PAIR_USD,
            self::BASE_PAIR_USDC,
            self::BASE_PAIR_USDT,
            self::BASE_PAIR_USDT_TRON,
            self::BASE_PAIR_USDT_MATIC,
            self::BASE_PAIR_UYU,
            self::BASE_PAIR_UZS,
            self::BASE_PAIR_VEF,
            self::BASE_PAIR_VND,
            self::BASE_PAIR_VUV,
            self::BASE_PAIR_WBTC,
            self::BASE_PAIR_WST,
            self::BASE_PAIR_XAF,
            self::BASE_PAIR_XAG,
            self::BASE_PAIR_XAU,
            self::BASE_PAIR_XCD,
            self::BASE_PAIR_XCON,
            self::BASE_PAIR_XDR,
            self::BASE_PAIR_XLM,
            self::BASE_PAIR_XOF,
            self::BASE_PAIR_XPF,
            self::BASE_PAIR_XRP,
            self::BASE_PAIR_YER,
            self::BASE_PAIR_ZAR,
            self::BASE_PAIR_ZMK,
            self::BASE_PAIR_ZMW,
            self::BASE_PAIR_ZWL,
        ];
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Name of the ERC20 token - stored as a symbol on Blockchain
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(string $symbol) {
        return $this->_set("symbol", $symbol);
    }

    /**
     * Get supply
     *
     * @return string
     */
    public function getSupply(): string {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param string $supply max supply of ERC20 token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSupply(string $supply) {
        return $this->_set("supply", $supply);
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string $description Description of the ERC20 token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription(string $description) {
        return $this->_set("description", $description);
    }

    /**
     * Get base_pair
     *
     * @return string
     */
    public function getBasePair(): string {
        return $this->_data["base_pair"];
    }

    /**
     * Set base_pair
     * 
     * @param string $base_pair Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBasePair(string $base_pair) {
        return $this->_set("base_pair", $base_pair);
    }

    /**
     * Get base_rate
     *
     * @return float|null
     */
    public function getBaseRate(): ?float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float|null $base_rate Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseRate(?float $base_rate) {
        return $this->_set("base_rate", $base_rate);
    }

    /**
     * Get customer
     *
     * @return \Tatum\Model\CustomerRegistration|null
     */
    public function getCustomer(): ?\Tatum\Model\CustomerRegistration {
        return $this->_data["customer"];
    }

    /**
     * Set customer
     * 
     * @param \Tatum\Model\CustomerRegistration|null $customer customer
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomer(?\Tatum\Model\CustomerRegistration $customer) {
        return $this->_set("customer", $customer);
    }

    /**
     * Get xpub
     *
     * @return string
     */
    public function getXpub(): string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setXpub(string $xpub) {
        return $this->_set("xpub", $xpub);
    }

    /**
     * Get derivation_index
     *
     * @return int
     */
    public function getDerivationIndex(): int {
        return $this->_data["derivation_index"];
    }

    /**
     * Set derivation_index
     * 
     * @param int $derivation_index Derivation index for xpub to generate specific deposit address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDerivationIndex(int $derivation_index) {
        return $this->_set("derivation_index", $derivation_index);
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        return $this->_set("mnemonic", $mnemonic);
    }

    /**
     * Get index
     *
     * @return int
     */
    public function getIndex(): int {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param int $index derivation index of address to pay for deployment of ERC20
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(int $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }
}
