# Everyday\GmodStore\SDK\UsersApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSelfUser**](UsersApi.md#getselfuser) | **GET** /users/me | Fetches the current user (API Key Owner)
[**getUser**](UsersApi.md#getuser) | **GET** /users/{user_id} | Fetch a single user

# **getSelfUser**
> \Everyday\GmodStore\SDK\Model\InlineResponse20011 getSelfUser($with)

Fetches the current user (API Key Owner)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array("with_example"); // string[] | The relations you want to fetch with the User schema

try {
    $result = $apiInstance->getSelfUser($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSelfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the User schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Everyday\GmodStore\SDK\Model\InlineResponse20011 getUser($user_id, $with)

Fetch a single user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the User schema

try {
    $result = $apiInstance->getUser($user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the User schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

