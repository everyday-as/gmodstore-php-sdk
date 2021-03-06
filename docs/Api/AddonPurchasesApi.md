# Everyday\GmodStore\Sdk\AddonPurchasesApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonPurchase()**](AddonPurchasesApi.md#createAddonPurchase) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
[**getAddonPurchase()**](AddonPurchasesApi.md#getAddonPurchase) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
[**listAddonPurchases()**](AddonPurchasesApi.md#listAddonPurchases) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
[**updateAddonPurchase()**](AddonPurchasesApi.md#updateAddonPurchase) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon


## `createAddonPurchase()`

```php
createAddonPurchase($addonId, $newAddonPurchase, $with): \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse
```

Create a purchase for an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$newAddonPurchase = new \Everyday\GmodStore\Sdk\Model\NewAddonPurchase(); // \Everyday\GmodStore\Sdk\Model\NewAddonPurchase
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->createAddonPurchase($addonId, $newAddonPurchase, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->createAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **newAddonPurchase** | [**\Everyday\GmodStore\Sdk\Model\NewAddonPurchase**](../Model/NewAddonPurchase.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddonPurchase()`

```php
getAddonPurchase($addonId, $userId, $with): \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse
```

Get a purchase of an addon by user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$userId = 56; // int | Id of the user
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->getAddonPurchase($addonId, $userId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->getAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **userId** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAddonPurchases()`

```php
listAddonPurchases($addonId, $with): \Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse
```

Fetch all purchases of an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->listAddonPurchases($addonId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->listAddonPurchases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse**](../Model/AddonPurchaseListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAddonPurchase()`

```php
updateAddonPurchase($addonId, $userId, $addonPurchase, $with): \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse
```

Update a purchase for an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon
$userId = 56; // int | Id of the user
$addonPurchase = new \Everyday\GmodStore\Sdk\Model\AddonPurchase(); // \Everyday\GmodStore\Sdk\Model\AddonPurchase
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->updateAddonPurchase($addonId, $userId, $addonPurchase, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->updateAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |
 **userId** | **int**| Id of the user |
 **addonPurchase** | [**\Everyday\GmodStore\Sdk\Model\AddonPurchase**](../Model/AddonPurchase.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
