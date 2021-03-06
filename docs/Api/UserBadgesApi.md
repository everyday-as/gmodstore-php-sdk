# Everyday\GmodStore\Sdk\UserBadgesApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserBadge()**](UserBadgesApi.md#createUserBadge) | **POST** /users/{user_id}/badges | Give a user a badge
[**deleteUserBadge()**](UserBadgesApi.md#deleteUserBadge) | **DELETE** /users/{user_id}/badges/{badge_id} | Destroy a users&#39;s badge
[**listUserBadges()**](UserBadgesApi.md#listUserBadges) | **GET** /users/{user_id}/badges | Fetch all the badges a user has


## `createUserBadge()`

```php
createUserBadge($userId, $userBadge): \Everyday\GmodStore\Sdk\Model\BadgeResponse
```

Give a user a badge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | Id of the user
$userBadge = new \Everyday\GmodStore\Sdk\Model\UserBadge(); // \Everyday\GmodStore\Sdk\Model\UserBadge

try {
    $result = $apiInstance->createUserBadge($userId, $userBadge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->createUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| Id of the user |
 **userBadge** | [**\Everyday\GmodStore\Sdk\Model\UserBadge**](../Model/UserBadge.md)|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\BadgeResponse**](../Model/BadgeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserBadge()`

```php
deleteUserBadge($userId, $badgeId)
```

Destroy a users's badge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | Id of the user
$badgeId = 'badgeId_example'; // string | Id of the badge

try {
    $apiInstance->deleteUserBadge($userId, $badgeId);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->deleteUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| Id of the user |
 **badgeId** | **string**| Id of the badge |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserBadges()`

```php
listUserBadges($userId): \Everyday\GmodStore\Sdk\Model\BadgeListResponse
```

Fetch all the badges a user has

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | Id of the user

try {
    $result = $apiInstance->listUserBadges($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->listUserBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| Id of the user |

### Return type

[**\Everyday\GmodStore\Sdk\Model\BadgeListResponse**](../Model/BadgeListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
