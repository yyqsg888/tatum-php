# MintErc721KMSCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | ID of token to be created. |
**to** | **string** | Blockchain address to send ERC721 token to |
**contract_address** | **string** | Address of ERC721 token |
**url** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to Index]](../index.md)