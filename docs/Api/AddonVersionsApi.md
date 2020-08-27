# Everyday\GmodStore\Sdk\AddonVersionsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonVersion**](AddonVersionsApi.md#createAddonVersion) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
[**downloadAddonVersion**](AddonVersionsApi.md#downloadAddonVersion) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
[**getAddonVersion**](AddonVersionsApi.md#getAddonVersion) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
[**listAddonVersions**](AddonVersionsApi.md#listAddonVersions) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
[**updateAddonVersion**](AddonVersionsApi.md#updateAddonVersion) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon



## createAddonVersion

> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse createAddonVersion($addon_id, $new_addon_version, $with)

Create a new version for an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 56; // int | Id of the addon
$new_addon_version = new \Everyday\GmodStore\Sdk\Model\NewAddonVersion(); // \Everyday\GmodStore\Sdk\Model\NewAddonVersion | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->createAddonVersion($addon_id, $new_addon_version, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->createAddonVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **new_addon_version** | [**\Everyday\GmodStore\Sdk\Model\NewAddonVersion**](../Model/NewAddonVersion.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadAddonVersion

> \Everyday\GmodStore\Sdk\Model\AddonDownloadResponse downloadAddonVersion($addon_id, $version_id)

Generate a download token for a specific version of an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 56; // int | Id of the addon
$version_id = 56; // int | Id of the version

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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAddonVersion

> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse getAddonVersion($addon_id, $version_id, $with)

Fetch a specific version of an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 56; // int | Id of the addon
$version_id = 56; // int | Id of the version
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAddonVersions

> \Everyday\GmodStore\Sdk\Model\AddonVersionListResponse listAddonVersions($addon_id, $with)

Fetch all the versions of an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAddonVersion

> \Everyday\GmodStore\Sdk\Model\AddonVersionResponse updateAddonVersion($addon_id, $version_id, $addon_version, $with)

Update a version of an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 56; // int | Id of the addon
$version_id = 56; // int | Id of the version
$addon_version = new \Everyday\GmodStore\Sdk\Model\AddonVersion(); // \Everyday\GmodStore\Sdk\Model\AddonVersion | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->updateAddonVersion($addon_id, $version_id, $addon_version, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->updateAddonVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **version_id** | **int**| Id of the version |
 **addon_version** | [**\Everyday\GmodStore\Sdk\Model\AddonVersion**](../Model/AddonVersion.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

