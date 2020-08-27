# Everyday\GmodStore\SDK\AddonVersionsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonVersion**](AddonVersionsApi.md#createaddonversion) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
[**downloadAddonVersion**](AddonVersionsApi.md#downloadaddonversion) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
[**getAddonVersion**](AddonVersionsApi.md#getaddonversion) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
[**listAddonVersions**](AddonVersionsApi.md#listaddonversions) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
[**updateAddonVersion**](AddonVersionsApi.md#updateaddonversion) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon

# **createAddonVersion**
> \Everyday\GmodStore\SDK\Model\AddonVersionResponse createAddonVersion($name, $changelog, $file, $release_type, $addon_id, $with)

Create a new version for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\AddonVersionsApi(
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
    $result = $apiInstance->createAddonVersion($name, $changelog, $file, $release_type, $addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->createAddonVersion: ', $e->getMessage(), PHP_EOL;
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

[**\Everyday\GmodStore\SDK\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadAddonVersion**
> \Everyday\GmodStore\SDK\Model\AddonDownloadResponse downloadAddonVersion($addon_id, $version_id)

Generate a download token for a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version

try {
    $result = $apiInstance->downloadAddonVersion($addon_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->downloadAddonVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |

### Return type

[**\Everyday\GmodStore\SDK\Model\AddonDownloadResponse**](../Model/AddonDownloadResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddonVersion**
> \Everyday\GmodStore\SDK\Model\AddonVersionResponse getAddonVersion($addon_id, $version_id, $with)

Fetch a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->getAddonVersion($addon_id, $version_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->getAddonVersion: ', $e->getMessage(), PHP_EOL;
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

[**\Everyday\GmodStore\SDK\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddonVersions**
> \Everyday\GmodStore\SDK\Model\AddonVersionListResponse listAddonVersions($addon_id, $with)

Fetch all the versions of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonVersion schema

try {
    $result = $apiInstance->listAddonVersions($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->listAddonVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonVersion schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\AddonVersionListResponse**](../Model/AddonVersionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddonVersion**
> \Everyday\GmodStore\SDK\Model\AddonVersionResponse updateAddonVersion($name, $changelog, $release_type, $addon_id, $version_id, $with)

Update a version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\AddonVersionsApi(
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
    $result = $apiInstance->updateAddonVersion($name, $changelog, $release_type, $addon_id, $version_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->updateAddonVersion: ', $e->getMessage(), PHP_EOL;
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

[**\Everyday\GmodStore\SDK\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

