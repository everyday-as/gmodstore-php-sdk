# Everyday\GmodStore\Sdk\UserAddonsApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserAddons()**](UserAddonsApi.md#listUserAddons) | **GET** /users/{user_id}/addons | Fetch all the addons authored / co-authored by a user


## `listUserAddons()`

```php
listUserAddons($userId, $with): \Everyday\GmodStore\Sdk\Model\AddonListResponse
```

Fetch all the addons authored / co-authored by a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserAddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = 56; // int | Id of the user
$with = array('with_example'); // string[] | The relations you want to fetch with the `Addon`

try {
    $result = $apiInstance->listUserAddons($userId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAddonsApi->listUserAddons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;Addon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonListResponse**](../Model/AddonListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
