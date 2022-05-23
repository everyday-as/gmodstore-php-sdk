# Everyday\GmodStore\Sdk\TeamUsersApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTeamUsers()**](TeamUsersApi.md#listTeamUsers) | **GET** /teams/{team_id}/users | Fetch all the users in the given team


## `listTeamUsers()`

```php
listTeamUsers($teamId, $with): \Everyday\GmodStore\Sdk\Model\TeamUserListResponse
```

Fetch all the users in the given team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Id of the team
$with = array('with_example'); // string[] | The relations you want to fetch with the `TeamUser`

try {
    $result = $apiInstance->listTeamUsers($teamId, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamUsersApi->listTeamUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **int**| Id of the team |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;TeamUser&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\TeamUserListResponse**](../Model/TeamUserListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
