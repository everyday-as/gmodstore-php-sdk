# GmodStore SDK
Welcome to the Gmodstore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

If PHP is not your desired language you can use the OpenAPI yaml to generate your own SDK for your preferred language. The OpenAPI yaml can be found here:

https://github.com/Everyday-AS/gmodstore-api-docs/blob/master/openapi.yaml

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/gmodstore-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) first. Here is an example of how to use the PHP SDK to dump a list of addons:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_key = 'REPLACE ME';

$config = new \Everyday\GmodStoreSDK\Configuration();
$config->setApiKey('Authorization', $api_key);
$config->setApiKeyPrefix('Authorization', 'Bearer');

$addonsApi = new \Everyday\GmodStoreSDK\Api\AddonsApi(null, $config);

die(var_dump($addonsApi->addonsGet(['team'])->getData()));
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.gmodstore.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddonCouponsApi* | [**addonsAddonIdCouponsCouponIdDelete**](docs/Api/AddonCouponsApi.md#addonsaddonidcouponscouponiddelete) | **DELETE** /addons/{addon_id}/coupons/{coupon_id} | Destroy an addon&#x27;s coupon
*AddonCouponsApi* | [**addonsAddonIdCouponsCouponIdGet**](docs/Api/AddonCouponsApi.md#addonsaddonidcouponscouponidget) | **GET** /addons/{addon_id}/coupons/{coupon_id} | Fetch an addon&#x27;s coupon
*AddonCouponsApi* | [**addonsAddonIdCouponsCouponIdPut**](docs/Api/AddonCouponsApi.md#addonsaddonidcouponscouponidput) | **PUT** /addons/{addon_id}/coupons/{coupon_id} | Update an addon&#x27;s coupon
*AddonCouponsApi* | [**addonsAddonIdCouponsGet**](docs/Api/AddonCouponsApi.md#addonsaddonidcouponsget) | **GET** /addons/{addon_id}/coupons | Fetch all the coupons for an addon
*AddonCouponsApi* | [**addonsAddonIdCouponsPost**](docs/Api/AddonCouponsApi.md#addonsaddonidcouponspost) | **POST** /addons/{addon_id}/coupons | Create an addon coupon
*AddonPurchasesApi* | [**addonsAddonIdPurchasesGet**](docs/Api/AddonPurchasesApi.md#addonsaddonidpurchasesget) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
*AddonPurchasesApi* | [**addonsAddonIdPurchasesPost**](docs/Api/AddonPurchasesApi.md#addonsaddonidpurchasespost) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
*AddonPurchasesApi* | [**addonsAddonIdPurchasesUserIdGet**](docs/Api/AddonPurchasesApi.md#addonsaddonidpurchasesuseridget) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
*AddonPurchasesApi* | [**addonsAddonIdPurchasesUserIdPut**](docs/Api/AddonPurchasesApi.md#addonsaddonidpurchasesuseridput) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon
*AddonReviewsApi* | [**addonsAddonIdReviewsGet**](docs/Api/AddonReviewsApi.md#addonsaddonidreviewsget) | **GET** /addons/{addon_id}/reviews | Fetch all the reviews of an addon
*AddonReviewsApi* | [**addonsAddonIdReviewsReviewIdGet**](docs/Api/AddonReviewsApi.md#addonsaddonidreviewsreviewidget) | **GET** /addons/{addon_id}/reviews/{review_id} | Fetch a review of an addon
*AddonVersionsApi* | [**addonsAddonIdVersionsGet**](docs/Api/AddonVersionsApi.md#addonsaddonidversionsget) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
*AddonVersionsApi* | [**addonsAddonIdVersionsPost**](docs/Api/AddonVersionsApi.md#addonsaddonidversionspost) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
*AddonVersionsApi* | [**addonsAddonIdVersionsVersionIdDownloadGet**](docs/Api/AddonVersionsApi.md#addonsaddonidversionsversioniddownloadget) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
*AddonVersionsApi* | [**addonsAddonIdVersionsVersionIdGet**](docs/Api/AddonVersionsApi.md#addonsaddonidversionsversionidget) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
*AddonVersionsApi* | [**addonsAddonIdVersionsVersionIdPut**](docs/Api/AddonVersionsApi.md#addonsaddonidversionsversionidput) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon
*AddonsApi* | [**addonsAddonIdGet**](docs/Api/AddonsApi.md#addonsaddonidget) | **GET** /addons/{addon_id} | Fetch a single addon
*AddonsApi* | [**addonsGet**](docs/Api/AddonsApi.md#addonsget) | **GET** /addons | Fetch all the addons that you have access to
*TeamUsersApi* | [**teamsTeamIdUsersGet**](docs/Api/TeamUsersApi.md#teamsteamidusersget) | **GET** /teams/{team_id}/users | Fetch all the users in the given team
*TeamsApi* | [**teamsTeamIdGet**](docs/Api/TeamsApi.md#teamsteamidget) | **GET** /teams/{team_id} | Fetch a single team
*UserAddonsApi* | [**usersUserIdAddonsGet**](docs/Api/UserAddonsApi.md#usersuseridaddonsget) | **GET** /users/{user_id}/addons | Fetch all the addons authored / co-authored by a user
*UserBadgesApi* | [**usersUserIdBadgesBadgeIdDelete**](docs/Api/UserBadgesApi.md#usersuseridbadgesbadgeiddelete) | **DELETE** /users/{user_id}/badges/{badge_id} | Destroy a users&#x27;s badge
*UserBadgesApi* | [**usersUserIdBadgesGet**](docs/Api/UserBadgesApi.md#usersuseridbadgesget) | **GET** /users/{user_id}/badges | Fetch all the badges a user has
*UserBadgesApi* | [**usersUserIdBadgesPost**](docs/Api/UserBadgesApi.md#usersuseridbadgespost) | **POST** /users/{user_id}/badges | Give a user a badge
*UserBansApi* | [**usersUserIdBansGet**](docs/Api/UserBansApi.md#usersuseridbansget) | **GET** /users/{user_id}/bans | Fetch all active bans associated with this user
*UserPurchasesApi* | [**usersUserIdPurchasesGet**](docs/Api/UserPurchasesApi.md#usersuseridpurchasesget) | **GET** /users/{user_id}/purchases | Fetch all purchases a user has made
*UserTeamsApi* | [**usersUserIdTeamsGet**](docs/Api/UserTeamsApi.md#usersuseridteamsget) | **GET** /users/{user_id}/teams | Fetch all the teams of a user
*UsersApi* | [**usersMeGet**](docs/Api/UsersApi.md#usersmeget) | **GET** /users/me | Fetches the current user (API Key Owner)
*UsersApi* | [**usersUserIdGet**](docs/Api/UsersApi.md#usersuseridget) | **GET** /users/{user_id} | Fetch a single user

## Documentation For Models

 - [Addon](docs/Model/Addon.md)
 - [AddonCoupon](docs/Model/AddonCoupon.md)
 - [AddonDownload](docs/Model/AddonDownload.md)
 - [AddonImages](docs/Model/AddonImages.md)
 - [AddonPrice](docs/Model/AddonPrice.md)
 - [AddonPriceOriginal](docs/Model/AddonPriceOriginal.md)
 - [AddonPurchase](docs/Model/AddonPurchase.md)
 - [AddonReview](docs/Model/AddonReview.md)
 - [AddonVersion](docs/Model/AddonVersion.md)
 - [Ban](docs/Model/Ban.md)
 - [Error](docs/Model/Error.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponseDefault](docs/Model/InlineResponseDefault.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderItemPrice](docs/Model/OrderItemPrice.md)
 - [PermissionGroup](docs/Model/PermissionGroup.md)
 - [Team](docs/Model/Team.md)
 - [TeamUser](docs/Model/TeamUser.md)
 - [User](docs/Model/User.md)
 - [UserBadgeLegend](docs/Model/UserBadgeLegend.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



