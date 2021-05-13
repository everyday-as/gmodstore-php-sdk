# Everyday\GmodStore\Sdk\AddonStatsApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddonStats()**](AddonStatsApi.md#getAddonStats) | **GET** /addons/{addon_id}/stats | Fetch all the stats for an addon


## `getAddonStats()`

```php
getAddonStats($addonId): \Everyday\GmodStore\Sdk\Model\AddonStatsListResponse
```

Fetch all the stats for an addon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addonId = 56; // int | Id of the addon

try {
    $result = $apiInstance->getAddonStats($addonId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonStatsApi->getAddonStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addonId** | **int**| Id of the addon |

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonStatsListResponse**](../Model/AddonStatsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
