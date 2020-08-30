# Everyday\GmodStore\Sdk\PermissionGroupsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPermissionGroups**](PermissionGroupsApi.md#getPermissionGroups) | **GET** /permission-groups | Fetches all available permission groups



## getPermissionGroups

> \Everyday\GmodStore\Sdk\Model\PermissionGroupListResponse getPermissionGroups()

Fetches all available permission groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPermissionGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->getPermissionGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everyday\GmodStore\Sdk\Model\PermissionGroupListResponse**](../Model/PermissionGroupListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

