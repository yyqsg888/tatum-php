# TransferTronTrc20BlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Sender address of TRON account in Base58 format. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**to** | **string** | Recipient address of TRON account in Base58 format. |
**token_address** | **string** | Address of the TRC20 token to transfer. |
**fee_limit** | **float** | Fee in TRX to be paid. |
**amount** | **string** | Amount to be sent in TRX. |

[[Back to Index]](../index.md)