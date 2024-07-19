<?php
/**
 * MailgunEmailConfigurationRead
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
 * MailgunEmailConfigurationRead Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MailgunEmailConfigurationRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MailgunEmailConfigurationRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from_address' => 'string',
        'api_key' => 'string',
        'region' => 'string',
        'domain' => 'string',
        'email_provider_type' => 'string',
        'id' => 'string',
        'organization_id' => 'string',
        'project_id' => 'string',
        'environment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from_address' => null,
        'api_key' => null,
        'region' => null,
        'domain' => 'uri',
        'email_provider_type' => null,
        'id' => 'uuid',
        'organization_id' => 'uuid',
        'project_id' => 'uuid',
        'environment_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from_address' => false,
        'api_key' => false,
        'region' => false,
        'domain' => false,
        'email_provider_type' => false,
        'id' => false,
        'organization_id' => false,
        'project_id' => false,
        'environment_id' => false
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
        'from_address' => 'from_address',
        'api_key' => 'api_key',
        'region' => 'region',
        'domain' => 'domain',
        'email_provider_type' => 'email_provider_type',
        'id' => 'id',
        'organization_id' => 'organization_id',
        'project_id' => 'project_id',
        'environment_id' => 'environment_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_address' => 'setFromAddress',
        'api_key' => 'setApiKey',
        'region' => 'setRegion',
        'domain' => 'setDomain',
        'email_provider_type' => 'setEmailProviderType',
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'project_id' => 'setProjectId',
        'environment_id' => 'setEnvironmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_address' => 'getFromAddress',
        'api_key' => 'getApiKey',
        'region' => 'getRegion',
        'domain' => 'getDomain',
        'email_provider_type' => 'getEmailProviderType',
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'project_id' => 'getProjectId',
        'environment_id' => 'getEnvironmentId'
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

    public const EMAIL_PROVIDER_TYPE_MAILGUN = 'mailgun';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailProviderTypeAllowableValues()
    {
        return [
            self::EMAIL_PROVIDER_TYPE_MAILGUN,
        ];
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
        $this->setIfExists('from_address', $data ?? [], null);
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('email_provider_type', $data ?? [], 'mailgun');
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
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

        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ((mb_strlen($this->container['domain']) > 65536)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 65536.";
        }

        if ((mb_strlen($this->container['domain']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getEmailProviderTypeAllowableValues();
        if (!is_null($this->container['email_provider_type']) && !in_array($this->container['email_provider_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'email_provider_type', must be one of '%s'",
                $this->container['email_provider_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets from_address
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param string $from_address The from address the mails will be sent from
     *
     * @return self
     */
    public function setFromAddress($from_address)
    {
        if (is_null($from_address)) {
            throw new \InvalidArgumentException('non-nullable from_address cannot be null');
        }
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key The api key of the mail provider
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region The region of the mail provider
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The domain of the mail provider
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        if ((mb_strlen($domain) > 65536)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling MailgunEmailConfigurationRead., must be smaller than or equal to 65536.');
        }
        if ((mb_strlen($domain) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling MailgunEmailConfigurationRead., must be bigger than or equal to 1.');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets email_provider_type
     *
     * @return string|null
     */
    public function getEmailProviderType()
    {
        return $this->container['email_provider_type'];
    }

    /**
     * Sets email_provider_type
     *
     * @param string|null $email_provider_type The type of the email provider
     *
     * @return self
     */
    public function setEmailProviderType($email_provider_type)
    {
        if (is_null($email_provider_type)) {
            throw new \InvalidArgumentException('non-nullable email_provider_type cannot be null');
        }
        $allowedValues = $this->getEmailProviderTypeAllowableValues();
        if (!in_array($email_provider_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'email_provider_type', must be one of '%s'",
                    $email_provider_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['email_provider_type'] = $email_provider_type;

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
     * @param string $id Unique id of the email_configuration
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
     * @param string $organization_id Unique id of the organization that the email_configuration belongs to.
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
     * @param string $project_id Unique id of the project that the email_configuration belongs to.
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
     * @param string $environment_id Unique id of the environment that the email_configuration belongs to.
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


