# Everyday\GmodStore\Sdk\AddonReviewsApi

All URIs are relative to *https://api.gmodstore.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddonReview**](AddonReviewsApi.md#getaddonreview) | **GET** /addons/{addon_id}/reviews/{review_id} | Fetch a review of an addon
[**listAddonReviews**](AddonReviewsApi.md#listaddonreviews) | **GET** /addons/{addon_id}/reviews | Fetch all the reviews of an addon

# **getAddonReview**
> \Everyday\GmodStore\Sdk\Model\AddonReviewResponse getAddonReview($addon_id, $review_id, $with)

Fetch a review of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$review_id = 789; // int | Id of the review
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonReview`

try {
    $result = $apiInstance->getAddonReview($addon_id, $review_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonReviewsApi->getAddonReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **review_id** | **int**| Id of the review |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonReview&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonReviewResponse**](../Model/AddonReviewResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddonReviews**
> \Everyday\GmodStore\Sdk\Model\AddonReviewListResponse listAddonReviews($addon_id, $with)

Fetch all the reviews of an addon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Everyday\GmodStore\Sdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everyday\GmodStore\Sdk\Api\AddonReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addon_id = 789; // int | Id of the addon
$with = array("with_example"); // string[] | The relations you want to fetch with the `AddonReview`

try {
    $result = $apiInstance->listAddonReviews($addon_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonReviewsApi->listAddonReviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addon_id** | **int**| Id of the addon |
 **with** | [**string[]**](../Model/string.md)| The relations you want to fetch with the &#x60;AddonReview&#x60; | [optional]

### Return type

[**\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse**](../Model/AddonReviewListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

