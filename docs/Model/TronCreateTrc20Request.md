# TronCreateTrc20Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_private_key** | **string** | Private key of the address, from which the TRX will be sent. |
**recipient** | **string** | Recipient address of created TRC20 tokens. |
**name** | **string** | Name of the token. |
**symbol** | **string** | Symbol of the token. |
**total_supply** | **float** | Total supply of the tokens. |
**decimals** | **float** | Number of decimal places of the token. |
**from** | **string** | Sender address of TRON account in Base58 format. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)