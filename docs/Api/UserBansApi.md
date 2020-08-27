# Everyday\GmodStore\SDK\UserBansApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserBans**](UserBansApi.md#listuserbans) | **GET** /users/{user_id}/bans | Fetch all active bans associated with this user

# **listUserBans**
> \Everyday\GmodStore\SDK\Model\BanListResponse listUserBans($user_id)

Fetch all active bans associated with this user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserBansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user

try {
    $result = $apiInstance->listUserBans($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserBansApi->listUserBans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |

### Return type

[**\Everyday\GmodStore\SDK\Model\BanListResponse**](../Model/BanListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

