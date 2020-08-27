# Everyday\GmodStore\SDK\UserBadgesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserBadge**](UserBadgesApi.md#createuserbadge) | **POST** /users/{user_id}/badges | Give a user a badge
[**deleteUserBadge**](UserBadgesApi.md#deleteuserbadge) | **DELETE** /users/{user_id}/badges/{badge_id} | Destroy a users&#x27;s badge
[**listUserBadges**](UserBadgesApi.md#listuserbadges) | **GET** /users/{user_id}/badges | Fetch all the badges a user has

# **createUserBadge**
> \Everyday\GmodStore\SDK\Model\BadgeResponse createUserBadge($body, $user_id)

Give a user a badge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Everyday\GmodStore\SDK\Model\NewUserBadge(); // \Everyday\GmodStore\SDK\Model\NewUserBadge | 
$user_id = "user_id_example"; // string | Id of the user

try {
    $result = $apiInstance->createUserBadge($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->createUserBadge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Everyday\GmodStore\SDK\Model\NewUserBadge**](../Model/NewUserBadge.md)|  |
 **user_id** | **string**| Id of the user |

### Return type

[**\Everyday\GmodStore\SDK\Model\BadgeResponse**](../Model/BadgeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserBadge**
> deleteUserBadge($user_id, $badge_id)

Destroy a users's badge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$badge_id = 789; // int | Id of the badge

try {
    $apiInstance->deleteUserBadge($user_id, $badge_id);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->deleteUserBadge: ', $e->getMessage(), PHP_EOL;
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserBadges**
> \Everyday\GmodStore\SDK\Model\BadgeListResponse listUserBadges($user_id)

Fetch all the badges a user has

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user

try {
    $result = $apiInstance->listUserBadges($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->listUserBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |

### Return type

[**\Everyday\GmodStore\SDK\Model\BadgeListResponse**](../Model/BadgeListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

