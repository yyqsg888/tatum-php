<?php

/**
 * MintNftExpress Model
 *
 * @version   3.17.1
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * MintNftExpress Model
 * 
 * @description &lt;p&gt;The &lt;code&gt;MintNftExpress&lt;/code&gt; schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using &lt;b&gt;NTF Express&lt;/b&gt; with the pre-built smart contract provided by Tatum.&lt;br/&gt;For more information, see \&quot;Use the pre-built smart contract provided by Tatum to mint NFTs\&quot; in &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;Mint an NFT&lt;/a&gt;.&lt;/p&gt;&lt;br/&gt;
 */
class MintNftExpress extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ONE = 'ONE';
    protected static $_name = "MintNftExpress";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "url" => ["url", "string", null, "getUrl", "setUrl"]
    ];

    /**
     * MintNftExpress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "to"=>null, "url"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if ((mb_strlen($this->_data['url']) > 256)) {
            $ip[] = "'url' length must be <= 256";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_BSC,
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_MATIC,
            self::CHAIN_ONE,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("MintNftExpress.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to The blockchain address to send the NFT to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 42)) {
            throw new IAE('MintNftExpress.setTo: $to length must be <= 42');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('MintNftExpress.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @return $this
     */
    public function setUrl(string $url) {
        if ((mb_strlen($url) > 256)) {
            throw new IAE('MintNftExpress.setUrl: $url length must be <= 256');
        }
        $this->_data['url'] = $url;

        return $this;
    }
}
