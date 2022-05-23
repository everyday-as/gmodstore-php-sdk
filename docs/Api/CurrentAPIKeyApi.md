# Everyday\GmodStore\Sdk\CurrentAPIKeyApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentApiKey()**](CurrentAPIKeyApi.md#getCurrentApiKey) | **GET** /me | Get meta information about the current API key


## `getCurrentApiKey()`

```php
getCurrentApiKey($with): \Everyday\GmodStore\Sdk\Model\ApiKeyResponse
```

Get meta information about the current API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\CurrentAPIKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array('with_example'); // string[] | The relations you want to fetch with the `ApiKey`

try {
    $result = $apiInstance->getCurrentApiKey($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrentAPIKeyApi->getCurrentApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;ApiKey&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
