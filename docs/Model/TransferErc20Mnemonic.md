# TransferErc20Mnemonic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**address** | **string** | Blockchain address to send ERC20 token to |
**amount** | **string** | Amount to be sent. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**currency** | **string** | ERC20 symbol. Required only for calls. | [optional]
**gas_limit** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | [optional]
**gas_price** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | [optional]
**mnemonic** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, or privateKey must be present - depends on the type of account and xpub. |
**index** | **int** | Derivation index of sender address. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]

[[Back to Index]](../index.md)