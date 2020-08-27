# Everyday\GmodStore\Sdk\AddonStatsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddonStats**](AddonStatsApi.md#getaddonstats) | **GET** /addons/{addon_id}/stats | Fetch all the stats for an addon

# **getAddonStats**
> \Everyday\GmodStore\Sdk\Model\AddonStatsListResponse getAddonStats($addon_id)

Fetch all the stats for an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon

try {
    $result = $apiInstance->getAddonStats($addon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonStatsApi->getAddonStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonStatsListResponse**](../Model/AddonStatsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

