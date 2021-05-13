# Everyday\GmodStore\Sdk\TeamAddonsApi

All URIs are relative to https://api.gmodstore.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTeamAddons()**](TeamAddonsApi.md#listTeamAddons) | **GET** /teams/{team_id}/addons | Fetch all the addons in the given team


## `listTeamAddons()`

```php
listTeamAddons($teamId): \Everyday\GmodStore\Sdk\Model\TeamUserListResponse
```

Fetch all the addons in the given team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (API Key) authorization: bearerAuth
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamAddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = 56; // int | Id of the team

try {
    $result = $apiInstance->listTeamAddons($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamAddonsApi->listTeamAddons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **int**| Id of the team |

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
