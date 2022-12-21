# NftTokenByAddressErc721

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_address** | **string** | On Algorand, this is the asset ID (the ID of the NFT); on the other blockchains, this is the address of the NFT smart contract. |
**balances** | **string[]** | On Algorand, this is either an array of "1" to indicate that the NFTs with the specified IDs exist, or an array with the number of NFT fractions if the NFTs are <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a>; on the other blockchains, this is an array of the IDs of the NFTs. |
**block_number** | **float[]** | (EVM-based blockchains only) An array of the numbers of the blocks in which the NFT was received by the address | [optional]
**metadata** | [**\Tatum\Model\NftTokenByAddressErc721TokenMetadata[]**](NftTokenByAddressErc721TokenMetadata.md) |  |
**supply** | **float** | (Algorand only) The number of fractions in the NFT if the NFT is <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a> | [optional]
**decimals** | **float** | (Algorand only) The number of decimal places in an NFT fraction if the NFT is <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a> | [optional]

[[Back to Index]](../index.md)