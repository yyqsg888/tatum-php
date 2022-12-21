# ChainDeployAlgoErc20KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**symbol** | **string** | Symbol of the ERC20 token |
**name** | **string** | Name of the ERC20 token |
**total_cap** | **string** | Max supply of ERC20 token. | [optional]
**supply** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. |
**digits** | **float** | Number of decimal points |
**address** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | **string** | The transaction fee in ALGO |

[[Back to Index]](../index.md)