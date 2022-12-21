# TransferMultiTokenBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**to** | **string** | Blockchain address to send Multi Token token to |
**token_id** | **string[]** | ID of token. |
**amounts** | **string[]** | amounts of token. |
**data** | **string** | Data in bytes | [optional]
**contract_address** | **string** | Address of Multi Token token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**amount** | **string[]** | amount of token. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)