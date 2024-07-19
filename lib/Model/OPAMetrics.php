<?php
/**
 * OPAMetrics
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
 * OPAMetrics Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OPAMetrics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OPAMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timer_rego_input_parse_ns' => 'int',
        'timer_rego_query_parse_ns' => 'int',
        'timer_rego_query_compile_ns' => 'int',
        'timer_rego_query_eval_ns' => 'int',
        'timer_rego_module_parse_ns' => 'int',
        'timer_rego_module_compile_ns' => 'int',
        'timer_server_handler_ns' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timer_rego_input_parse_ns' => null,
        'timer_rego_query_parse_ns' => null,
        'timer_rego_query_compile_ns' => null,
        'timer_rego_query_eval_ns' => null,
        'timer_rego_module_parse_ns' => null,
        'timer_rego_module_compile_ns' => null,
        'timer_server_handler_ns' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'timer_rego_input_parse_ns' => false,
        'timer_rego_query_parse_ns' => false,
        'timer_rego_query_compile_ns' => false,
        'timer_rego_query_eval_ns' => false,
        'timer_rego_module_parse_ns' => false,
        'timer_rego_module_compile_ns' => false,
        'timer_server_handler_ns' => false
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
        'timer_rego_input_parse_ns' => 'timer_rego_input_parse_ns',
        'timer_rego_query_parse_ns' => 'timer_rego_query_parse_ns',
        'timer_rego_query_compile_ns' => 'timer_rego_query_compile_ns',
        'timer_rego_query_eval_ns' => 'timer_rego_query_eval_ns',
        'timer_rego_module_parse_ns' => 'timer_rego_module_parse_ns',
        'timer_rego_module_compile_ns' => 'timer_rego_module_compile_ns',
        'timer_server_handler_ns' => 'timer_server_handler_ns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timer_rego_input_parse_ns' => 'setTimerRegoInputParseNs',
        'timer_rego_query_parse_ns' => 'setTimerRegoQueryParseNs',
        'timer_rego_query_compile_ns' => 'setTimerRegoQueryCompileNs',
        'timer_rego_query_eval_ns' => 'setTimerRegoQueryEvalNs',
        'timer_rego_module_parse_ns' => 'setTimerRegoModuleParseNs',
        'timer_rego_module_compile_ns' => 'setTimerRegoModuleCompileNs',
        'timer_server_handler_ns' => 'setTimerServerHandlerNs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timer_rego_input_parse_ns' => 'getTimerRegoInputParseNs',
        'timer_rego_query_parse_ns' => 'getTimerRegoQueryParseNs',
        'timer_rego_query_compile_ns' => 'getTimerRegoQueryCompileNs',
        'timer_rego_query_eval_ns' => 'getTimerRegoQueryEvalNs',
        'timer_rego_module_parse_ns' => 'getTimerRegoModuleParseNs',
        'timer_rego_module_compile_ns' => 'getTimerRegoModuleCompileNs',
        'timer_server_handler_ns' => 'getTimerServerHandlerNs'
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
        $this->setIfExists('timer_rego_input_parse_ns', $data ?? [], null);
        $this->setIfExists('timer_rego_query_parse_ns', $data ?? [], null);
        $this->setIfExists('timer_rego_query_compile_ns', $data ?? [], null);
        $this->setIfExists('timer_rego_query_eval_ns', $data ?? [], null);
        $this->setIfExists('timer_rego_module_parse_ns', $data ?? [], null);
        $this->setIfExists('timer_rego_module_compile_ns', $data ?? [], null);
        $this->setIfExists('timer_server_handler_ns', $data ?? [], null);
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
     * Gets timer_rego_input_parse_ns
     *
     * @return int|null
     */
    public function getTimerRegoInputParseNs()
    {
        return $this->container['timer_rego_input_parse_ns'];
    }

    /**
     * Sets timer_rego_input_parse_ns
     *
     * @param int|null $timer_rego_input_parse_ns timer_rego_input_parse_ns
     *
     * @return self
     */
    public function setTimerRegoInputParseNs($timer_rego_input_parse_ns)
    {
        if (is_null($timer_rego_input_parse_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_input_parse_ns cannot be null');
        }
        $this->container['timer_rego_input_parse_ns'] = $timer_rego_input_parse_ns;

        return $this;
    }

    /**
     * Gets timer_rego_query_parse_ns
     *
     * @return int|null
     */
    public function getTimerRegoQueryParseNs()
    {
        return $this->container['timer_rego_query_parse_ns'];
    }

    /**
     * Sets timer_rego_query_parse_ns
     *
     * @param int|null $timer_rego_query_parse_ns timer_rego_query_parse_ns
     *
     * @return self
     */
    public function setTimerRegoQueryParseNs($timer_rego_query_parse_ns)
    {
        if (is_null($timer_rego_query_parse_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_query_parse_ns cannot be null');
        }
        $this->container['timer_rego_query_parse_ns'] = $timer_rego_query_parse_ns;

        return $this;
    }

    /**
     * Gets timer_rego_query_compile_ns
     *
     * @return int|null
     */
    public function getTimerRegoQueryCompileNs()
    {
        return $this->container['timer_rego_query_compile_ns'];
    }

    /**
     * Sets timer_rego_query_compile_ns
     *
     * @param int|null $timer_rego_query_compile_ns timer_rego_query_compile_ns
     *
     * @return self
     */
    public function setTimerRegoQueryCompileNs($timer_rego_query_compile_ns)
    {
        if (is_null($timer_rego_query_compile_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_query_compile_ns cannot be null');
        }
        $this->container['timer_rego_query_compile_ns'] = $timer_rego_query_compile_ns;

        return $this;
    }

    /**
     * Gets timer_rego_query_eval_ns
     *
     * @return int|null
     */
    public function getTimerRegoQueryEvalNs()
    {
        return $this->container['timer_rego_query_eval_ns'];
    }

    /**
     * Sets timer_rego_query_eval_ns
     *
     * @param int|null $timer_rego_query_eval_ns timer_rego_query_eval_ns
     *
     * @return self
     */
    public function setTimerRegoQueryEvalNs($timer_rego_query_eval_ns)
    {
        if (is_null($timer_rego_query_eval_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_query_eval_ns cannot be null');
        }
        $this->container['timer_rego_query_eval_ns'] = $timer_rego_query_eval_ns;

        return $this;
    }

    /**
     * Gets timer_rego_module_parse_ns
     *
     * @return int|null
     */
    public function getTimerRegoModuleParseNs()
    {
        return $this->container['timer_rego_module_parse_ns'];
    }

    /**
     * Sets timer_rego_module_parse_ns
     *
     * @param int|null $timer_rego_module_parse_ns timer_rego_module_parse_ns
     *
     * @return self
     */
    public function setTimerRegoModuleParseNs($timer_rego_module_parse_ns)
    {
        if (is_null($timer_rego_module_parse_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_module_parse_ns cannot be null');
        }
        $this->container['timer_rego_module_parse_ns'] = $timer_rego_module_parse_ns;

        return $this;
    }

    /**
     * Gets timer_rego_module_compile_ns
     *
     * @return int|null
     */
    public function getTimerRegoModuleCompileNs()
    {
        return $this->container['timer_rego_module_compile_ns'];
    }

    /**
     * Sets timer_rego_module_compile_ns
     *
     * @param int|null $timer_rego_module_compile_ns timer_rego_module_compile_ns
     *
     * @return self
     */
    public function setTimerRegoModuleCompileNs($timer_rego_module_compile_ns)
    {
        if (is_null($timer_rego_module_compile_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_rego_module_compile_ns cannot be null');
        }
        $this->container['timer_rego_module_compile_ns'] = $timer_rego_module_compile_ns;

        return $this;
    }

    /**
     * Gets timer_server_handler_ns
     *
     * @return int|null
     */
    public function getTimerServerHandlerNs()
    {
        return $this->container['timer_server_handler_ns'];
    }

    /**
     * Sets timer_server_handler_ns
     *
     * @param int|null $timer_server_handler_ns timer_server_handler_ns
     *
     * @return self
     */
    public function setTimerServerHandlerNs($timer_server_handler_ns)
    {
        if (is_null($timer_server_handler_ns)) {
            throw new \InvalidArgumentException('non-nullable timer_server_handler_ns cannot be null');
        }
        $this->container['timer_server_handler_ns'] = $timer_server_handler_ns;

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


