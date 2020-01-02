# Everyday\GmodStoreSDK\UsersApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersMeGet**](UsersApi.md#usersmeget) | **GET** /users/me | Fetches the current user (API Key Owner)
[**usersUserIdGet**](UsersApi.md#usersuseridget) | **GET** /users/{user_id} | Fetch a single user

# **usersMeGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse20011 usersMeGet($with)

Fetches the current user (API Key Owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array("with_example"); // string[] | The relations you want to fetch with the User schema

try {
    $result = $apiInstance->usersMeGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the User schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse20011 usersUserIdGet($user_id, $with)

Fetch a single user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the User schema

try {
    $result = $apiInstance->usersUserIdGet($user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the User schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

