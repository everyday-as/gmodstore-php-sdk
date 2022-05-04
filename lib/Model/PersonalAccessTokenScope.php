<?php
/**
 * PersonalAccessTokenScope
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * gmodstore
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.  # Rate limits Every request you make to the GmodStore API will count against your rate limit, which at the time of writing this, is 60 requests / minute. An up-to-date value will always provided in the `X-RateLimit-Limit` header The number of requests you have remaining before you must wait is provided in the `X-RateLimit-Remaining` header.  # API SDKs For a list of available API SDKs check the README here: https://github.com/everyday-as/gmodstore-api-docs#client-libraries
 *
 * The version of the OpenAPI document: 3.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: unset
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Everyday\GmodStore\Sdk\Model;
use \Everyday\GmodStore\Sdk\ObjectSerializer;

/**
 * PersonalAccessTokenScope Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PersonalAccessTokenScope
{
    /**
     * Possible values of this enum
     */
    const PERMISSION_GROUPSREAD = 'permission-groups:read';

    const PERMISSION_GROUPSWRITE = 'permission-groups:write';

    const PERSONAL_ACCESS_TOKENSREAD = 'personal-access-tokens:read';

    const PERSONAL_ACCESS_TOKENSWRITE = 'personal-access-tokens:write';

    const TEAMSREAD = 'teams:read';

    const TEAMSWRITE = 'teams:write';

    const TEAM_USERSREAD = 'team-users:read';

    const TEAM_USERSWRITE = 'team-users:write';

    const PRODUCTSREAD = 'products:read';

    const PRODUCTSWRITE = 'products:write';

    const PRODUCT_COUPONSREAD = 'product-coupons:read';

    const PRODUCT_COUPONSWRITE = 'product-coupons:write';

    const PRODUCT_PURCHASESREAD = 'product-purchases:read';

    const PRODUCT_PURCHASESWRITE = 'product-purchases:write';

    const PRODUCT_REVIEWSREAD = 'product-reviews:read';

    const PRODUCT_REVIEWSWRITE = 'product-reviews:write';

    const PRODUCT_VERSIONSREAD = 'product-versions:read';

    const PRODUCT_VERSIONSWRITE = 'product-versions:write';

    const PRODUCT_VERSIONSDOWNLOAD = 'product-versions:download';

    const USERSREAD = 'users:read';

    const USERSWRITE = 'users:write';

    const USER_BADGESREAD = 'user-badges:read';

    const USER_BADGESWRITE = 'user-badges:write';

    const USER_BANSREAD = 'user-bans:read';

    const USER_PURCHASESREAD = 'user-purchases:read';

    const STAR = '*';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERMISSION_GROUPSREAD,
            self::PERMISSION_GROUPSWRITE,
            self::PERSONAL_ACCESS_TOKENSREAD,
            self::PERSONAL_ACCESS_TOKENSWRITE,
            self::TEAMSREAD,
            self::TEAMSWRITE,
            self::TEAM_USERSREAD,
            self::TEAM_USERSWRITE,
            self::PRODUCTSREAD,
            self::PRODUCTSWRITE,
            self::PRODUCT_COUPONSREAD,
            self::PRODUCT_COUPONSWRITE,
            self::PRODUCT_PURCHASESREAD,
            self::PRODUCT_PURCHASESWRITE,
            self::PRODUCT_REVIEWSREAD,
            self::PRODUCT_REVIEWSWRITE,
            self::PRODUCT_VERSIONSREAD,
            self::PRODUCT_VERSIONSWRITE,
            self::PRODUCT_VERSIONSDOWNLOAD,
            self::USERSREAD,
            self::USERSWRITE,
            self::USER_BADGESREAD,
            self::USER_BADGESWRITE,
            self::USER_BANSREAD,
            self::USER_PURCHASESREAD,
            self::STAR
        ];
    }
}


