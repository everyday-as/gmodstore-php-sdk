# Everyday\GmodStoreSDK\AddonPurchasesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonPurchase**](AddonPurchasesApi.md#createaddonpurchase) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
[**getAddonPurchase**](AddonPurchasesApi.md#getaddonpurchase) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
[**listAddonPurchases**](AddonPurchasesApi.md#listaddonpurchases) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
[**updateAddonPurchase**](AddonPurchasesApi.md#updateaddonpurchase) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon

# **createAddonPurchase**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 createAddonPurchase($body, $addon_id, $with)

Create a purchase for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Everyday\GmodStoreSDK\Model\AddonPurchaseCreateBody(); // \Everyday\GmodStoreSDK\Model\AddonPurchaseCreateBody | 
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->createAddonPurchase($body, $addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->createAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Everyday\GmodStoreSDK\Model\AddonPurchaseCreateBody**](../Model/AddonPurchaseCreateBody.md)|  |
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddonPurchase**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 getAddonPurchase($addon_id, $user_id, $with)

Get a purchase of an addon by user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->getAddonPurchase($addon_id, $user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->getAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddonPurchases**
> \Everyday\GmodStoreSDK\Model\InlineResponse2004 listAddonPurchases($addon_id, $with)

Fetch all purchases of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->listAddonPurchases($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->listAddonPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddonPurchase**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 updateAddonPurchase($body, $addon_id, $user_id, $with)

Update a purchase for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Everyday\GmodStoreSDK\Model\AddonPurchaseUpdateBody(); // \Everyday\GmodStoreSDK\Model\AddonPurchaseUpdateBody | 
$addon_id = 789; // int | Id of the addon
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->updateAddonPurchase($body, $addon_id, $user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->updateAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Everyday\GmodStoreSDK\Model\AddonPurchaseUpdateBody**](../Model/AddonPurchaseUpdateBody.md)|  |
 **addon_id** | **int**| Id of the addon |
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

