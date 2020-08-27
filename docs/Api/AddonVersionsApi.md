# Everyday\GmodStore\Sdk\AddonVersionsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonVersion**](AddonVersionsApi.md#createaddonversion) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
[**downloadAddonVersion**](AddonVersionsApi.md#downloadaddonversion) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
[**getAddonVersion**](AddonVersionsApi.md#getaddonversion) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
[**listAddonVersions**](AddonVersionsApi.md#listaddonversions) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
[**updateAddonVersion**](AddonVersionsApi.md#updateaddonversion) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon

# **createAddonVersion**
> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse createAddonVersion($name, $changelog, $file, $release_type, $addon_id, $with)

Create a new version for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$changelog = "changelog_example"; // string | 
$file = "file_example"; // string | 
$release_type = new \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType(); // \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType | 
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonVersion`

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
 **release_type** | [**\Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType**](../Model/.md)|  |
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadAddonVersion**
> \Everyday\GmodStore\Sdk\Model\AddonDownloadResponse downloadAddonVersion($addon_id, $version_id)

Generate a download token for a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
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

[**\Everyday\GmodStore\Sdk\Model\AddonDownloadResponse**](../Model/AddonDownloadResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddonVersion**
> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse getAddonVersion($addon_id, $version_id, $with)

Fetch a specific version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonVersion`

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
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddonVersions**
> \Everyday\GmodStore\Sdk\Model\AddonVersionListResponse listAddonVersions($addon_id, $with)

Fetch all the versions of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonVersion`

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
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionListResponse**](../Model/AddonVersionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddonVersion**
> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse updateAddonVersion($id, $name, $changelog, $file_hash, $file_size, $release_type, $created_at, $updated_at, $addon, $addon_id, $version_id, $with)

Update a version of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$name = "name_example"; // string | 
$changelog = "changelog_example"; // string | 
$file_hash = "file_hash_example"; // string | 
$file_size = 56; // int | 
$release_type = new \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType(); // \Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType | 
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$addon = new \Everyday\GmodStore\Sdk\Model\Addon(); // \Everyday\GmodStore\Sdk\Model\Addon | 
$addon_id = 789; // int | Id of the addon
$version_id = 789; // int | Id of the version
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->updateAddonVersion($id, $name, $changelog, $file_hash, $file_size, $release_type, $created_at, $updated_at, $addon, $addon_id, $version_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->updateAddonVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **name** | **string**|  |
 **changelog** | **string**|  |
 **file_hash** | **string**|  |
 **file_size** | **int**|  |
 **release_type** | [**\Everyday\GmodStore\Sdk\Model\AddonVersionReleaseType**](../Model/.md)|  |
 **created_at** | **\DateTime**|  |
 **updated_at** | **\DateTime**|  |
 **addon** | [**\Everyday\GmodStore\Sdk\Model\Addon**](../Model/.md)|  |
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

