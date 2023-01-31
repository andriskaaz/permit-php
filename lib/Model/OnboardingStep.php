<?php
/**
 * OnboardingStep
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Permit.io API
 *
 * Authorization as a service
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OnboardingStep Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnboardingStep
{
    /**
     * Possible values of this enum
     */
    public const CREATE_ORGANIZATION = 'create_organization';

    public const CREATE_PROJECT = 'create_project';

    public const CREATE_RESOURCE = 'create_resource';

    public const CREATE_ACTIONS = 'create_actions';

    public const ASSIGN_PERMISSIONS = 'assign_permissions';

    public const ASSIGN_USER_ROLES = 'assign_user_roles';

    public const CONNECT_SDK = 'connect_sdk';

    public const DONE = 'done';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATE_ORGANIZATION,
            self::CREATE_PROJECT,
            self::CREATE_RESOURCE,
            self::CREATE_ACTIONS,
            self::ASSIGN_PERMISSIONS,
            self::ASSIGN_USER_ROLES,
            self::CONNECT_SDK,
            self::DONE
        ];
    }
}

