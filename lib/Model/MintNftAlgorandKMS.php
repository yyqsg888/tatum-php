<?php

/**
 * MintNftAlgorandKMS Model
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
 * MintNftAlgorandKMS Model
 * 
 * @description <p>The <code>MintNftAlgorandKMS</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your signature ID.<br/>For more information, see \"Minting NFTs natively on a blockchain\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftAlgorandKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_ALGO = 'ALGO';
    protected static $_name = "MintNftAlgorandKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 256]], 
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "nl" => 1, "xl" => 32]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 58, "xl" => 58]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "attr" => ["attr", "\Tatum\Model\MintNftExpressAlgorandAttr", null, "getAttr", "setAttr", null, ["r" => 0]]
    ];

    /**
     * MintNftAlgorandKMS
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
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ALGO,
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name The name of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from The address of the minting account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The KMS identifier of the private key of the minting account; the transaction fee will be paid from this account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\MintNftExpressAlgorandAttr|null
     */
    public function getAttr(): ?\Tatum\Model\MintNftExpressAlgorandAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\MintNftExpressAlgorandAttr|null $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?\Tatum\Model\MintNftExpressAlgorandAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
