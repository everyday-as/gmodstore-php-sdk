# Everyday\GmodStore\Sdk\AddonVersionsApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonVersion()**](AddonVersionsApi.md#createAddonVersion) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
[**downloadAddonVersion()**](AddonVersionsApi.md#downloadAddonVersion) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
[**getAddonVersion()**](AddonVersionsApi.md#getAddonVersion) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
[**listAddonVersions()**](AddonVersionsApi.md#listAddonVersions) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
[**updateAddonVersion()**](AddonVersionsApi.md#updateAddonVersion) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon


## `createAddonVersion()`

```php
createAddonVersion($addonId, $newAddonVersion, $with): \Everyday\GmodStore\Sdk\Model\AddonVersionResponse
```

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
$addonId = 56; // int | Id of the addon
$newAddonVersion = new \Everyday\GmodStore\Sdk\Model\NewAddonVersion(); // \Everyday\GmodStore\Sdk\Model\NewAddonVersion
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->createAddonVersion($addonId, $newAddonVersion, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->createAddonVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **newAddonVersion** | [**\Everyday\GmodStore\Sdk\Model\NewAddonVersion**](../Model/NewAddonVersion.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAddonVersion()`

```php
downloadAddonVersion($addonId, $versionId): \Everyday\GmodStore\Sdk\Model\AddonDownloadResponse
```

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
$addonId = 56; // int | Id of the addon
$versionId = 56; // int | Id of the version

try {
    $result = $apiInstance->downloadAddonVersion($addonId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->downloadAddonVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **versionId** | **int**| Id of the version |

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonDownloadResponse**](../Model/AddonDownloadResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddonVersion()`

```php
getAddonVersion($addonId, $versionId, $with): \Everyday\GmodStore\Sdk\Model\AddonVersionResponse
```

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
$addonId = 56; // int | Id of the addon
$versionId = 56; // int | Id of the version
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->getAddonVersion($addonId, $versionId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->getAddonVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **versionId** | **int**| Id of the version |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddonVersions()`

```php
listAddonVersions($addonId, $with): \Everyday\GmodStore\Sdk\Model\AddonVersionListResponse
```

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
$addonId = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->listAddonVersions($addonId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->listAddonVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionListResponse**](../Model/AddonVersionListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAddonVersion()`

```php
updateAddonVersion($addonId, $versionId, $addonVersion, $with): \Everyday\GmodStore\Sdk\Model\AddonVersionResponse
```

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
$addonId = 56; // int | Id of the addon
$versionId = 56; // int | Id of the version
$addonVersion = new \Everyday\GmodStore\Sdk\Model\AddonVersion(); // \Everyday\GmodStore\Sdk\Model\AddonVersion
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonVersion`

try {
    $result = $apiInstance->updateAddonVersion($addonId, $versionId, $addonVersion, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonVersionsApi->updateAddonVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **versionId** | **int**| Id of the version |
 **addonVersion** | [**\Everyday\GmodStore\Sdk\Model\AddonVersion**](../Model/AddonVersion.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonVersion&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonVersionResponse**](../Model/AddonVersionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
