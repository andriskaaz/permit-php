<?php
/**
 * OPALHttpFetcherConfig
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
 * OPALHttpFetcherConfig Class Doc Comment
 *
 * @category Class
 * @description Config for HttpFetchProvider&#39;s Adding HTTP headers.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OPALHttpFetcherConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OPALHttpFetcherConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fetcher' => 'string',
        'headers' => 'array<string,string>',
        'is_json' => 'bool',
        'process_data' => 'bool',
        'method' => '\OpenAPI\Client\Model\HttpMethods',
        'data' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fetcher' => null,
        'headers' => null,
        'is_json' => null,
        'process_data' => null,
        'method' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fetcher' => false,
        'headers' => false,
        'is_json' => false,
        'process_data' => false,
        'method' => false,
        'data' => true
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
        'fetcher' => 'fetcher',
        'headers' => 'headers',
        'is_json' => 'is_json',
        'process_data' => 'process_data',
        'method' => 'method',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fetcher' => 'setFetcher',
        'headers' => 'setHeaders',
        'is_json' => 'setIsJson',
        'process_data' => 'setProcessData',
        'method' => 'setMethod',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fetcher' => 'getFetcher',
        'headers' => 'getHeaders',
        'is_json' => 'getIsJson',
        'process_data' => 'getProcessData',
        'method' => 'getMethod',
        'data' => 'getData'
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
        $this->setIfExists('fetcher', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
        $this->setIfExists('is_json', $data ?? [], true);
        $this->setIfExists('process_data', $data ?? [], true);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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
     * Gets fetcher
     *
     * @return string|null
     */
    public function getFetcher()
    {
        return $this->container['fetcher'];
    }

    /**
     * Sets fetcher
     *
     * @param string|null $fetcher indicates to OPAL client that it should use a custom FetcherProvider to fetch the data
     *
     * @return self
     */
    public function setFetcher($fetcher)
    {
        if (is_null($fetcher)) {
            throw new \InvalidArgumentException('non-nullable fetcher cannot be null');
        }
        $this->container['fetcher'] = $fetcher;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return array<string,string>|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param array<string,string>|null $headers headers
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        if (is_null($headers)) {
            throw new \InvalidArgumentException('non-nullable headers cannot be null');
        }
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets is_json
     *
     * @return bool|null
     */
    public function getIsJson()
    {
        return $this->container['is_json'];
    }

    /**
     * Sets is_json
     *
     * @param bool|null $is_json is_json
     *
     * @return self
     */
    public function setIsJson($is_json)
    {
        if (is_null($is_json)) {
            throw new \InvalidArgumentException('non-nullable is_json cannot be null');
        }
        $this->container['is_json'] = $is_json;

        return $this;
    }

    /**
     * Gets process_data
     *
     * @return bool|null
     */
    public function getProcessData()
    {
        return $this->container['process_data'];
    }

    /**
     * Sets process_data
     *
     * @param bool|null $process_data process_data
     *
     * @return self
     */
    public function setProcessData($process_data)
    {
        if (is_null($process_data)) {
            throw new \InvalidArgumentException('non-nullable process_data cannot be null');
        }
        $this->container['process_data'] = $process_data;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \OpenAPI\Client\Model\HttpMethods|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \OpenAPI\Client\Model\HttpMethods|null $method method
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
     * Gets data
     *
     * @return mixed|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param mixed|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            array_push($this->openAPINullablesSetToNull, 'data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data'] = $data;

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

