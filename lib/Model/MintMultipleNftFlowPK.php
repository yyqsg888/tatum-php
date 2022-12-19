<?php

/**
 * MintMultipleNftFlowPK Model
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
 * MintMultipleNftFlowPK Model
 */
class MintMultipleNftFlowPK extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_FLOW = 'FLOW';
    protected static $_name = "MintMultipleNftFlowPK";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string[]", null, "getTo", "setTo"], 
        "url" => ["url", "string[]", null, "getUrl", "setUrl"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"]
    ];

    /**
     * MintMultipleNftFlowPK
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "to"=>null, "url"=>null, "contract_address"=>null, "account"=>null, "private_key"=>null] as $k => $v) {
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
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 36)) {
            $ip[] = "'contract_address' length must be <= 36";
        }
        if ((mb_strlen($this->_data['contract_address']) < 36)) {
            $ip[] = "'contract_address' length must be >= 36";
        }
        if (is_null($this->_data['account'])) {
            $ip[] = "'account' can't be null";
        }
        if ((mb_strlen($this->_data['account']) > 18)) {
            $ip[] = "'account' length must be <= 18";
        }
        if ((mb_strlen($this->_data['account']) < 18)) {
            $ip[] = "'account' length must be >= 18";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        if ((mb_strlen($this->_data['private_key']) > 64)) {
            $ip[] = "'private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['private_key']) < 64)) {
            $ip[] = "'private_key' length must be >= 64";
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
            self::CHAIN_FLOW,
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
            throw new IAE(sprintf("MintMultipleNftFlowPK.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string[] $to Blockchain address to send NFT token to.
     * @return $this
     */
    public function setTo(array $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get url
     *
     * @return string[]
     */
    public function getUrl(): array {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string[] $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @return $this
     */
    public function setUrl(array $url) {
        $this->_data['url'] = $url;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Address of NFT token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 36)) {
            throw new IAE('MintMultipleNftFlowPK.setContractAddress: $contract_address length must be <= 36');
        }
        if ((mb_strlen($contract_address) < 36)) {
            throw new IAE('MintMultipleNftFlowPK.setContractAddress: $contract_address length must be >= 36');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain address of the sender account.
     * @return $this
     */
    public function setAccount(string $account) {
        if ((mb_strlen($account) > 18)) {
            throw new IAE('MintMultipleNftFlowPK.setAccount: $account length must be <= 18');
        }
        if ((mb_strlen($account) < 18)) {
            throw new IAE('MintMultipleNftFlowPK.setAccount: $account length must be >= 18');
        }
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Private key of sender address. Private key, mnemonic and index or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 64)) {
            throw new IAE('MintMultipleNftFlowPK.setPrivateKey: $private_key length must be <= 64');
        }
        if ((mb_strlen($private_key) < 64)) {
            throw new IAE('MintMultipleNftFlowPK.setPrivateKey: $private_key length must be >= 64');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }
}
