# Everyday\GmodStoreSDK\AddonsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addonsAddonIdGet**](AddonsApi.md#addonsaddonidget) | **GET** /addons/{addon_id} | Fetch a single addon
[**addonsGet**](AddonsApi.md#addonsget) | **GET** /addons | Fetch all the addons that you have access to

# **addonsAddonIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2001 addonsAddonIdGet($addon_id, $with)

Fetch a single addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the Addon schema

try {
    $result = $apiInstance->addonsAddonIdGet($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsAddonIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the Addon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse200 addonsGet($with)

Fetch all the addons that you have access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array("with_example"); // string[] | The relations you want to fetch with the Addon schema

try {
    $result = $apiInstance->addonsGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the Addon schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

