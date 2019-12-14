# Everyday\GmodStoreSDK\AddonReviewsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addonsAddonIdReviewsGet**](AddonReviewsApi.md#addonsaddonidreviewsget) | **GET** /addons/{addon_id}/reviews | Fetch all the reviews of an addon
[**addonsAddonIdReviewsReviewIdGet**](AddonReviewsApi.md#addonsaddonidreviewsreviewidget) | **GET** /addons/{addon_id}/reviews/{review_id} | Fetch a review of an addon

# **addonsAddonIdReviewsGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2004 addonsAddonIdReviewsGet($addon_id, $with)

Fetch all the reviews of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonReview schema

try {
    $result = $apiInstance->addonsAddonIdReviewsGet($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonReviewsApi->addonsAddonIdReviewsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonReview schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addonsAddonIdReviewsReviewIdGet**
> \Everyday\GmodStoreSDK\Model\InlineResponse2005 addonsAddonIdReviewsReviewIdGet($addon_id, $review_id, $with)

Fetch a review of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Everyday\GmodStoreSDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Everyday\GmodStoreSDK\Api\AddonReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$review_id = 789; // int | Id of the review
$with = array("with_example"); // string[] | The relations you want to fetch with the AddonReview schema

try {
    $result = $apiInstance->addonsAddonIdReviewsReviewIdGet($addon_id, $review_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonReviewsApi->addonsAddonIdReviewsReviewIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **review_id** | **int**| Id of the review |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the AddonReview schema | [optional]

### Return type

[**\Everyday\GmodStoreSDK\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

