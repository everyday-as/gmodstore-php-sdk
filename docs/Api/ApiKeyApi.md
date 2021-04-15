# Everyday\GmodStore\Sdk\ApiKeyApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentApiKey**](ApiKeyApi.md#getCurrentApiKey) | **GET** /me | Get meta information about the current API key



## getCurrentApiKey

> \Everyday\GmodStore\Sdk\Model\AddonListResponse getCurrentApiKey($with)

Get meta information about the current API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array('with_example'); // string[] | The relations you want to fetch with the `User`

try {
    $result = $apiInstance->getCurrentApiKey($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->getCurrentApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;User&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonListResponse**](../Model/AddonListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

