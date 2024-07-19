<?php
/**
 * OperationApprovalRead
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
 * OperationApprovalRead Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OperationApprovalRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperationApprovalRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access_request_details' => '\OpenAPI\Client\Model\OperationApprovalDetails',
        'reason' => 'string',
        'id' => 'string',
        'organization_id' => 'string',
        'project_id' => 'string',
        'environment_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'requesting_user_id' => 'string',
        'reviewed_at' => '\DateTime',
        'type' => '\OpenAPI\Client\Model\RequestType',
        'reviewer_comment' => 'string',
        'status' => '\OpenAPI\Client\Model\RequestStatus',
        'reviewer_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access_request_details' => null,
        'reason' => null,
        'id' => 'uuid',
        'organization_id' => 'uuid',
        'project_id' => 'uuid',
        'environment_id' => 'uuid',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'requesting_user_id' => 'uuid',
        'reviewed_at' => 'date-time',
        'type' => null,
        'reviewer_comment' => null,
        'status' => null,
        'reviewer_user_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'access_request_details' => false,
        'reason' => false,
        'id' => false,
        'organization_id' => false,
        'project_id' => false,
        'environment_id' => false,
        'created_at' => false,
        'updated_at' => false,
        'requesting_user_id' => false,
        'reviewed_at' => false,
        'type' => false,
        'reviewer_comment' => false,
        'status' => false,
        'reviewer_user_id' => false
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
        'access_request_details' => 'access_request_details',
        'reason' => 'reason',
        'id' => 'id',
        'organization_id' => 'organization_id',
        'project_id' => 'project_id',
        'environment_id' => 'environment_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'requesting_user_id' => 'requesting_user_id',
        'reviewed_at' => 'reviewed_at',
        'type' => 'type',
        'reviewer_comment' => 'reviewer_comment',
        'status' => 'status',
        'reviewer_user_id' => 'reviewer_user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_request_details' => 'setAccessRequestDetails',
        'reason' => 'setReason',
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'project_id' => 'setProjectId',
        'environment_id' => 'setEnvironmentId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'requesting_user_id' => 'setRequestingUserId',
        'reviewed_at' => 'setReviewedAt',
        'type' => 'setType',
        'reviewer_comment' => 'setReviewerComment',
        'status' => 'setStatus',
        'reviewer_user_id' => 'setReviewerUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_request_details' => 'getAccessRequestDetails',
        'reason' => 'getReason',
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'project_id' => 'getProjectId',
        'environment_id' => 'getEnvironmentId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'requesting_user_id' => 'getRequestingUserId',
        'reviewed_at' => 'getReviewedAt',
        'type' => 'getType',
        'reviewer_comment' => 'getReviewerComment',
        'status' => 'getStatus',
        'reviewer_user_id' => 'getReviewerUserId'
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
        $this->setIfExists('access_request_details', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('environment_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('requesting_user_id', $data ?? [], null);
        $this->setIfExists('reviewed_at', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('reviewer_comment', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('reviewer_user_id', $data ?? [], null);
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

        if ($this->container['access_request_details'] === null) {
            $invalidProperties[] = "'access_request_details' can't be null";
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['requesting_user_id'] === null) {
            $invalidProperties[] = "'requesting_user_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets access_request_details
     *
     * @return \OpenAPI\Client\Model\OperationApprovalDetails
     */
    public function getAccessRequestDetails()
    {
        return $this->container['access_request_details'];
    }

    /**
     * Sets access_request_details
     *
     * @param \OpenAPI\Client\Model\OperationApprovalDetails $access_request_details details of the operation approval, including the resource and tenant
     *
     * @return self
     */
    public function setAccessRequestDetails($access_request_details)
    {
        if (is_null($access_request_details)) {
            throw new \InvalidArgumentException('non-nullable access_request_details cannot be null');
        }
        $this->container['access_request_details'] = $access_request_details;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Optional business justification provided by the user requesting operation approval
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

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
     * @param string $id Unique id of the operation approval
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
     * @param string $organization_id Unique id of the organization that the operation approval  belongs to.
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
     * @param string $project_id Unique id of the project that the operation approval  belongs to.
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
     * @param string $environment_id Unique id of the environment that the operation approval  belongs to.
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
     * @param \DateTime $created_at Date and time when the operation approval  was created (ISO_8601 format).
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
     * @param \DateTime $updated_at Date and time when the operation approval  was last updated/modified (ISO_8601 format).
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
     * Gets requesting_user_id
     *
     * @return string
     */
    public function getRequestingUserId()
    {
        return $this->container['requesting_user_id'];
    }

    /**
     * Sets requesting_user_id
     *
     * @param string $requesting_user_id optional id of the user that is requesting the approval
     *
     * @return self
     */
    public function setRequestingUserId($requesting_user_id)
    {
        if (is_null($requesting_user_id)) {
            throw new \InvalidArgumentException('non-nullable requesting_user_id cannot be null');
        }
        $this->container['requesting_user_id'] = $requesting_user_id;

        return $this;
    }

    /**
     * Gets reviewed_at
     *
     * @return \DateTime|null
     */
    public function getReviewedAt()
    {
        return $this->container['reviewed_at'];
    }

    /**
     * Sets reviewed_at
     *
     * @param \DateTime|null $reviewed_at when the operation approval was reviewed
     *
     * @return self
     */
    public function setReviewedAt($reviewed_at)
    {
        if (is_null($reviewed_at)) {
            throw new \InvalidArgumentException('non-nullable reviewed_at cannot be null');
        }
        $this->container['reviewed_at'] = $reviewed_at;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\RequestType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\RequestType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets reviewer_comment
     *
     * @return string|null
     */
    public function getReviewerComment()
    {
        return $this->container['reviewer_comment'];
    }

    /**
     * Sets reviewer_comment
     *
     * @param string|null $reviewer_comment comment provided by the reviewer_user_id
     *
     * @return self
     */
    public function setReviewerComment($reviewer_comment)
    {
        if (is_null($reviewer_comment)) {
            throw new \InvalidArgumentException('non-nullable reviewer_comment cannot be null');
        }
        $this->container['reviewer_comment'] = $reviewer_comment;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\RequestStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\RequestStatus $status current status of the operation approval
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
     * Gets reviewer_user_id
     *
     * @return string|null
     */
    public function getReviewerUserId()
    {
        return $this->container['reviewer_user_id'];
    }

    /**
     * Sets reviewer_user_id
     *
     * @param string|null $reviewer_user_id Optional id of the user who review the operation approval
     *
     * @return self
     */
    public function setReviewerUserId($reviewer_user_id)
    {
        if (is_null($reviewer_user_id)) {
            throw new \InvalidArgumentException('non-nullable reviewer_user_id cannot be null');
        }
        $this->container['reviewer_user_id'] = $reviewer_user_id;

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


