# Everyday\GmodStoreSDK\AddonPurchasesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addonsAddonIdPurchasesGet**](AddonPurchasesApi.md#addonsaddonidpurchasesget) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
[**addonsAddonIdPurchasesPost**](AddonPurchasesApi.md#addonsaddonidpurchasespost) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
[**addonsAddonIdPurchasesUserIdGet**](AddonPurchasesApi.md#addonsaddonidpurchasesuseridget) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
[**addonsAddonIdPurchasesUserIdPut**](AddonPurchasesApi.md#addonsaddonidpurchasesuseridput) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon

# **addonsAddonIdPurchasesGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2003 addonsAddonIdPurchasesGet($addon_id, $with)

Fetch all purchases of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->addonsAddonIdPurchasesGet($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->addonsAddonIdPurchasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdPurchasesPost**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 addonsAddonIdPurchasesPost($body, $addon_id, $with)

Create a purchase for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->addonsAddonIdPurchasesPost($body, $addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->addonsAddonIdPurchasesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdPurchasesUserIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 addonsAddonIdPurchasesUserIdGet($addon_id, $user_id, $with)

Get a purchase of an addon by user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

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
    $result = $apiInstance->addonsAddonIdPurchasesUserIdGet($addon_id, $user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->addonsAddonIdPurchasesUserIdGet: ', $e->getMessage(), PHP_EOL;
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

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdPurchasesUserIdPut**
> \Everyday\GmodStoreSDK\Model\InlineResponse2011 addonsAddonIdPurchasesUserIdPut($body, $addon_id, $user_id, $with)

Update a purchase for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$addon_id = 789; // int | Id of the addon
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->addonsAddonIdPurchasesUserIdPut($body, $addon_id, $user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->addonsAddonIdPurchasesUserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **addon_id** | **int**| Id of the addon |
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

