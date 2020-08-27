# Everyday\GmodStore\Sdk\TeamsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTeam**](TeamsApi.md#getteam) | **GET** /teams/{team_id} | Fetch a single team

# **getTeam**
> \Everyday\GmodStore\Sdk\Model\TeamResponse getTeam($team_id, $with)

Fetch a single team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | Id of the team
$with = array("with_example"); // string[] | The relations you want to fetch with the `Team`

try {
    $result = $apiInstance->getTeam($team_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| Id of the team |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;Team&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\TeamResponse**](../Model/TeamResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

