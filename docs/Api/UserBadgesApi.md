# Everyday\GmodStoreSDK\UserBadgesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersUserIdBadgesBadgeIdDelete**](UserBadgesApi.md#usersuseridbadgesbadgeiddelete) | **DELETE** /users/{user_id}/badges/{badge_id} | Destroy a users&#x27;s badge
[**usersUserIdBadgesGet**](UserBadgesApi.md#usersuseridbadgesget) | **GET** /users/{user_id}/badges | Fetch all the badges a user has
[**usersUserIdBadgesPost**](UserBadgesApi.md#usersuseridbadgespost) | **POST** /users/{user_id}/badges | Give a user a badge

# **usersUserIdBadgesBadgeIdDelete**
> usersUserIdBadgesBadgeIdDelete($user_id, $badge_id)

Destroy a users's badge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$badge_id = 789; // int | Id of the badge

try {
    $apiInstance->usersUserIdBadgesBadgeIdDelete($user_id, $badge_id);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->usersUserIdBadgesBadgeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |
 **badge_id** | **int**| Id of the badge |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdBadgesGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse20013 usersUserIdBadgesGet($user_id)

Fetch all the badges a user has

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user

try {
    $result = $apiInstance->usersUserIdBadgesGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->usersUserIdBadgesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdBadgesPost**
> \Everyday\GmodStoreSDK\Model\InlineResponse2013 usersUserIdBadgesPost($body, $user_id)

Give a user a badge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$user_id = "user_id_example"; // string | Id of the user

try {
    $result = $apiInstance->usersUserIdBadgesPost($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->usersUserIdBadgesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **user_id** | **string**| Id of the user |

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

