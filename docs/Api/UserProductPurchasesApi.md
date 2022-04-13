# Everyday\GmodStore\Sdk\UserProductPurchasesApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserPurchases()**](UserProductPurchasesApi.md#listUserPurchases) | **GET** /api/v3/users/{user}/purchases | List all the specified user&#39;s purchases


## `listUserPurchases()`

```php
listUserPurchases($user, $cursor, $filter): object
```

List all the specified user's purchases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserProductPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter(); // \Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter | Filter the results

try {
    $result = $apiInstance->listUserPurchases($user, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProductPurchasesApi->listUserPurchases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**|  |
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter**](../Model/.md)| Filter the results | [optional]

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
