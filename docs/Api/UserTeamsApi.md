# Everyday\GmodStore\SDK\UserTeamsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserTeams**](UserTeamsApi.md#listuserteams) | **GET** /users/{user_id}/teams | Fetch all the teams of a user

# **listUserTeams**
> \Everyday\GmodStore\SDK\Model\TeamListResponse listUserTeams($user_id, $with)

Fetch all the teams of a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\UserTeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the Team schema

try {
    $result = $apiInstance->listUserTeams($user_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTeamsApi->listUserTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the Team schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\TeamListResponse**](../Model/TeamListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

