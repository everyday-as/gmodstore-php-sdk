# Everyday\GmodStore\Sdk\AdventCalendarApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdventCalendarStats**](AdventCalendarApi.md#getAdventCalendarStats) | **GET** /events/advent-calendar/stats | Fetch statistics relating to the advent calendar event



## getAdventCalendarStats

> \Everyday\GmodStore\Sdk\Model\AdventCalendarStatsResponse getAdventCalendarStats()

Fetch statistics relating to the advent calendar event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AdventCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAdventCalendarStats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdventCalendarApi->getAdventCalendarStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everyday\GmodStore\Sdk\Model\AdventCalendarStatsResponse**](../Model/AdventCalendarStatsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

