# SpAccountTransferResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_datetime** | **string** | 更新受付日時 更新を受付した銀行側の日時 | [optional] 
**deposit_sp_account_id** | **string** | つかいわけ口座_入金口座ID 半角数字 口座を識別するID　入金先となる口座情報 | 
**debit_sp_account_id** | **string** | つかいわけ口座_出金口座ID 半角数字 口座を識別するID　引き落とし元となる口座情報 | 
**currency_code** | **string** | 通貨コード 半角文字 ISO4217準拠した通貨コード | [optional] 
**currency_name** | **string** | 通貨名 全角文字 ISO4217準拠した通貨コードの当行での名称 | [optional] 
**payment_amount** | **string** | 支払金額 数値のみでカンマ、マイナス不可 円貨(JPY)の場合１以上であること 外貨の場合当該通貨の補助通貨単位以上であること | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


