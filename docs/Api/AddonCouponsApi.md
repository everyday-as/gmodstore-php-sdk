# Everyday\GmodStore\Sdk\AddonCouponsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonCoupon**](AddonCouponsApi.md#createAddonCoupon) | **POST** /addons/{addon_id}/coupons | Create an addon coupon
[**deleteAddonCoupon**](AddonCouponsApi.md#deleteAddonCoupon) | **DELETE** /addons/{addon_id}/coupons/{coupon_id} | Destroy an addon&#39;s coupon
[**getAddonCoupon**](AddonCouponsApi.md#getAddonCoupon) | **GET** /addons/{addon_id}/coupons/{coupon_id} | Fetch an addon&#39;s coupon
[**listAddonCoupons**](AddonCouponsApi.md#listAddonCoupons) | **GET** /addons/{addon_id}/coupons | Fetch all the coupons for an addon
[**updateAddonCoupon**](AddonCouponsApi.md#updateAddonCoupon) | **PUT** /addons/{addon_id}/coupons/{coupon_id} | Update an addon&#39;s coupon



## createAddonCoupon

> \Everyday\GmodStore\Sdk\Model\AddonCouponResponse createAddonCoupon($addonId, $addonCoupon, $with)

Create an addon coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$addonCoupon = new \Everyday\GmodStore\Sdk\Model\AddonCoupon(); // \Everyday\GmodStore\Sdk\Model\AddonCoupon | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonCoupon`

try {
    $result = $apiInstance->createAddonCoupon($addonId, $addonCoupon, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->createAddonCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **addonCoupon** | [**\Everyday\GmodStore\Sdk\Model\AddonCoupon**](../Model/AddonCoupon.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonCoupon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonCouponResponse**](../Model/AddonCouponResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAddonCoupon

> deleteAddonCoupon($addonId, $couponId)

Destroy an addon's coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$couponId = 56; // int | Id of the coupon

try {
    $apiInstance->deleteAddonCoupon($addonId, $couponId);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->deleteAddonCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **couponId** | **int**| Id of the coupon |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAddonCoupon

> \Everyday\GmodStore\Sdk\Model\AddonCouponResponse getAddonCoupon($addonId, $couponId, $with)

Fetch an addon's coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$couponId = 56; // int | Id of the coupon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonCoupon`

try {
    $result = $apiInstance->getAddonCoupon($addonId, $couponId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->getAddonCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **couponId** | **int**| Id of the coupon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonCoupon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonCouponResponse**](../Model/AddonCouponResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAddonCoupons

> \Everyday\GmodStore\Sdk\Model\AddonCouponListResponse listAddonCoupons($addonId, $with)

Fetch all the coupons for an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonCoupon`

try {
    $result = $apiInstance->listAddonCoupons($addonId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->listAddonCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonCoupon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonCouponListResponse**](../Model/AddonCouponListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAddonCoupon

> \Everyday\GmodStore\Sdk\Model\AddonCouponResponse updateAddonCoupon($addonId, $couponId, $addonCoupon, $with)

Update an addon's coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$couponId = 56; // int | Id of the coupon
$addonCoupon = new \Everyday\GmodStore\Sdk\Model\AddonCoupon(); // \Everyday\GmodStore\Sdk\Model\AddonCoupon | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonCoupon`

try {
    $result = $apiInstance->updateAddonCoupon($addonId, $couponId, $addonCoupon, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->updateAddonCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **couponId** | **int**| Id of the coupon |
 **addonCoupon** | [**\Everyday\GmodStore\Sdk\Model\AddonCoupon**](../Model/AddonCoupon.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonCoupon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonCouponResponse**](../Model/AddonCouponResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

