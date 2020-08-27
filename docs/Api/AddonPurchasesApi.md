# Everyday\GmodStore\Sdk\AddonPurchasesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddonPurchase**](AddonPurchasesApi.md#createAddonPurchase) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
[**getAddonPurchase**](AddonPurchasesApi.md#getAddonPurchase) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
[**listAddonPurchases**](AddonPurchasesApi.md#listAddonPurchases) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
[**updateAddonPurchase**](AddonPurchasesApi.md#updateAddonPurchase) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon



## createAddonPurchase

> \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse createAddonPurchase($addon_id, $new_addon_purchase, $with)

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
$addon_id = 56; // int | Id of the addon
$new_addon_purchase = new \Everyday\GmodStore\Sdk\Model\NewAddonPurchase(); // \Everyday\GmodStore\Sdk\Model\NewAddonPurchase | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->createAddonPurchase($addon_id, $new_addon_purchase, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->createAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **new_addon_purchase** | [**\Everyday\GmodStore\Sdk\Model\NewAddonPurchase**](../Model/NewAddonPurchase.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAddonPurchase

> \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse getAddonPurchase($addon_id, $user_id, $with)

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
$addon_id = 56; // int | Id of the addon
$user_id = 56; // int | Id of the user
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

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
 **user_id** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAddonPurchases

> \Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse listAddonPurchases($addon_id, $with)

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
$addon_id = 56; // int | Id of the addon
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

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
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse**](../Model/AddonPurchaseListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAddonPurchase

> \Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse updateAddonPurchase($addon_id, $user_id, $addon_purchase, $with)

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
$addon_id = 56; // int | Id of the addon
$user_id = 56; // int | Id of the user
$addon_purchase = new \Everyday\GmodStore\Sdk\Model\AddonPurchase(); // \Everyday\GmodStore\Sdk\Model\AddonPurchase | 
$with = array('with_example'); // string[] | The relations you want to fetch with the `AddonPurchase`

try {
    $result = $apiInstance->updateAddonPurchase($addon_id, $user_id, $addon_purchase, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonPurchasesApi->updateAddonPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **user_id** | **int**| Id of the user |
 **addon_purchase** | [**\Everyday\GmodStore\Sdk\Model\AddonPurchase**](../Model/AddonPurchase.md)|  |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseResponse**](../Model/AddonPurchaseResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

