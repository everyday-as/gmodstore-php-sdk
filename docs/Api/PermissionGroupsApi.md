# Everyday\GmodStore\Sdk\PermissionGroupsApi

All URIs are relative to https://www.gmodstore.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPermissionGroup()**](PermissionGroupsApi.md#createPermissionGroup) | **POST** /api/v3/permission-groups | Create a permission group
[**deletePermissionGroup()**](PermissionGroupsApi.md#deletePermissionGroup) | **DELETE** /api/v3/permission-groups/{permission_group} | Delete the specified permission group
[**getPermissionGroup()**](PermissionGroupsApi.md#getPermissionGroup) | **GET** /api/v3/permission-groups/{permission_group} | Show the specified permission group
[**listPermissionGroups()**](PermissionGroupsApi.md#listPermissionGroups) | **GET** /api/v3/permission-groups | List all permission groups
[**updatePermissionGroup()**](PermissionGroupsApi.md#updatePermissionGroup) | **PUT** /api/v3/permission-groups/{permission_group} | Update the specified permission group


## `createPermissionGroup()`

```php
createPermissionGroup($newPermissionGroupPayload): \Everyday\GmodStore\Sdk\Model\CreatePermissionGroupResponse
```

Create a permission group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newPermissionGroupPayload = new \Everyday\GmodStore\Sdk\Model\NewPermissionGroupPayload(); // \Everyday\GmodStore\Sdk\Model\NewPermissionGroupPayload

try {
    $result = $apiInstance->createPermissionGroup($newPermissionGroupPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->createPermissionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newPermissionGroupPayload** | [**\Everyday\GmodStore\Sdk\Model\NewPermissionGroupPayload**](../Model/NewPermissionGroupPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\CreatePermissionGroupResponse**](../Model/CreatePermissionGroupResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePermissionGroup()`

```php
deletePermissionGroup($permissionGroup): \Everyday\GmodStore\Sdk\Model\DeletePermissionGroupResponse
```

Delete the specified permission group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissionGroup = 'permissionGroup_example'; // string

try {
    $result = $apiInstance->deletePermissionGroup($permissionGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->deletePermissionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permissionGroup** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\DeletePermissionGroupResponse**](../Model/DeletePermissionGroupResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermissionGroup()`

```php
getPermissionGroup($permissionGroup): \Everyday\GmodStore\Sdk\Model\GetPermissionGroupResponse
```

Show the specified permission group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissionGroup = 'permissionGroup_example'; // string

try {
    $result = $apiInstance->getPermissionGroup($permissionGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->getPermissionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permissionGroup** | **string**|  |

### Return type

[**\Everyday\GmodStore\Sdk\Model\GetPermissionGroupResponse**](../Model/GetPermissionGroupResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPermissionGroups()`

```php
listPermissionGroups($perPage, $cursor): object
```

List all permission groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perPage = 24; // int
$cursor = 'cursor_example'; // string | The cursor from which to return paginated results starting after

try {
    $result = $apiInstance->listPermissionGroups($perPage, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->listPermissionGroups: ', $e->getMessage(), PHP_EOL;
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

## `updatePermissionGroup()`

```php
updatePermissionGroup($permissionGroup, $updatePermissionGroupPayload): \Everyday\GmodStore\Sdk\Model\UpdatePermissionGroupResponse
```

Update the specified permission group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Personal Access Token) authorization: PersonalAccessToken
$config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\PermissionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permissionGroup = 'permissionGroup_example'; // string
$updatePermissionGroupPayload = new \Everyday\GmodStore\Sdk\Model\UpdatePermissionGroupPayload(); // \Everyday\GmodStore\Sdk\Model\UpdatePermissionGroupPayload

try {
    $result = $apiInstance->updatePermissionGroup($permissionGroup, $updatePermissionGroupPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionGroupsApi->updatePermissionGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permissionGroup** | **string**|  |
 **updatePermissionGroupPayload** | [**\Everyday\GmodStore\Sdk\Model\UpdatePermissionGroupPayload**](../Model/UpdatePermissionGroupPayload.md)|  | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\UpdatePermissionGroupResponse**](../Model/UpdatePermissionGroupResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
