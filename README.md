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

To install the library through composer, run the following command:

`composer require everyday/gmodstore-sdk`

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

// create a configuration using our $api_key
$config = new \Everyday\GmodStoreSDK\Configuration();
$config->setApiKey('Authorization', $api_key);
$config->setApiKeyPrefix('Authorization', 'Bearer');

// initialize an instance of the AddonsApi
$addonsApi = new \Everyday\GmodStoreSDK\Api\AddonsApi(null, $config);

// grab addons with the relation 'team'
die(var_dump($addonsApi->addonsGet(['team'])->getData()));
```

## Documentation for API Endpoints

All URIs are relative to *https://api.gmodstore.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddonCouponsApi* | [**createAddonCoupon**](docs/Api/AddonCouponsApi.md#createaddoncoupon) | **POST** /addons/{addon_id}/coupons | Create an addon coupon
*AddonCouponsApi* | [**deleteAddonCoupon**](docs/Api/AddonCouponsApi.md#deleteaddoncoupon) | **DELETE** /addons/{addon_id}/coupons/{coupon_id} | Destroy an addon&#x27;s coupon
*AddonCouponsApi* | [**getAddonCoupon**](docs/Api/AddonCouponsApi.md#getaddoncoupon) | **GET** /addons/{addon_id}/coupons/{coupon_id} | Fetch an addon&#x27;s coupon
*AddonCouponsApi* | [**listAddonCoupons**](docs/Api/AddonCouponsApi.md#listaddoncoupons) | **GET** /addons/{addon_id}/coupons | Fetch all the coupons for an addon
*AddonCouponsApi* | [**updateAddonCoupon**](docs/Api/AddonCouponsApi.md#updateaddoncoupon) | **PUT** /addons/{addon_id}/coupons/{coupon_id} | Update an addon&#x27;s coupon
*AddonPurchasesApi* | [**createAddonPurchase**](docs/Api/AddonPurchasesApi.md#createaddonpurchase) | **POST** /addons/{addon_id}/purchases | Create a purchase for an addon
*AddonPurchasesApi* | [**getAddonPurchase**](docs/Api/AddonPurchasesApi.md#getaddonpurchase) | **GET** /addons/{addon_id}/purchases/{user_id} | Get a purchase of an addon by user
*AddonPurchasesApi* | [**listAddonPurchases**](docs/Api/AddonPurchasesApi.md#listaddonpurchases) | **GET** /addons/{addon_id}/purchases | Fetch all purchases of an addon
*AddonPurchasesApi* | [**updateAddonPurchase**](docs/Api/AddonPurchasesApi.md#updateaddonpurchase) | **PUT** /addons/{addon_id}/purchases/{user_id} | Update a purchase for an addon
*AddonReviewsApi* | [**getAddonReview**](docs/Api/AddonReviewsApi.md#getaddonreview) | **GET** /addons/{addon_id}/reviews/{review_id} | Fetch a review of an addon
*AddonReviewsApi* | [**listAddonReviews**](docs/Api/AddonReviewsApi.md#listaddonreviews) | **GET** /addons/{addon_id}/reviews | Fetch all the reviews of an addon
*AddonStatsApi* | [**getAddonStats**](docs/Api/AddonStatsApi.md#getaddonstats) | **GET** /addons/{addon_id}/stats | Fetch all the stats for an addon
*AddonVersionsApi* | [**createAddonVersion**](docs/Api/AddonVersionsApi.md#createaddonversion) | **POST** /addons/{addon_id}/versions | Create a new version for an addon
*AddonVersionsApi* | [**downloadAddonVersion**](docs/Api/AddonVersionsApi.md#downloadaddonversion) | **GET** /addons/{addon_id}/versions/{version_id}/download | Generate a download token for a specific version of an addon
*AddonVersionsApi* | [**getAddonVersion**](docs/Api/AddonVersionsApi.md#getaddonversion) | **GET** /addons/{addon_id}/versions/{version_id} | Fetch a specific version of an addon
*AddonVersionsApi* | [**listAddonVersions**](docs/Api/AddonVersionsApi.md#listaddonversions) | **GET** /addons/{addon_id}/versions | Fetch all the versions of an addon
*AddonVersionsApi* | [**updateAddonVersion**](docs/Api/AddonVersionsApi.md#updateaddonversion) | **PUT** /addons/{addon_id}/versions/{version_id} | Update a version of an addon
*AddonsApi* | [**getAddon**](docs/Api/AddonsApi.md#getaddon) | **GET** /addons/{addon_id} | Fetch a single addon
*AddonsApi* | [**listSelfAddons**](docs/Api/AddonsApi.md#listselfaddons) | **GET** /addons | Fetch all the addons that you have access to
*TeamUsersApi* | [**listTeamUsers**](docs/Api/TeamUsersApi.md#listteamusers) | **GET** /teams/{team_id}/users | Fetch all the users in the given team
*TeamsApi* | [**getTeam**](docs/Api/TeamsApi.md#getteam) | **GET** /teams/{team_id} | Fetch a single team
*UserAddonsApi* | [**listUserAddons**](docs/Api/UserAddonsApi.md#listuseraddons) | **GET** /users/{user_id}/addons | Fetch all the addons authored / co-authored by a user
*UserBadgesApi* | [**createUserBadge**](docs/Api/UserBadgesApi.md#createuserbadge) | **POST** /users/{user_id}/badges | Give a user a badge
*UserBadgesApi* | [**deleteUserBadge**](docs/Api/UserBadgesApi.md#deleteuserbadge) | **DELETE** /users/{user_id}/badges/{badge_id} | Destroy a users&#x27;s badge
*UserBadgesApi* | [**listUserBadges**](docs/Api/UserBadgesApi.md#listuserbadges) | **GET** /users/{user_id}/badges | Fetch all the badges a user has
*UserBansApi* | [**listUserBans**](docs/Api/UserBansApi.md#listuserbans) | **GET** /users/{user_id}/bans | Fetch all active bans associated with this user
*UserPurchasesApi* | [**listUserPurchases**](docs/Api/UserPurchasesApi.md#listuserpurchases) | **GET** /users/{user_id}/purchases | Fetch all purchases a user has made
*UserTeamsApi* | [**listUserTeams**](docs/Api/UserTeamsApi.md#listuserteams) | **GET** /users/{user_id}/teams | Fetch all the teams of a user
*UsersApi* | [**getSelfUser**](docs/Api/UsersApi.md#getselfuser) | **GET** /users/me | Fetches the current user (API Key Owner)
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{user_id} | Fetch a single user

## Documentation For Models

 - [Addon](docs/Model/Addon.md)
 - [AddonCoupon](docs/Model/AddonCoupon.md)
 - [AddonCouponListResponse](docs/Model/AddonCouponListResponse.md)
 - [AddonCouponResponse](docs/Model/AddonCouponResponse.md)
 - [AddonDownload](docs/Model/AddonDownload.md)
 - [AddonDownloadResponse](docs/Model/AddonDownloadResponse.md)
 - [AddonImages](docs/Model/AddonImages.md)
 - [AddonListResponse](docs/Model/AddonListResponse.md)
 - [AddonPrice](docs/Model/AddonPrice.md)
 - [AddonPurchase](docs/Model/AddonPurchase.md)
 - [AddonPurchaseListResponse](docs/Model/AddonPurchaseListResponse.md)
 - [AddonPurchaseResponse](docs/Model/AddonPurchaseResponse.md)
 - [AddonResponse](docs/Model/AddonResponse.md)
 - [AddonReview](docs/Model/AddonReview.md)
 - [AddonReviewListResponse](docs/Model/AddonReviewListResponse.md)
 - [AddonReviewResponse](docs/Model/AddonReviewResponse.md)
 - [AddonStats](docs/Model/AddonStats.md)
 - [AddonStatsListResponse](docs/Model/AddonStatsListResponse.md)
 - [AddonStatsRevenue](docs/Model/AddonStatsRevenue.md)
 - [AddonStatsRevenueCurrent](docs/Model/AddonStatsRevenueCurrent.md)
 - [AddonStatsSales](docs/Model/AddonStatsSales.md)
 - [AddonStatsSalesCurrent](docs/Model/AddonStatsSalesCurrent.md)
 - [AddonStatsViews](docs/Model/AddonStatsViews.md)
 - [AddonStatsViewsCurrent](docs/Model/AddonStatsViewsCurrent.md)
 - [AddonVersion](docs/Model/AddonVersion.md)
 - [AddonVersionListResponse](docs/Model/AddonVersionListResponse.md)
 - [AddonVersionResponse](docs/Model/AddonVersionResponse.md)
 - [BadgeListResponse](docs/Model/BadgeListResponse.md)
 - [BadgeResponse](docs/Model/BadgeResponse.md)
 - [Ban](docs/Model/Ban.md)
 - [BanListResponse](docs/Model/BanListResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Money](docs/Model/Money.md)
 - [NewAddonCoupon](docs/Model/NewAddonCoupon.md)
 - [NewAddonPurchase](docs/Model/NewAddonPurchase.md)
 - [NewAddonVersion](docs/Model/NewAddonVersion.md)
 - [NewUserBadge](docs/Model/NewUserBadge.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [PermissionGroup](docs/Model/PermissionGroup.md)
 - [Team](docs/Model/Team.md)
 - [TeamListResponse](docs/Model/TeamListResponse.md)
 - [TeamResponse](docs/Model/TeamResponse.md)
 - [TeamUser](docs/Model/TeamUser.md)
 - [TeamUserListResponse](docs/Model/TeamUserListResponse.md)
 - [UpdateAddonCoupon](docs/Model/UpdateAddonCoupon.md)
 - [UpdateAddonPurchase](docs/Model/UpdateAddonPurchase.md)
 - [UpdateAddonVersion](docs/Model/UpdateAddonVersion.md)
 - [User](docs/Model/User.md)
 - [UserBadgeLegend](docs/Model/UserBadgeLegend.md)
 - [UserResponse](docs/Model/UserResponse.md)

## Documentation For Authorization


## bearerAuth



