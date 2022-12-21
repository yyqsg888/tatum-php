# ChainMintCeloErc20KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**amount** | **string** | Amount to be minted and transferred to the recipient. |
**to** | **string** | Blockchain address to send ERC-20 tokens to. |
**contract_address** | **string** | Address of ERC-20 token |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)