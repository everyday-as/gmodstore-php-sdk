# Everyday\GmodStore\Sdk\UserTeamsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserTeams()**](UserTeamsApi.md#listUserTeams) | **GET** /api/v3/users/{user}/teams | List all the specified user&#39;s teams


## `listUserTeams()`

```php
listUserTeams($user, $perPage, $cursor): object
```

List all the specified user's teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserTeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after

try {
    $result = $apiInstance->listUserTeams($user, $perPage, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTeamsApi->listUserTeams: ', $e->getMessage(), PHP_EOL;
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
