# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_date** | **string** | 取引日 半角文字 YYYY-MM-DD形式 | 
**value_date** | **string** | 起算日 半角文字 YYYY-MM-DD形式 | 
**transaction_type** | **string** | 入払コード 半角数字 ・1&#x3D;入金 ・2&#x3D;出金 | 
**amount** | **string** | 取引金額 半角数字　マイナス含む | 
**remarks** | **string** | 摘要内容 全半角文字 該当データがない場合は項目自体を設定しません | [optional] 
**balance** | **string** | 取引後残高 半角数字　マイナス含む | 
**item_key** | **string** | 明細キー 半角数字 口座の科目が01&#x3D;普通預金（有利息）または02&#x3D;普通預金（決済用）の場合は口座ID毎に設定される明細キー（明細データtimestamp（μs）） 該当データがない場合は項目自体を設定しません | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


