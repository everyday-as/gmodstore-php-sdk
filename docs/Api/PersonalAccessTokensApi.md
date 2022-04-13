# Everyday\GmodStore\Sdk\PersonalAccessTokensApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPersonalAccessToken()**](PersonalAccessTokensApi.md#createPersonalAccessToken) | **POST** /api/v3/me/personal-access-tokens | Create a new personal access token for the current user
[**deletePersonalAccessToken()**](PersonalAccessTokensApi.md#deletePersonalAccessToken) | **DELETE** /api/v3/me/personal-access-tokens/{personal_access_token} | Delete the specified personal access token
[**getPersonalAccessToken()**](PersonalAccessTokensApi.md#getPersonalAccessToken) | **GET** /api/v3/me/personal-access-tokens/{personal_access_token} | Get a personal access token belonging to the current user
[**listPersonalAccessTokens()**](PersonalAccessTokensApi.md#listPersonalAccessTokens) | **GET** /api/v3/me/personal-access-tokens | List all the current user&#39;s personal access tokens
[**updatePersonalAccessToken()**](PersonalAccessTokensApi.md#updatePersonalAccessToken) | **PUT** /api/v3/me/personal-access-tokens/{personal_access_token} | Update a personal access token


## `createPersonalAccessToken()`

```php
createPersonalAccessToken($newPersonalAccessTokenPayload): \Everyday\GmodStore\Sdk\Model\InlineResponse201
```

Create a new personal access token for the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newPersonalAccessTokenPayload = new \Everyday\GmodStore\Sdk\Model\NewPersonalAccessTokenPayload(); // \Everyday\GmodStore\Sdk\Model\NewPersonalAccessTokenPayload

try {
    $result = $apiInstance->createPersonalAccessToken($newPersonalAccessTokenPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalAccessTokensApi->createPersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newPersonalAccessTokenPayload** | [**\Everyday\GmodStore\Sdk\Model\NewPersonalAccessTokenPayload**](../Model/NewPersonalAccessTokenPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersonalAccessToken()`

```php
deletePersonalAccessToken($personalAccessToken): \Everyday\GmodStore\Sdk\Model\DeleteTeamResponse
```

Delete the specified personal access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personalAccessToken = 'personalAccessToken_example'; // string

try {
    $result = $apiInstance->deletePersonalAccessToken($personalAccessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalAccessTokensApi->deletePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalAccessToken** | **string**|  |

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

## `getPersonalAccessToken()`

```php
getPersonalAccessToken($personalAccessToken): \Everyday\GmodStore\Sdk\Model\GetPersonalAccessTokenResponse
```

Get a personal access token belonging to the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personalAccessToken = 'personalAccessToken_example'; // string

try {
    $result = $apiInstance->getPersonalAccessToken($personalAccessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalAccessTokensApi->getPersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalAccessToken** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetPersonalAccessTokenResponse**](../Model/GetPersonalAccessTokenResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPersonalAccessTokens()`

```php
listPersonalAccessTokens($perPage, $cursor): object
```

List all the current user's personal access tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after

try {
    $result = $apiInstance->listPersonalAccessTokens($perPage, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalAccessTokensApi->listPersonalAccessTokens: ', $e->getMessage(), PHP_EOL;
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

## `updatePersonalAccessToken()`

```php
updatePersonalAccessToken($personalAccessToken): \Everyday\GmodStore\Sdk\Model\UpdatePersonalAccessTokenResponse
```

Update a personal access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personalAccessToken = 'personalAccessToken_example'; // string

try {
    $result = $apiInstance->updatePersonalAccessToken($personalAccessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalAccessTokensApi->updatePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalAccessToken** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdatePersonalAccessTokenResponse**](../Model/UpdatePersonalAccessTokenResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
