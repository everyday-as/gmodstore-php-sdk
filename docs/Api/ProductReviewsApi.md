# Everyday\GmodStore\Sdk\ProductReviewsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductReview()**](ProductReviewsApi.md#getProductReview) | **GET** /api/v3/products/{product}/reviews/{review} | Show the specified review for a product
[**listProductReviews()**](ProductReviewsApi.md#listProductReviews) | **GET** /api/v3/products/{product}/reviews | List all reviews for a product


## `getProductReview()`

```php
getProductReview($product, $review, $filter): \Everyday\GmodStore\Sdk\Model\GetProductReviewResponse
```

Show the specified review for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$review = 'review_example'; // string
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductReviewFilter(); // \Everyday\GmodStore\Sdk\Model\ProductReviewFilter | Filter the results

try {
    $result = $apiInstance->getProductReview($product, $review, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewsApi->getProductReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **review** | **string**|  |
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductReviewFilter**](../Model/.md)| Filter the results | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse**](../Model/GetProductReviewResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductReviews()`

```php
listProductReviews($product, $perPage, $cursor, $filter): object
```

List all reviews for a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ProductReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after
$filter = new \Everyday\GmodStore\Sdk\Model\\Everyday\GmodStore\Sdk\Model\ProductReviewFilter(); // \Everyday\GmodStore\Sdk\Model\ProductReviewFilter | Filter the results

try {
    $result = $apiInstance->listProductReviews($product, $perPage, $cursor, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReviewsApi->listProductReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  |
 **perPage** | **int**|  | [optional] [default to 24]
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]
 **filter** | [**\Everyday\GmodStore\Sdk\Model\ProductReviewFilter**](../Model/.md)| Filter the results | [optional]

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
