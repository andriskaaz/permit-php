<?php
/**
 * PdpValues
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
 * PdpValues Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PdpValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdpValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'backend_service_url' => 'string',
        'opa_decision_log_ingress_route' => 'string',
        'opa_decision_log_ingress_backend_tier_url' => 'string',
        'control_plane_relay_jwt_tier' => 'string',
        'control_plane_relay_api' => 'string',
        'control_plane_pdp_deltas_api' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'backend_service_url' => null,
        'opa_decision_log_ingress_route' => null,
        'opa_decision_log_ingress_backend_tier_url' => null,
        'control_plane_relay_jwt_tier' => null,
        'control_plane_relay_api' => null,
        'control_plane_pdp_deltas_api' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'backend_service_url' => false,
        'opa_decision_log_ingress_route' => false,
        'opa_decision_log_ingress_backend_tier_url' => false,
        'control_plane_relay_jwt_tier' => false,
        'control_plane_relay_api' => false,
        'control_plane_pdp_deltas_api' => false
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
        'backend_service_url' => 'BACKEND_SERVICE_URL',
        'opa_decision_log_ingress_route' => 'OPA_DECISION_LOG_INGRESS_ROUTE',
        'opa_decision_log_ingress_backend_tier_url' => 'OPA_DECISION_LOG_INGRESS_BACKEND_TIER_URL',
        'control_plane_relay_jwt_tier' => 'CONTROL_PLANE_RELAY_JWT_TIER',
        'control_plane_relay_api' => 'CONTROL_PLANE_RELAY_API',
        'control_plane_pdp_deltas_api' => 'CONTROL_PLANE_PDP_DELTAS_API'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backend_service_url' => 'setBackendServiceUrl',
        'opa_decision_log_ingress_route' => 'setOpaDecisionLogIngressRoute',
        'opa_decision_log_ingress_backend_tier_url' => 'setOpaDecisionLogIngressBackendTierUrl',
        'control_plane_relay_jwt_tier' => 'setControlPlaneRelayJwtTier',
        'control_plane_relay_api' => 'setControlPlaneRelayApi',
        'control_plane_pdp_deltas_api' => 'setControlPlanePdpDeltasApi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backend_service_url' => 'getBackendServiceUrl',
        'opa_decision_log_ingress_route' => 'getOpaDecisionLogIngressRoute',
        'opa_decision_log_ingress_backend_tier_url' => 'getOpaDecisionLogIngressBackendTierUrl',
        'control_plane_relay_jwt_tier' => 'getControlPlaneRelayJwtTier',
        'control_plane_relay_api' => 'getControlPlaneRelayApi',
        'control_plane_pdp_deltas_api' => 'getControlPlanePdpDeltasApi'
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
        $this->setIfExists('backend_service_url', $data ?? [], null);
        $this->setIfExists('opa_decision_log_ingress_route', $data ?? [], null);
        $this->setIfExists('opa_decision_log_ingress_backend_tier_url', $data ?? [], null);
        $this->setIfExists('control_plane_relay_jwt_tier', $data ?? [], null);
        $this->setIfExists('control_plane_relay_api', $data ?? [], null);
        $this->setIfExists('control_plane_pdp_deltas_api', $data ?? [], null);
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

        if ($this->container['backend_service_url'] === null) {
            $invalidProperties[] = "'backend_service_url' can't be null";
        }
        if ($this->container['opa_decision_log_ingress_route'] === null) {
            $invalidProperties[] = "'opa_decision_log_ingress_route' can't be null";
        }
        if ($this->container['opa_decision_log_ingress_backend_tier_url'] === null) {
            $invalidProperties[] = "'opa_decision_log_ingress_backend_tier_url' can't be null";
        }
        if ($this->container['control_plane_relay_jwt_tier'] === null) {
            $invalidProperties[] = "'control_plane_relay_jwt_tier' can't be null";
        }
        if ($this->container['control_plane_relay_api'] === null) {
            $invalidProperties[] = "'control_plane_relay_api' can't be null";
        }
        if ($this->container['control_plane_pdp_deltas_api'] === null) {
            $invalidProperties[] = "'control_plane_pdp_deltas_api' can't be null";
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
     * Gets backend_service_url
     *
     * @return string
     */
    public function getBackendServiceUrl()
    {
        return $this->container['backend_service_url'];
    }

    /**
     * Sets backend_service_url
     *
     * @param string $backend_service_url backend_service_url
     *
     * @return self
     */
    public function setBackendServiceUrl($backend_service_url)
    {
        if (is_null($backend_service_url)) {
            throw new \InvalidArgumentException('non-nullable backend_service_url cannot be null');
        }
        $this->container['backend_service_url'] = $backend_service_url;

        return $this;
    }

    /**
     * Gets opa_decision_log_ingress_route
     *
     * @return string
     */
    public function getOpaDecisionLogIngressRoute()
    {
        return $this->container['opa_decision_log_ingress_route'];
    }

    /**
     * Sets opa_decision_log_ingress_route
     *
     * @param string $opa_decision_log_ingress_route opa_decision_log_ingress_route
     *
     * @return self
     */
    public function setOpaDecisionLogIngressRoute($opa_decision_log_ingress_route)
    {
        if (is_null($opa_decision_log_ingress_route)) {
            throw new \InvalidArgumentException('non-nullable opa_decision_log_ingress_route cannot be null');
        }
        $this->container['opa_decision_log_ingress_route'] = $opa_decision_log_ingress_route;

        return $this;
    }

    /**
     * Gets opa_decision_log_ingress_backend_tier_url
     *
     * @return string
     */
    public function getOpaDecisionLogIngressBackendTierUrl()
    {
        return $this->container['opa_decision_log_ingress_backend_tier_url'];
    }

    /**
     * Sets opa_decision_log_ingress_backend_tier_url
     *
     * @param string $opa_decision_log_ingress_backend_tier_url opa_decision_log_ingress_backend_tier_url
     *
     * @return self
     */
    public function setOpaDecisionLogIngressBackendTierUrl($opa_decision_log_ingress_backend_tier_url)
    {
        if (is_null($opa_decision_log_ingress_backend_tier_url)) {
            throw new \InvalidArgumentException('non-nullable opa_decision_log_ingress_backend_tier_url cannot be null');
        }
        $this->container['opa_decision_log_ingress_backend_tier_url'] = $opa_decision_log_ingress_backend_tier_url;

        return $this;
    }

    /**
     * Gets control_plane_relay_jwt_tier
     *
     * @return string
     */
    public function getControlPlaneRelayJwtTier()
    {
        return $this->container['control_plane_relay_jwt_tier'];
    }

    /**
     * Sets control_plane_relay_jwt_tier
     *
     * @param string $control_plane_relay_jwt_tier control_plane_relay_jwt_tier
     *
     * @return self
     */
    public function setControlPlaneRelayJwtTier($control_plane_relay_jwt_tier)
    {
        if (is_null($control_plane_relay_jwt_tier)) {
            throw new \InvalidArgumentException('non-nullable control_plane_relay_jwt_tier cannot be null');
        }
        $this->container['control_plane_relay_jwt_tier'] = $control_plane_relay_jwt_tier;

        return $this;
    }

    /**
     * Gets control_plane_relay_api
     *
     * @return string
     */
    public function getControlPlaneRelayApi()
    {
        return $this->container['control_plane_relay_api'];
    }

    /**
     * Sets control_plane_relay_api
     *
     * @param string $control_plane_relay_api control_plane_relay_api
     *
     * @return self
     */
    public function setControlPlaneRelayApi($control_plane_relay_api)
    {
        if (is_null($control_plane_relay_api)) {
            throw new \InvalidArgumentException('non-nullable control_plane_relay_api cannot be null');
        }
        $this->container['control_plane_relay_api'] = $control_plane_relay_api;

        return $this;
    }

    /**
     * Gets control_plane_pdp_deltas_api
     *
     * @return string
     */
    public function getControlPlanePdpDeltasApi()
    {
        return $this->container['control_plane_pdp_deltas_api'];
    }

    /**
     * Sets control_plane_pdp_deltas_api
     *
     * @param string $control_plane_pdp_deltas_api control_plane_pdp_deltas_api
     *
     * @return self
     */
    public function setControlPlanePdpDeltasApi($control_plane_pdp_deltas_api)
    {
        if (is_null($control_plane_pdp_deltas_api)) {
            throw new \InvalidArgumentException('non-nullable control_plane_pdp_deltas_api cannot be null');
        }
        $this->container['control_plane_pdp_deltas_api'] = $control_plane_pdp_deltas_api;

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


