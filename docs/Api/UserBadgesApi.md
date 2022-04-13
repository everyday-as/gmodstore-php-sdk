# Everyday\GmodStore\Sdk\UserBadgesApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserBadge()**](UserBadgesApi.md#createUserBadge) | **POST** /api/v3/users/{user}/badges | Attach a badge to a user
[**deleteUserBadge()**](UserBadgesApi.md#deleteUserBadge) | **DELETE** /api/v3/users/{user}/badges/{badge} | Detach a badge from a user
[**listUserBadges()**](UserBadgesApi.md#listUserBadges) | **GET** /api/v3/users/{user}/badges | List all the specified user&#39;s badges


## `createUserBadge()`

```php
createUserBadge($user, $newUserBadgePayload): \Everyday\GmodStore\Sdk\Model\CreateUserBadgeResponse
```

Attach a badge to a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$newUserBadgePayload = new \Everyday\GmodStore\Sdk\Model\NewUserBadgePayload(); // \Everyday\GmodStore\Sdk\Model\NewUserBadgePayload

try {
    $result = $apiInstance->createUserBadge($user, $newUserBadgePayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->createUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **newUserBadgePayload** | [**\Everyday\GmodStore\Sdk\Model\NewUserBadgePayload**](../Model/NewUserBadgePayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreateUserBadgeResponse**](../Model/CreateUserBadgeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserBadge()`

```php
deleteUserBadge($user, $badge): \Everyday\GmodStore\Sdk\Model\DeleteUserBadgeResponse
```

Detach a badge from a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$badge = 'badge_example'; // string

try {
    $result = $apiInstance->deleteUserBadge($user, $badge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->deleteUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **badge** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DeleteUserBadgeResponse**](../Model/DeleteUserBadgeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserBadges()`

```php
listUserBadges($user, $perPage, $cursor): object
```

List all the specified user's badges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after

try {
    $result = $apiInstance->listUserBadges($user, $perPage, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBadgesApi->listUserBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **perPage** | **int**|  | [optional] [default to 24]
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]

### Return type

**object**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
