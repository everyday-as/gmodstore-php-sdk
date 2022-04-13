# Everyday\GmodStore\Sdk\ProductPurchasesApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductPurchase()**](ProductPurchasesApi.md#createProductPurchase) | **POST** /api/v3/products/{product}/purchases | Create a purchase for a product
[**getProductPurchase()**](ProductPurchasesApi.md#getProductPurchase) | **GET** /api/v3/products/{product}/purchases/{purchase} | Show the specified purchase for a product
[**listProductPurchases()**](ProductPurchasesApi.md#listProductPurchases) | **GET** /api/v3/products/{product}/purchases | List all purchases for a product
[**updateProductPurchase()**](ProductPurchasesApi.md#updateProductPurchase) | **PUT** /api/v3/products/{product}/purchases/{purchase} | Update the specified purchase for a product


## `createProductPurchase()`

```php
createProductPurchase($product, $newProductPurchasePayload): \Everyday\GmodStore\Sdk\Model\CreateProductPurchaseResponse
```

Create a purchase for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$newProductPurchasePayload = new \Everyday\GmodStore\Sdk\Model\NewProductPurchasePayload(); // \Everyday\GmodStore\Sdk\Model\NewProductPurchasePayload

try {
    $result = $apiInstance->createProductPurchase($product, $newProductPurchasePayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasesApi->createProductPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **newProductPurchasePayload** | [**\Everyday\GmodStore\Sdk\Model\NewProductPurchasePayload**](../Model/NewProductPurchasePayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreateProductPurchaseResponse**](../Model/CreateProductPurchaseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductPurchase()`

```php
getProductPurchase($product, $purchase, $filter): \Everyday\GmodStore\Sdk\Model\GetProductPurchaseResponse
```

Show the specified purchase for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$purchase = 'purchase_example'; // string
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter(); // \Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter | Filter the results

try {
    $result = $apiInstance->getProductPurchase($product, $purchase, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasesApi->getProductPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **purchase** | **string**|  |
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter**](../Model/.md)| Filter the results | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetProductPurchaseResponse**](../Model/GetProductPurchaseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductPurchases()`

```php
listProductPurchases($product, $perPage, $cursor, $filter): object
```

List all purchases for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter(); // \Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter | Filter the results

try {
    $result = $apiInstance->listProductPurchases($product, $perPage, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasesApi->listProductPurchases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **perPage** | **int**|  | [optional] [default to 24]
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

## `updateProductPurchase()`

```php
updateProductPurchase($product, $purchase, $updateProductPurchasePayload): \Everyday\GmodStore\Sdk\Model\UpdateProductPurchaseResponse
```

Update the specified purchase for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$purchase = 'purchase_example'; // string
$updateProductPurchasePayload = new \Everyday\GmodStore\Sdk\Model\UpdateProductPurchasePayload(); // \Everyday\GmodStore\Sdk\Model\UpdateProductPurchasePayload

try {
    $result = $apiInstance->updateProductPurchase($product, $purchase, $updateProductPurchasePayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasesApi->updateProductPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **purchase** | **string**|  |
 **updateProductPurchasePayload** | [**\Everyday\GmodStore\Sdk\Model\UpdateProductPurchasePayload**](../Model/UpdateProductPurchasePayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdateProductPurchaseResponse**](../Model/UpdateProductPurchaseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
