# Everyday\GmodStore\Sdk\UsersApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSelfUser()**](UsersApi.md#getSelfUser) | **GET** /users/me | Fetches the current user (API Key Owner)
[**getUser()**](UsersApi.md#getUser) | **GET** /users/{user_id} | Fetch a single user


## `getSelfUser()`

```php
getSelfUser($with): \Everyday\GmodStore\Sdk\Model\UserResponse
```

Fetches the current user (API Key Owner)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array('with_example'); // string[] | The relations you want to fetch with the `User`

try {
    $result = $apiInstance->getSelfUser($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSelfUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;User&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($userId, $with): \Everyday\GmodStore\Sdk\Model\UserResponse
```

Fetch a single user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | Id of the user
$with = array('with_example'); // string[] | The relations you want to fetch with the `User`

try {
    $result = $apiInstance->getUser($userId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;User&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
