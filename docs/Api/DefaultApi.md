# Everyday\GmodStore\Sdk\DefaultApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductVersion()**](DefaultApi.md#deleteProductVersion) | **DELETE** /api/v3/products/{product}/versions/{version} | Delete the specified version for a product


## `deleteProductVersion()`

```php
deleteProductVersion($product, $version): \Everyday\GmodStore\Sdk\Model\DeleteProductVersionResponse
```

Delete the specified version for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->deleteProductVersion($product, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteProductVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **version** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DeleteProductVersionResponse**](../Model/DeleteProductVersionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
