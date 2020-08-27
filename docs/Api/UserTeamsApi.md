# Everyday\GmodStore\Sdk\UserTeamsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUserTeams**](UserTeamsApi.md#listuserteams) | **GET** /users/{user_id}/teams | Fetch all the teams of a user

# **listUserTeams**
> \Everyday\GmodStore\Sdk\Model\TeamListResponse listUserTeams($user_id, $with)

Fetch all the teams of a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\UserTeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 789; // int | Id of the user
$with = array("with_example"); // string[] | The relations you want to fetch with the `Team`

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
 **user_id** | **int**| Id of the user |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;Team&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\TeamListResponse**](../Model/TeamListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

