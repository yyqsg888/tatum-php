<?php

/**
 * XrpAccountTx_transactions_inner Model
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
 * XrpAccountTx_transactions_inner Model
 */
class XrpAccountTxTransactionsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpAccountTx_transactions_inner";
    protected static $_definition = [
        "meta" => ["meta", "\Tatum\Model\XrpAccountTxTransactionsInnerMeta", null, "getMeta", "setMeta"], 
        "tx" => ["tx", "\Tatum\Model\XrpTx", null, "getTx", "setTx"], 
        "validated" => ["validated", "bool", null, "getValidated", "setValidated"]
    ];

    /**
     * XrpAccountTxTransactionsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["meta"=>null, "tx"=>null, "validated"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get meta
     *
     * @return \Tatum\Model\XrpAccountTxTransactionsInnerMeta|null
     */
    public function getMeta(): ?\Tatum\Model\XrpAccountTxTransactionsInnerMeta {
        return $this->_data["meta"];
    }

    /**
     * Set meta
     * 
     * @param \Tatum\Model\XrpAccountTxTransactionsInnerMeta|null $meta meta
     * @return $this
     */
    public function setMeta(?\Tatum\Model\XrpAccountTxTransactionsInnerMeta $meta) {
        $this->_data['meta'] = $meta;

        return $this;
    }

    /**
     * Get tx
     *
     * @return \Tatum\Model\XrpTx|null
     */
    public function getTx(): ?\Tatum\Model\XrpTx {
        return $this->_data["tx"];
    }

    /**
     * Set tx
     * 
     * @param \Tatum\Model\XrpTx|null $tx tx
     * @return $this
     */
    public function setTx(?\Tatum\Model\XrpTx $tx) {
        $this->_data['tx'] = $tx;

        return $this;
    }

    /**
     * Get validated
     *
     * @return bool|null
     */
    public function getValidated(): ?bool {
        return $this->_data["validated"];
    }

    /**
     * Set validated
     * 
     * @param bool|null $validated True if this data is from a validated ledger version; if omitted or set to false, this data is not final.
     * @return $this
     */
    public function setValidated(?bool $validated) {
        $this->_data['validated'] = $validated;

        return $this;
    }
}
