# Everyday\GmodStore\Sdk\TeamUsersApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTeamUsers**](TeamUsersApi.md#listteamusers) | **GET** /teams/{team_id}/users | Fetch all the users in the given team

# **listTeamUsers**
> \Everyday\GmodStore\Sdk\Model\TeamUserListResponse listTeamUsers($team_id, $with)

Fetch all the users in the given team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | Id of the team
$with = array("with_example"); // string[] | The relations you want to fetch with the `TeamUser`

try {
    $result = $apiInstance->listTeamUsers($team_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamUsersApi->listTeamUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| Id of the team |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;TeamUser&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\TeamUserListResponse**](../Model/TeamUserListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

