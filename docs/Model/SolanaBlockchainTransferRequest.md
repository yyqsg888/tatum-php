# SolanaBlockchainTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Blockchain address to send assets from |
**to** | **string** | Blockchain address to send assets to |
**amount** | **string** | Amount to be sent in SOL. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**fee_payer** | **string** | Blockchain address to pay the fee for the transaction from | [optional]
**fee_payer_private_key** | **string** | Private key of the fee payer address. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_payer_signature_id** | **string** | Identifier of the private key used for paying the gas costs in signing application. Defaults to the signatureId. | [optional]

[[Back to Index]](../index.md)