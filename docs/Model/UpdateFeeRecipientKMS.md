# UpdateFeeRecipientKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**fee_recipient** | **string** | Recipient address of the marketplace fee. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)