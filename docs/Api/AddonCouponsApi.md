# Everyday\GmodStoreSDK\AddonCouponsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addonsAddonIdCouponsCouponIdDelete**](AddonCouponsApi.md#addonsaddonidcouponscouponiddelete) | **DELETE** /addons/{addon_id}/coupons/{coupon_id} | Destroy an addon&#x27;s coupon
[**addonsAddonIdCouponsCouponIdGet**](AddonCouponsApi.md#addonsaddonidcouponscouponidget) | **GET** /addons/{addon_id}/coupons/{coupon_id} | Fetch an addon&#x27;s coupon
[**addonsAddonIdCouponsCouponIdPut**](AddonCouponsApi.md#addonsaddonidcouponscouponidput) | **PUT** /addons/{addon_id}/coupons/{coupon_id} | Update an addon&#x27;s coupon
[**addonsAddonIdCouponsGet**](AddonCouponsApi.md#addonsaddonidcouponsget) | **GET** /addons/{addon_id}/coupons | Fetch all the coupons for an addon
[**addonsAddonIdCouponsPost**](AddonCouponsApi.md#addonsaddonidcouponspost) | **POST** /addons/{addon_id}/coupons | Create an addon coupon

# **addonsAddonIdCouponsCouponIdDelete**
> addonsAddonIdCouponsCouponIdDelete($addon_id, $coupon_id)

Destroy an addon's coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$coupon_id = 789; // int | Id of the coupon

try {
    $apiInstance->addonsAddonIdCouponsCouponIdDelete($addon_id, $coupon_id);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->addonsAddonIdCouponsCouponIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **coupon_id** | **int**| Id of the coupon |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdCouponsCouponIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse201 addonsAddonIdCouponsCouponIdGet($addon_id, $coupon_id, $with)

Fetch an addon's coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$coupon_id = 789; // int | Id of the coupon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonCoupon schema

try {
    $result = $apiInstance->addonsAddonIdCouponsCouponIdGet($addon_id, $coupon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->addonsAddonIdCouponsCouponIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **coupon_id** | **int**| Id of the coupon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonCoupon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdCouponsCouponIdPut**
> \Everyday\GmodStoreSDK\Model\InlineResponse201 addonsAddonIdCouponsCouponIdPut($body, $addon_id, $coupon_id, $with)

Update an addon's coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$addon_id = 789; // int | Id of the addon
$coupon_id = 789; // int | Id of the coupon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonCoupon schema

try {
    $result = $apiInstance->addonsAddonIdCouponsCouponIdPut($body, $addon_id, $coupon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->addonsAddonIdCouponsCouponIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **addon_id** | **int**| Id of the addon |
 **coupon_id** | **int**| Id of the coupon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonCoupon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdCouponsGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2003 addonsAddonIdCouponsGet($addon_id, $with)

Fetch all the coupons for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonCoupon schema

try {
    $result = $apiInstance->addonsAddonIdCouponsGet($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->addonsAddonIdCouponsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonCoupon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdCouponsPost**
> \Everyday\GmodStoreSDK\Model\InlineResponse201 addonsAddonIdCouponsPost($body, $addon_id, $with)

Create an addon coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonCoupon schema

try {
    $result = $apiInstance->addonsAddonIdCouponsPost($body, $addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonCouponsApi->addonsAddonIdCouponsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonCoupon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

