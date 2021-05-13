# Everyday\GmodStore\Sdk\AddonsApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddon()**](AddonsApi.md#getAddon) | **GET** /addons/{addon_id} | Fetch a single addon
[**listSelfAddons()**](AddonsApi.md#listSelfAddons) | **GET** /addons | Fetch all the addons that you have access to


## `getAddon()`

```php
getAddon($addonId, $with): \Everyday\GmodStore\Sdk\Model\AddonResponse
```

Fetch a single addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `Addon`

try {
    $result = $apiInstance->getAddon($addonId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->getAddon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;Addon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonResponse**](../Model/AddonResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSelfAddons()`

```php
listSelfAddons($with): \Everyday\GmodStore\Sdk\Model\AddonListResponse1
```

Fetch all the addons that you have access to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array('with_example'); // string[] | The relations you want to fetch with the `Addon`

try {
    $result = $apiInstance->listSelfAddons($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->listSelfAddons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;Addon&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonListResponse1**](../Model/AddonListResponse1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
