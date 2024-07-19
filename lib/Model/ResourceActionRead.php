<?php
/**
 * ResourceActionRead
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
 * ResourceActionRead Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResourceActionRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResourceActionRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'attributes' => 'object',
        'v1compat_path' => 'string',
        'v1compat_is_built_in' => 'bool',
        'v1compat_name' => 'string',
        'key' => 'string',
        'id' => 'string',
        'permission_name' => 'string',
        'organization_id' => 'string',
        'project_id' => 'string',
        'environment_id' => 'string',
        'resource_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'attributes' => null,
        'v1compat_path' => null,
        'v1compat_is_built_in' => null,
        'v1compat_name' => null,
        'key' => null,
        'id' => 'uuid',
        'permission_name' => null,
        'organization_id' => 'uuid',
        'project_id' => 'uuid',
        'environment_id' => 'uuid',
        'resource_id' => 'uuid',
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'description' => false,
        'attributes' => false,
        'v1compat_path' => false,
        'v1compat_is_built_in' => false,
        'v1compat_name' => false,
        'key' => false,
        'id' => false,
        'permission_name' => false,
        'organization_id' => false,
        'project_id' => false,
        'environment_id' => false,
        'resource_id' => false,
        'created_at' => false,
        'updated_at' => false
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
        'attributes' => 'attributes',
        'v1compat_path' => 'v1compat_path',
        'v1compat_is_built_in' => 'v1compat_is_built_in',
        'v1compat_name' => 'v1compat_name',
        'key' => 'key',
        'id' => 'id',
        'permission_name' => 'permission_name',
        'organization_id' => 'organization_id',
        'project_id' => 'project_id',
        'environment_id' => 'environment_id',
        'resource_id' => 'resource_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'attributes' => 'setAttributes',
        'v1compat_path' => 'setV1compatPath',
        'v1compat_is_built_in' => 'setV1compatIsBuiltIn',
        'v1compat_name' => 'setV1compatName',
        'key' => 'setKey',
        'id' => 'setId',
        'permission_name' => 'setPermissionName',
        'organization_id' => 'setOrganizationId',
        'project_id' => 'setProjectId',
        'environment_id' => 'setEnvironmentId',
        'resource_id' => 'setResourceId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'attributes' => 'getAttributes',
        'v1compat_path' => 'getV1compatPath',
        'v1compat_is_built_in' => 'getV1compatIsBuiltIn',
        'v1compat_name' => 'getV1compatName',
        'key' => 'getKey',
        'id' => 'getId',
        'permission_name' => 'getPermissionName',
        'organization_id' => 'getOrganizationId',
        'project_id' => 'getProjectId',
        'environment_id' => 'getEnvironmentId',
        'resource_id' => 'getResourceId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('v1compat_path', $data ?? [], null);
        $this->setIfExists('v1compat_is_built_in', $data ?? [], null);
        $this->setIfExists('v1compat_name', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('permission_name', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
        $this->setIfExists('resource_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['permission_name'] === null) {
            $invalidProperties[] = "'permission_name' can't be null";
        }
        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
        }
        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ($this->container['environment_id'] === null) {
            $invalidProperties[] = "'environment_id' can't be null";
        }
        if ($this->container['resource_id'] === null) {
            $invalidProperties[] = "'resource_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @param string $name The name of the action
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
     * @param string|null $description An optional longer description of what this action respresents in your system
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
     * @param object|null $attributes optional dictionary of key-value pairs that can be used to store arbitrary metadata about this action. This metadata can be used to filter actions using query parameters with attr_ prefix
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
     * Gets v1compat_path
     *
     * @return string|null
     */
    public function getV1compatPath()
    {
        return $this->container['v1compat_path'];
    }

    /**
     * Sets v1compat_path
     *
     * @param string|null $v1compat_path v1compat_path
     *
     * @return self
     */
    public function setV1compatPath($v1compat_path)
    {
        if (is_null($v1compat_path)) {
            throw new \InvalidArgumentException('non-nullable v1compat_path cannot be null');
        }
        $this->container['v1compat_path'] = $v1compat_path;

        return $this;
    }

    /**
     * Gets v1compat_is_built_in
     *
     * @return bool|null
     */
    public function getV1compatIsBuiltIn()
    {
        return $this->container['v1compat_is_built_in'];
    }

    /**
     * Sets v1compat_is_built_in
     *
     * @param bool|null $v1compat_is_built_in v1compat_is_built_in
     *
     * @return self
     */
    public function setV1compatIsBuiltIn($v1compat_is_built_in)
    {
        if (is_null($v1compat_is_built_in)) {
            throw new \InvalidArgumentException('non-nullable v1compat_is_built_in cannot be null');
        }
        $this->container['v1compat_is_built_in'] = $v1compat_is_built_in;

        return $this;
    }

    /**
     * Gets v1compat_name
     *
     * @return string|null
     */
    public function getV1compatName()
    {
        return $this->container['v1compat_name'];
    }

    /**
     * Sets v1compat_name
     *
     * @param string|null $v1compat_name v1compat_name
     *
     * @return self
     */
    public function setV1compatName($v1compat_name)
    {
        if (is_null($v1compat_name)) {
            throw new \InvalidArgumentException('non-nullable v1compat_name cannot be null');
        }
        $this->container['v1compat_name'] = $v1compat_name;

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
     * @param string $key A URL-friendly name of the action (i.e: slug). You will be able to query later using this key instead of the id (UUID) of the action.
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique id of the action
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets permission_name
     *
     * @return string
     */
    public function getPermissionName()
    {
        return $this->container['permission_name'];
    }

    /**
     * Sets permission_name
     *
     * @param string $permission_name The name of the action, prefixed by the resource the action is acting upon.
     *
     * @return self
     */
    public function setPermissionName($permission_name)
    {
        if (is_null($permission_name)) {
            throw new \InvalidArgumentException('non-nullable permission_name cannot be null');
        }
        $this->container['permission_name'] = $permission_name;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id Unique id of the organization that the action belongs to.
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        if (is_null($organization_id)) {
            throw new \InvalidArgumentException('non-nullable organization_id cannot be null');
        }
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id Unique id of the project that the action belongs to.
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets environment_id
     *
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->container['environment_id'];
    }

    /**
     * Sets environment_id
     *
     * @param string $environment_id Unique id of the environment that the action belongs to.
     *
     * @return self
     */
    public function setEnvironmentId($environment_id)
    {
        if (is_null($environment_id)) {
            throw new \InvalidArgumentException('non-nullable environment_id cannot be null');
        }
        $this->container['environment_id'] = $environment_id;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string $resource_id Unique id of the resource that the action belongs to.
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        if (is_null($resource_id)) {
            throw new \InvalidArgumentException('non-nullable resource_id cannot be null');
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time when the action was created (ISO_8601 format).
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date and time when the action was last updated/modified (ISO_8601 format).
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


