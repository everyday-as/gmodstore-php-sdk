# Everyday\GmodStore\Sdk\UserBansApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserBans()**](UserBansApi.md#listUserBans) | **GET** /api/v3/users/{user}/bans | List all the specified user&#39;s bans


## `listUserBans()`

```php
listUserBans($user, $perPage, $cursor, $filter): object
```

List all the specified user's bans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserBansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\UserBanFilter(); // \Everyday\GmodStore\Sdk\Model\UserBanFilter | Filter the results

try {
    $result = $apiInstance->listUserBans($user, $perPage, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBansApi->listUserBans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **perPage** | **int**|  | [optional] [default to 24]
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]
 **filter** | [**\Everyday\GmodStore\Sdk\Model\UserBanFilter**](../Model/.md)| Filter the results | [optional]

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
