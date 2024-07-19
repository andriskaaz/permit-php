<?php
/**
 * RoleCreateBulk
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
 * Generator version: 7.7.0
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
 * RoleCreateBulk Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoleCreateBulk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RoleCreateBulk';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'permissions' => 'string[]',
        'attributes' => 'object',
        'extends' => 'string[]',
        'granted_to' => '\OpenAPI\Client\Model\DerivedRoleBlockEdit',
        'v1compat_settings' => 'object',
        'v1compat_attributes' => 'object',
        'key' => 'string',
        'resource' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'permissions' => null,
        'attributes' => null,
        'extends' => null,
        'granted_to' => null,
        'v1compat_settings' => null,
        'v1compat_attributes' => null,
        'key' => null,
        'resource' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'description' => false,
        'permissions' => false,
        'attributes' => false,
        'extends' => false,
        'granted_to' => false,
        'v1compat_settings' => false,
        'v1compat_attributes' => false,
        'key' => false,
        'resource' => false
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
        'name' => 'name',
        'description' => 'description',
        'permissions' => 'permissions',
        'attributes' => 'attributes',
        'extends' => 'extends',
        'granted_to' => 'granted_to',
        'v1compat_settings' => 'v1compat_settings',
        'v1compat_attributes' => 'v1compat_attributes',
        'key' => 'key',
        'resource' => 'resource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'permissions' => 'setPermissions',
        'attributes' => 'setAttributes',
        'extends' => 'setExtends',
        'granted_to' => 'setGrantedTo',
        'v1compat_settings' => 'setV1compatSettings',
        'v1compat_attributes' => 'setV1compatAttributes',
        'key' => 'setKey',
        'resource' => 'setResource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'permissions' => 'getPermissions',
        'attributes' => 'getAttributes',
        'extends' => 'getExtends',
        'granted_to' => 'getGrantedTo',
        'v1compat_settings' => 'getV1compatSettings',
        'v1compat_attributes' => 'getV1compatAttributes',
        'key' => 'getKey',
        'resource' => 'getResource'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('extends', $data ?? [], null);
        $this->setIfExists('granted_to', $data ?? [], null);
        $this->setIfExists('v1compat_settings', $data ?? [], null);
        $this->setIfExists('v1compat_attributes', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('resource', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if (!preg_match("/^[A-Za-z0-9\\-_]+$/", $this->container['key'])) {
            $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^[A-Za-z0-9\\-_]+$/.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the role
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description optional description string explaining what this role represents, or what permissions are granted to it.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[]|null $permissions list of action keys that define what actions this resource role is permitted to do
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes optional dictionary of key-value pairs that can be used to store arbitrary metadata about this role. This metadata can be used to filter role using query parameters with attr_ prefix, currently supports only 'equals' operator
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets extends
     *
     * @return string[]|null
     */
    public function getExtends()
    {
        return $this->container['extends'];
    }

    /**
     * Sets extends
     *
     * @param string[]|null $extends list of role keys that define what roles this role extends. In other words: this role will automatically inherit all the permissions of the given roles in this list.
     *
     * @return self
     */
    public function setExtends($extends)
    {
        if (is_null($extends)) {
            throw new \InvalidArgumentException('non-nullable extends cannot be null');
        }
        $this->container['extends'] = $extends;

        return $this;
    }

    /**
     * Gets granted_to
     *
     * @return \OpenAPI\Client\Model\DerivedRoleBlockEdit|null
     */
    public function getGrantedTo()
    {
        return $this->container['granted_to'];
    }

    /**
     * Sets granted_to
     *
     * @param \OpenAPI\Client\Model\DerivedRoleBlockEdit|null $granted_to Derived role that inherit will be applied on this role
     *
     * @return self
     */
    public function setGrantedTo($granted_to)
    {
        if (is_null($granted_to)) {
            throw new \InvalidArgumentException('non-nullable granted_to cannot be null');
        }
        $this->container['granted_to'] = $granted_to;

        return $this;
    }

    /**
     * Gets v1compat_settings
     *
     * @return object|null
     */
    public function getV1compatSettings()
    {
        return $this->container['v1compat_settings'];
    }

    /**
     * Sets v1compat_settings
     *
     * @param object|null $v1compat_settings v1compat_settings
     *
     * @return self
     */
    public function setV1compatSettings($v1compat_settings)
    {
        if (is_null($v1compat_settings)) {
            throw new \InvalidArgumentException('non-nullable v1compat_settings cannot be null');
        }
        $this->container['v1compat_settings'] = $v1compat_settings;

        return $this;
    }

    /**
     * Gets v1compat_attributes
     *
     * @return object|null
     */
    public function getV1compatAttributes()
    {
        return $this->container['v1compat_attributes'];
    }

    /**
     * Sets v1compat_attributes
     *
     * @param object|null $v1compat_attributes v1compat_attributes
     *
     * @return self
     */
    public function setV1compatAttributes($v1compat_attributes)
    {
        if (is_null($v1compat_attributes)) {
            throw new \InvalidArgumentException('non-nullable v1compat_attributes cannot be null');
        }
        $this->container['v1compat_attributes'] = $v1compat_attributes;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key A URL-friendly name of the Role (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the Role.
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }

        if ((!preg_match("/^[A-Za-z0-9\\-_]+$/", ObjectSerializer::toString($key)))) {
            throw new \InvalidArgumentException("invalid value for \$key when calling RoleCreateBulk., must conform to the pattern /^[A-Za-z0-9\\-_]+$/.");
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return string|null
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param string|null $resource The resource key for the role. Optional; for tenant roles, leave empty.
     *
     * @return self
     */
    public function setResource($resource)
    {
        if (is_null($resource)) {
            throw new \InvalidArgumentException('non-nullable resource cannot be null');
        }
        $this->container['resource'] = $resource;

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


