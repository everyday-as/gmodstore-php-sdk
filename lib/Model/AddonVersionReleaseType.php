<?php
/**
 * AddonVersionReleaseType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GmodStore API
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.
 *
 * The version of the OpenAPI document: 1.0.1
 * 
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
 * AddonVersionReleaseType Class Doc Comment
 *
 * @category Class
 * @description This can be a value of stable, beta, alpha, private or demo
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddonVersionReleaseType
{
    /**
     * Possible values of this enum
     */
    const STABLE = 'stable';
    const BETA = 'beta';
    const ALPHA = 'alpha';
    const _PRIVATE = 'private';
    const DEMO = 'demo';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STABLE,
            self::BETA,
            self::ALPHA,
            self::_PRIVATE,
            self::DEMO,
        ];
    }
}


