<?php
/**
 * APIHistoryEventRead
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
 * APIHistoryEventRead Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIHistoryEventRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIHistoryEventRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timestamp' => '\DateTime',
        'timestamp_utc' => '\DateTime',
        'method' => 'string',
        'path' => 'string',
        'success' => 'bool',
        'status' => 'int',
        'request_id' => 'string',
        'client_ip' => 'string',
        'actor_type' => 'string',
        'actor_id' => 'string',
        'actor_display_name' => 'string',
        'org_id' => 'string',
        'project_key' => 'string',
        'project_id' => 'string',
        'env_key' => 'string',
        'env_id' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timestamp' => 'date-time',
        'timestamp_utc' => 'date-time',
        'method' => null,
        'path' => null,
        'success' => null,
        'status' => null,
        'request_id' => 'uuid',
        'client_ip' => null,
        'actor_type' => null,
        'actor_id' => 'uuid',
        'actor_display_name' => null,
        'org_id' => 'uuid',
        'project_key' => null,
        'project_id' => 'uuid',
        'env_key' => null,
        'env_id' => 'uuid',
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'timestamp' => false,
        'timestamp_utc' => false,
        'method' => false,
        'path' => false,
        'success' => false,
        'status' => false,
        'request_id' => false,
        'client_ip' => false,
        'actor_type' => false,
        'actor_id' => false,
        'actor_display_name' => false,
        'org_id' => false,
        'project_key' => false,
        'project_id' => false,
        'env_key' => false,
        'env_id' => false,
        'id' => false
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
        'timestamp' => 'timestamp',
        'timestamp_utc' => 'timestamp_utc',
        'method' => 'method',
        'path' => 'path',
        'success' => 'success',
        'status' => 'status',
        'request_id' => 'request_id',
        'client_ip' => 'client_ip',
        'actor_type' => 'actor_type',
        'actor_id' => 'actor_id',
        'actor_display_name' => 'actor_display_name',
        'org_id' => 'org_id',
        'project_key' => 'project_key',
        'project_id' => 'project_id',
        'env_key' => 'env_key',
        'env_id' => 'env_id',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'timestamp_utc' => 'setTimestampUtc',
        'method' => 'setMethod',
        'path' => 'setPath',
        'success' => 'setSuccess',
        'status' => 'setStatus',
        'request_id' => 'setRequestId',
        'client_ip' => 'setClientIp',
        'actor_type' => 'setActorType',
        'actor_id' => 'setActorId',
        'actor_display_name' => 'setActorDisplayName',
        'org_id' => 'setOrgId',
        'project_key' => 'setProjectKey',
        'project_id' => 'setProjectId',
        'env_key' => 'setEnvKey',
        'env_id' => 'setEnvId',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'timestamp_utc' => 'getTimestampUtc',
        'method' => 'getMethod',
        'path' => 'getPath',
        'success' => 'getSuccess',
        'status' => 'getStatus',
        'request_id' => 'getRequestId',
        'client_ip' => 'getClientIp',
        'actor_type' => 'getActorType',
        'actor_id' => 'getActorId',
        'actor_display_name' => 'getActorDisplayName',
        'org_id' => 'getOrgId',
        'project_key' => 'getProjectKey',
        'project_id' => 'getProjectId',
        'env_key' => 'getEnvKey',
        'env_id' => 'getEnvId',
        'id' => 'getId'
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
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('timestamp_utc', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('success', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('client_ip', $data ?? [], null);
        $this->setIfExists('actor_type', $data ?? [], null);
        $this->setIfExists('actor_id', $data ?? [], null);
        $this->setIfExists('actor_display_name', $data ?? [], null);
        $this->setIfExists('org_id', $data ?? [], null);
        $this->setIfExists('project_key', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('env_key', $data ?? [], null);
        $this->setIfExists('env_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['client_ip'] === null) {
            $invalidProperties[] = "'client_ip' can't be null";
        }
        if ($this->container['actor_type'] === null) {
            $invalidProperties[] = "'actor_type' can't be null";
        }
        if ($this->container['actor_id'] === null) {
            $invalidProperties[] = "'actor_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets timestamp_utc
     *
     * @return \DateTime|null
     */
    public function getTimestampUtc()
    {
        return $this->container['timestamp_utc'];
    }

    /**
     * Sets timestamp_utc
     *
     * @param \DateTime|null $timestamp_utc timestamp_utc
     *
     * @return self
     */
    public function setTimestampUtc($timestamp_utc)
    {
        if (is_null($timestamp_utc)) {
            throw new \InvalidArgumentException('non-nullable timestamp_utc cannot be null');
        }
        $this->container['timestamp_utc'] = $timestamp_utc;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        if (is_null($request_id)) {
            throw new \InvalidArgumentException('non-nullable request_id cannot be null');
        }
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets client_ip
     *
     * @return string
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     *
     * @param string $client_ip client_ip
     *
     * @return self
     */
    public function setClientIp($client_ip)
    {
        if (is_null($client_ip)) {
            throw new \InvalidArgumentException('non-nullable client_ip cannot be null');
        }
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets actor_type
     *
     * @return string
     */
    public function getActorType()
    {
        return $this->container['actor_type'];
    }

    /**
     * Sets actor_type
     *
     * @param string $actor_type actor_type
     *
     * @return self
     */
    public function setActorType($actor_type)
    {
        if (is_null($actor_type)) {
            throw new \InvalidArgumentException('non-nullable actor_type cannot be null');
        }
        $this->container['actor_type'] = $actor_type;

        return $this;
    }

    /**
     * Gets actor_id
     *
     * @return string
     */
    public function getActorId()
    {
        return $this->container['actor_id'];
    }

    /**
     * Sets actor_id
     *
     * @param string $actor_id actor_id
     *
     * @return self
     */
    public function setActorId($actor_id)
    {
        if (is_null($actor_id)) {
            throw new \InvalidArgumentException('non-nullable actor_id cannot be null');
        }
        $this->container['actor_id'] = $actor_id;

        return $this;
    }

    /**
     * Gets actor_display_name
     *
     * @return string|null
     */
    public function getActorDisplayName()
    {
        return $this->container['actor_display_name'];
    }

    /**
     * Sets actor_display_name
     *
     * @param string|null $actor_display_name actor_display_name
     *
     * @return self
     */
    public function setActorDisplayName($actor_display_name)
    {
        if (is_null($actor_display_name)) {
            throw new \InvalidArgumentException('non-nullable actor_display_name cannot be null');
        }
        $this->container['actor_display_name'] = $actor_display_name;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string|null $org_id org_id
     *
     * @return self
     */
    public function setOrgId($org_id)
    {
        if (is_null($org_id)) {
            throw new \InvalidArgumentException('non-nullable org_id cannot be null');
        }
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets project_key
     *
     * @return string|null
     */
    public function getProjectKey()
    {
        return $this->container['project_key'];
    }

    /**
     * Sets project_key
     *
     * @param string|null $project_key project_key
     *
     * @return self
     */
    public function setProjectKey($project_key)
    {
        if (is_null($project_key)) {
            throw new \InvalidArgumentException('non-nullable project_key cannot be null');
        }
        $this->container['project_key'] = $project_key;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id project_id
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
     * Gets env_key
     *
     * @return string|null
     */
    public function getEnvKey()
    {
        return $this->container['env_key'];
    }

    /**
     * Sets env_key
     *
     * @param string|null $env_key env_key
     *
     * @return self
     */
    public function setEnvKey($env_key)
    {
        if (is_null($env_key)) {
            throw new \InvalidArgumentException('non-nullable env_key cannot be null');
        }
        $this->container['env_key'] = $env_key;

        return $this;
    }

    /**
     * Gets env_id
     *
     * @return string|null
     */
    public function getEnvId()
    {
        return $this->container['env_id'];
    }

    /**
     * Sets env_id
     *
     * @param string|null $env_id env_id
     *
     * @return self
     */
    public function setEnvId($env_id)
    {
        if (is_null($env_id)) {
            throw new \InvalidArgumentException('non-nullable env_id cannot be null');
        }
        $this->container['env_id'] = $env_id;

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
     * @param string $id id
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


