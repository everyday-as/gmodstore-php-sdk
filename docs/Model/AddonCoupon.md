# # AddonCoupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**code** | **string** |  |
**percent** | **float** |  |
**maxUses** | **int** |  |
**expiresAt** | **\DateTime** | A future date less than 2 weeks from today |
**boundUserId** | **int** |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**addon** | [**\Everyday\GmodStore\Sdk\Model\Addon**](Addon.md) |  | [optional]
**boundUser** | [**\Everyday\GmodStore\Sdk\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
