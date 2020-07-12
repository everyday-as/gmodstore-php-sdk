# Everyday\GmodStoreSDK\AddonVersionsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addonsAddonIdVersionsGet**](AddonVersionsApi.md#addonsaddonidversionsget) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
[**addonsAddonIdVersionsPost**](AddonVersionsApi.md#addonsaddonidversionspost) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
[**addonsAddonIdVersionsVersionIdDownloadGet**](AddonVersionsApi.md#addonsaddonidversionsversioniddownloadget) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
[**addonsAddonIdVersionsVersionIdGet**](AddonVersionsApi.md#addonsaddonidversionsversionidget) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
[**addonsAddonIdVersionsVersionIdPut**](AddonVersionsApi.md#addonsaddonidversionsversionidput) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon

# **addonsAddonIdVersionsGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2007 addonsAddonIdVersionsGet($addon_id, $with)

Fetch all the versions of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->addonsAddonIdVersionsGet($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->addonsAddonIdVersionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonVersion schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdVersionsPost**
> \Everyday\GmodStoreSDK\Model\InlineResponse2012 addonsAddonIdVersionsPost($name, $changelog, $file, $release_type, $addon_id, $with)

Create a new version for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$changelog = "changelog_example"; // string | 
$file = "file_example"; // string | 
$release_type = "release_type_example"; // string | 
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->addonsAddonIdVersionsPost($name, $changelog, $file, $release_type, $addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->addonsAddonIdVersionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **changelog** | **string**|  |
 **file** | **string****string**|  |
 **release_type** | **string**|  |
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonVersion schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdVersionsVersionIdDownloadGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2008 addonsAddonIdVersionsVersionIdDownloadGet($addon_id, $version_id)

Generate a download token for a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version

try {
    $result = $apiInstance->addonsAddonIdVersionsVersionIdDownloadGet($addon_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->addonsAddonIdVersionsVersionIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdVersionsVersionIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2012 addonsAddonIdVersionsVersionIdGet($addon_id, $version_id, $with)

Fetch a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->addonsAddonIdVersionsVersionIdGet($addon_id, $version_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->addonsAddonIdVersionsVersionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonVersion schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdVersionsVersionIdPut**
> \Everyday\GmodStoreSDK\Model\InlineResponse2012 addonsAddonIdVersionsVersionIdPut($name, $changelog, $release_type, $addon_id, $version_id, $with)

Update a version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$changelog = "changelog_example"; // string | 
$release_type = "release_type_example"; // string | 
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->addonsAddonIdVersionsVersionIdPut($name, $changelog, $release_type, $addon_id, $version_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->addonsAddonIdVersionsVersionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **changelog** | **string**|  |
 **release_type** | **string**|  |
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonVersion schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

