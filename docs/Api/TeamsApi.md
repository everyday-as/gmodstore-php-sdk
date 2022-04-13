# Everyday\GmodStore\Sdk\TeamsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTeam()**](TeamsApi.md#createTeam) | **POST** /api/v3/teams | Create a new team
[**deleteTeam()**](TeamsApi.md#deleteTeam) | **DELETE** /api/v3/teams/{team} | Delete the specified team
[**getTeam()**](TeamsApi.md#getTeam) | **GET** /api/v3/teams/{team} | Fetch the specified team
[**getTeams()**](TeamsApi.md#getTeams) | **GET** /api/v3/teams/batch | Fetch a batch of teams by id
[**listTeams()**](TeamsApi.md#listTeams) | **GET** /api/v3/teams | List all teams
[**updateTeam()**](TeamsApi.md#updateTeam) | **PUT** /api/v3/teams/{team} | Update the specified team


## `createTeam()`

```php
createTeam($newTeamPayload): \Everyday\GmodStore\Sdk\Model\CreateTeamResponse
```

Create a new team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newTeamPayload = new \Everyday\GmodStore\Sdk\Model\NewTeamPayload(); // \Everyday\GmodStore\Sdk\Model\NewTeamPayload

try {
    $result = $apiInstance->createTeam($newTeamPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->createTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newTeamPayload** | [**\Everyday\GmodStore\Sdk\Model\NewTeamPayload**](../Model/NewTeamPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreateTeamResponse**](../Model/CreateTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTeam()`

```php
deleteTeam($team): \Everyday\GmodStore\Sdk\Model\DeleteTeamResponse
```

Delete the specified team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string

try {
    $result = $apiInstance->deleteTeam($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->deleteTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DeleteTeamResponse**](../Model/DeleteTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeam()`

```php
getTeam($team): \Everyday\GmodStore\Sdk\Model\GetTeamResponse
```

Fetch the specified team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string

try {
    $result = $apiInstance->getTeam($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetTeamResponse**](../Model/GetTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeams()`

```php
getTeams($ids): \Everyday\GmodStore\Sdk\Model\GetTeamsResponse
```

Fetch a batch of teams by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[]

try {
    $result = $apiInstance->getTeams($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetTeamsResponse**](../Model/GetTeamsResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeams()`

```php
listTeams($perPage, $cursor): object
```

List all teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after

try {
    $result = $apiInstance->listTeams($perPage, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->listTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perPage** | **int**|  | [optional] [default to 24]
 **cursor** | **string**| The cursor from which to return paginated results starting after | [optional]

### Return type

**object**

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTeam()`

```php
updateTeam($team, $updateTeamPayload): \Everyday\GmodStore\Sdk\Model\UpdateTeamResponse
```

Update the specified team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = 'team_example'; // string
$updateTeamPayload = new \Everyday\GmodStore\Sdk\Model\UpdateTeamPayload(); // \Everyday\GmodStore\Sdk\Model\UpdateTeamPayload

try {
    $result = $apiInstance->updateTeam($team, $updateTeamPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team** | **string**|  |
 **updateTeamPayload** | [**\Everyday\GmodStore\Sdk\Model\UpdateTeamPayload**](../Model/UpdateTeamPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdateTeamResponse**](../Model/UpdateTeamResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
