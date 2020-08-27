# Everyday\GmodStore\SDK\UserPurchasesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserPurchases**](UserPurchasesApi.md#listuserpurchases) | **GET** /users/{user_id}/purchases | Fetch all purchases a user has made

# **listUserPurchases**
> \Everyday\GmodStore\SDK\Model\InlineResponse2004 listUserPurchases($user_id, $with)

Fetch all purchases a user has made

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonPurchase schema

try {
    $result = $apiInstance->listUserPurchases($user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPurchasesApi->listUserPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonPurchase schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

