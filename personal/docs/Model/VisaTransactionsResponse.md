# VisaTransactionsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | 口座ID 半角英数字 口座を識別するID  | 
**date_from** | **string** | 対象期間From 半角文字 YYYY-MM-DD形式 リクエストに対象期間From、Toが設定されていない場合は当日日付が設定されます  | 
**date_to** | **string** | 対象期間To 半角文字 YYYY-MM-DD形式 リクエストに対象期間From、Toが設定されていない場合は当日日付が設定されます  | 
**base_date** | **string** | 基準日 Visaデビット取引明細を照会した基準日を示します YYYY-MM-DD形式  | 
**base_time** | **string** | 基準時刻 Visaデビット取引明細を照会した基準時刻を示します HH:MM:SS+09:00形式  | 
**has_next** | **bool** | 次明細フラグ ・true&#x3D;次明細あり ・false&#x3D;次明細なし  | 
**next_item_key** | **string** | 次明細キー 半角数字 次明細フラグがfalseの場合は、項目自体を設定しません  | [optional]
**count** | **string** | 明細取得件数 半角数字  | 
**visa_transactions** | [**\Ganb\Personal\Client\Model\VisaTransaction[]**](VisaTransaction.md) | 入出金明細情報リスト 該当する情報が無い場合は、空のリストを返却します | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)
