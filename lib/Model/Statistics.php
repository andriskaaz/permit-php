<?php
/**
 * Statistics
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Statistics Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Statistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'roles' => 'int',
        'users' => 'int',
        'policies' => 'int',
        'resources' => 'int',
        'tenants' => 'int',
        'has_decision_logs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'roles' => null,
        'users' => null,
        'policies' => null,
        'resources' => null,
        'tenants' => null,
        'has_decision_logs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'roles' => false,
		'users' => false,
		'policies' => false,
		'resources' => false,
		'tenants' => false,
		'has_decision_logs' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'roles' => 'roles',
        'users' => 'users',
        'policies' => 'policies',
        'resources' => 'resources',
        'tenants' => 'tenants',
        'has_decision_logs' => 'has_decision_logs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roles' => 'setRoles',
        'users' => 'setUsers',
        'policies' => 'setPolicies',
        'resources' => 'setResources',
        'tenants' => 'setTenants',
        'has_decision_logs' => 'setHasDecisionLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roles' => 'getRoles',
        'users' => 'getUsers',
        'policies' => 'getPolicies',
        'resources' => 'getResources',
        'tenants' => 'getTenants',
        'has_decision_logs' => 'getHasDecisionLogs'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('policies', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('tenants', $data ?? [], null);
        $this->setIfExists('has_decision_logs', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if (($this->container['roles'] < 0)) {
            $invalidProperties[] = "invalid value for 'roles', must be bigger than or equal to 0.";
        }

        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if (($this->container['users'] < 0)) {
            $invalidProperties[] = "invalid value for 'users', must be bigger than or equal to 0.";
        }

        if ($this->container['policies'] === null) {
            $invalidProperties[] = "'policies' can't be null";
        }
        if (($this->container['policies'] < 0)) {
            $invalidProperties[] = "invalid value for 'policies', must be bigger than or equal to 0.";
        }

        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if (($this->container['resources'] < 0)) {
            $invalidProperties[] = "invalid value for 'resources', must be bigger than or equal to 0.";
        }

        if ($this->container['tenants'] === null) {
            $invalidProperties[] = "'tenants' can't be null";
        }
        if (($this->container['tenants'] < 0)) {
            $invalidProperties[] = "invalid value for 'tenants', must be bigger than or equal to 0.";
        }

        if ($this->container['has_decision_logs'] === null) {
            $invalidProperties[] = "'has_decision_logs' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets roles
     *
     * @return int
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param int $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {

        if (($roles < 0)) {
            throw new \InvalidArgumentException('invalid value for $roles when calling Statistics., must be bigger than or equal to 0.');
        }


        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }

        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets users
     *
     * @return int
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int $users users
     *
     * @return self
     */
    public function setUsers($users)
    {

        if (($users < 0)) {
            throw new \InvalidArgumentException('invalid value for $users when calling Statistics., must be bigger than or equal to 0.');
        }


        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }

        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets policies
     *
     * @return int
     */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
     * Sets policies
     *
     * @param int $policies policies
     *
     * @return self
     */
    public function setPolicies($policies)
    {

        if (($policies < 0)) {
            throw new \InvalidArgumentException('invalid value for $policies when calling Statistics., must be bigger than or equal to 0.');
        }


        if (is_null($policies)) {
            throw new \InvalidArgumentException('non-nullable policies cannot be null');
        }

        $this->container['policies'] = $policies;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return int
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param int $resources resources
     *
     * @return self
     */
    public function setResources($resources)
    {

        if (($resources < 0)) {
            throw new \InvalidArgumentException('invalid value for $resources when calling Statistics., must be bigger than or equal to 0.');
        }


        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }

        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets tenants
     *
     * @return int
     */
    public function getTenants()
    {
        return $this->container['tenants'];
    }

    /**
     * Sets tenants
     *
     * @param int $tenants tenants
     *
     * @return self
     */
    public function setTenants($tenants)
    {

        if (($tenants < 0)) {
            throw new \InvalidArgumentException('invalid value for $tenants when calling Statistics., must be bigger than or equal to 0.');
        }


        if (is_null($tenants)) {
            throw new \InvalidArgumentException('non-nullable tenants cannot be null');
        }

        $this->container['tenants'] = $tenants;

        return $this;
    }

    /**
     * Gets has_decision_logs
     *
     * @return bool
     */
    public function getHasDecisionLogs()
    {
        return $this->container['has_decision_logs'];
    }

    /**
     * Sets has_decision_logs
     *
     * @param bool $has_decision_logs has_decision_logs
     *
     * @return self
     */
    public function setHasDecisionLogs($has_decision_logs)
    {

        if (is_null($has_decision_logs)) {
            throw new \InvalidArgumentException('non-nullable has_decision_logs cannot be null');
        }

        $this->container['has_decision_logs'] = $has_decision_logs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


