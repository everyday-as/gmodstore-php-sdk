# Everyday\GmodStore\SDK\TeamsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTeam**](TeamsApi.md#getteam) | **GET** /teams/{team_id} | Fetch a single team

# **getTeam**
> \Everyday\GmodStore\SDK\Model\InlineResponse2009 getTeam($team_id, $with)

Fetch a single team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\SDK\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\SDK\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 789; // int | Id of the team
$with = array("with_example"); // string[] | The relations you want to fetch with the Team schema

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
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the Team schema | [optional]

### Return type

[**\Everyday\GmodStore\SDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

