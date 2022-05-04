# Everyday\GmodStore\Sdk\ProductCouponsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductCoupon()**](ProductCouponsApi.md#createProductCoupon) | **POST** /api/v3/products/{product}/coupons | Create a coupon for a product
[**deleteProductCoupon()**](ProductCouponsApi.md#deleteProductCoupon) | **DELETE** /api/v3/products/{product}/coupons/{coupon} | Delete the specified coupon for a product
[**getProductCoupon()**](ProductCouponsApi.md#getProductCoupon) | **GET** /api/v3/products/{product}/coupons/{coupon} | Show the specified coupon for a product
[**listProductCoupons()**](ProductCouponsApi.md#listProductCoupons) | **GET** /api/v3/products/{product}/coupons | List all coupons for a product
[**updateProductCoupon()**](ProductCouponsApi.md#updateProductCoupon) | **PUT** /api/v3/products/{product}/coupons/{coupon} | Update the specified coupon for a product


## `createProductCoupon()`

```php
createProductCoupon($product, $newProductCouponPayload): \Everyday\GmodStore\Sdk\Model\CreateProductCouponResponse
```

Create a coupon for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$newProductCouponPayload = new \Everyday\GmodStore\Sdk\Model\NewProductCouponPayload(); // \Everyday\GmodStore\Sdk\Model\NewProductCouponPayload

try {
    $result = $apiInstance->createProductCoupon($product, $newProductCouponPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCouponsApi->createProductCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **newProductCouponPayload** | [**\Everyday\GmodStore\Sdk\Model\NewProductCouponPayload**](../Model/NewProductCouponPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreateProductCouponResponse**](../Model/CreateProductCouponResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductCoupon()`

```php
deleteProductCoupon($product, $coupon): \Everyday\GmodStore\Sdk\Model\DeleteProductCouponResponse
```

Delete the specified coupon for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$coupon = 'coupon_example'; // string

try {
    $result = $apiInstance->deleteProductCoupon($product, $coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCouponsApi->deleteProductCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **coupon** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DeleteProductCouponResponse**](../Model/DeleteProductCouponResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCoupon()`

```php
getProductCoupon($product, $coupon, $filter): \Everyday\GmodStore\Sdk\Model\GetProductCouponResponse
```

Show the specified coupon for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$coupon = 'coupon_example'; // string
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter(); // \Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter | Filter the results

try {
    $result = $apiInstance->getProductCoupon($product, $coupon, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCouponsApi->getProductCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **coupon** | **string**|  |
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductPurchaseFilter**](../Model/.md)| Filter the results | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetProductCouponResponse**](../Model/GetProductCouponResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductCoupons()`

```php
listProductCoupons($product, $perPage, $cursor, $filter): object
```

List all coupons for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductCouponsApi(
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
    $result = $apiInstance->listProductCoupons($product, $perPage, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCouponsApi->listProductCoupons: ', $e->getMessage(), PHP_EOL;
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

## `updateProductCoupon()`

```php
updateProductCoupon($product, $coupon, $updateProductCouponPayload): \Everyday\GmodStore\Sdk\Model\UpdateProductCouponResponse
```

Update the specified coupon for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$coupon = 'coupon_example'; // string
$updateProductCouponPayload = new \Everyday\GmodStore\Sdk\Model\UpdateProductCouponPayload(); // \Everyday\GmodStore\Sdk\Model\UpdateProductCouponPayload

try {
    $result = $apiInstance->updateProductCoupon($product, $coupon, $updateProductCouponPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCouponsApi->updateProductCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **coupon** | **string**|  |
 **updateProductCouponPayload** | [**\Everyday\GmodStore\Sdk\Model\UpdateProductCouponPayload**](../Model/UpdateProductCouponPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdateProductCouponResponse**](../Model/UpdateProductCouponResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
