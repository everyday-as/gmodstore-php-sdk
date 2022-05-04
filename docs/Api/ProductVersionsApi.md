# Everyday\GmodStore\Sdk\ProductVersionsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductVersion()**](ProductVersionsApi.md#createProductVersion) | **POST** /api/v3/products/{product}/versions | Create a version for a product
[**deleteProductVersion()**](ProductVersionsApi.md#deleteProductVersion) | **DELETE** /api/v3/products/{product}/versions/{version} | Delete the specified version for a product
[**getProductDownloadToken()**](ProductVersionsApi.md#getProductDownloadToken) | **POST** /api/v3/products/{product}/versions/{version}/download | Get a one time use url for downloading a product
[**getProductVersion()**](ProductVersionsApi.md#getProductVersion) | **GET** /api/v3/products/{product}/versions/{version} | Show the specified version for a product
[**listProductVersions()**](ProductVersionsApi.md#listProductVersions) | **GET** /api/v3/products/{product}/versions | List all versions for a product
[**updateProductVersion()**](ProductVersionsApi.md#updateProductVersion) | **PUT** /api/v3/products/{product}/versions/{version} | Update the specified version for a product


## `createProductVersion()`

```php
createProductVersion($product, $name, $changelog, $file, $releaseType): \Everyday\GmodStore\Sdk\Model\CreateProductVersionResponse
```

Create a version for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$name = 'name_example'; // string
$changelog = 'changelog_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$releaseType = 'releaseType_example'; // string

try {
    $result = $apiInstance->createProductVersion($product, $name, $changelog, $file, $releaseType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVersionsApi->createProductVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **name** | **string**|  |
 **changelog** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**|  |
 **releaseType** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreateProductVersionResponse**](../Model/CreateProductVersionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
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
    echo 'Exception when calling ProductVersionsApi->deleteProductVersion: ', $e->getMessage(), PHP_EOL;
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

## `getProductDownloadToken()`

```php
getProductDownloadToken($product, $version): \Everyday\GmodStore\Sdk\Model\DownloadProductVersionResponse
```

Get a one time use url for downloading a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$version = 'version_example'; // string

try {
    $result = $apiInstance->getProductDownloadToken($product, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVersionsApi->getProductDownloadToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **version** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DownloadProductVersionResponse**](../Model/DownloadProductVersionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductVersion()`

```php
getProductVersion($product, $version, $filter): \Everyday\GmodStore\Sdk\Model\GetProductVersionResponse
```

Show the specified version for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$version = 'version_example'; // string
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductVersionFilter(); // \Everyday\GmodStore\Sdk\Model\ProductVersionFilter | Filter the results

try {
    $result = $apiInstance->getProductVersion($product, $version, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVersionsApi->getProductVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **version** | **string**|  |
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductVersionFilter**](../Model/.md)| Filter the results | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetProductVersionResponse**](../Model/GetProductVersionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductVersions()`

```php
listProductVersions($product, $perPage, $cursor, $filter): object
```

List all versions for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductVersionFilter(); // \Everyday\GmodStore\Sdk\Model\ProductVersionFilter | Filter the results

try {
    $result = $apiInstance->listProductVersions($product, $perPage, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVersionsApi->listProductVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **perPage** | **int**|  | [optional] [default to 24]
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductVersionFilter**](../Model/.md)| Filter the results | [optional]

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

## `updateProductVersion()`

```php
updateProductVersion($product, $version, $updateProductVersionPayload): \Everyday\GmodStore\Sdk\Model\UpdateProductVersionResponse
```

Update the specified version for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$version = 'version_example'; // string
$updateProductVersionPayload = new \Everyday\GmodStore\Sdk\Model\UpdateProductVersionPayload(); // \Everyday\GmodStore\Sdk\Model\UpdateProductVersionPayload

try {
    $result = $apiInstance->updateProductVersion($product, $version, $updateProductVersionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVersionsApi->updateProductVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **version** | **string**|  |
 **updateProductVersionPayload** | [**\Everyday\GmodStore\Sdk\Model\UpdateProductVersionPayload**](../Model/UpdateProductVersionPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdateProductVersionResponse**](../Model/UpdateProductVersionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
