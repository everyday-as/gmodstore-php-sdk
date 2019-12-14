# Everyday\GmodStoreSDK\TeamUsersApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamsTeamIdUsersGet**](TeamUsersApi.md#teamsteamidusersget) | **GET** /teams/{team_id}/users | Fetch all the users in the given team

# **teamsTeamIdUsersGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2009 teamsTeamIdUsersGet($team_id, $with)

Fetch all the users in the given team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\TeamUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | Id of the team
$with = array("with_example"); // string[] | The relations you want to fetch with the TeamUser schema

try {
    $result = $apiInstance->teamsTeamIdUsersGet($team_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamUsersApi->teamsTeamIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| Id of the team |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the TeamUser schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
