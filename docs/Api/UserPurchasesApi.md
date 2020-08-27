# Everyday\GmodStore\Sdk\UserPurchasesApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserPurchases**](UserPurchasesApi.md#listuserpurchases) | **GET** /users/{user_id}/purchases | Fetch all purchases a user has made

# **listUserPurchases**
> \Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse listUserPurchases($user_id, $with)

Fetch all purchases a user has made

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserPurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonPurchase`

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
 **user_id** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonPurchase&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonPurchaseListResponse**](../Model/AddonPurchaseListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

