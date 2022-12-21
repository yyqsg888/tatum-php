# BscBlockchainSmartContractInvocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_address** | **string** | The address of the smart contract |
**method_name** | **string** | Name of the method to invoke on smart contract. |
**method_abi** | **object** | ABI of the method to invoke. |
**params** | **string[]** | Parameters of the method to be invoked. |
**amount** | **string** | Amount of the assets to be sent. | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to BSC transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)