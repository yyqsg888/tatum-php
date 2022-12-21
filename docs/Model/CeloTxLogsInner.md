# CeloTxLogsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | From which this event originated from. | [optional]
**topics** | **string[]** | An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log. | [optional]
**data** | **string** | The data containing non-indexed log parameter. | [optional]
**log_index** | **float** | Integer of the event index position in the block. | [optional]
**transaction_index** | **float** | Integer of the transaction’s index position, the event was created in. | [optional]
**transaction_hash** | **string** | Hash of the transaction this event was created in. | [optional]

[[Back to Index]](../index.md)