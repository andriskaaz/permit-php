<?php
/**
 * OrgMemberRead
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
 * OrgMemberRead Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrgMemberRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrgMemberRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'email' => 'string',
        'email_verified' => 'bool',
        'name' => 'string',
        'given_name' => 'string',
        'family_name' => 'string',
        'picture' => 'string',
        'is_superuser' => 'bool',
        'is_onboarding' => 'bool',
        'onboarding_step' => '\OpenAPI\Client\Model\OnboardingStep',
        'created_at' => '\DateTime',
        'last_login' => '\DateTime',
        'last_ip' => 'string',
        'logins_count' => 'int',
        'identities' => '\OpenAPI\Client\Model\IdentityRead[]',
        'invite' => '\OpenAPI\Client\Model\InviteRead',
        'settings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'email' => 'email',
        'email_verified' => null,
        'name' => null,
        'given_name' => null,
        'family_name' => null,
        'picture' => null,
        'is_superuser' => null,
        'is_onboarding' => null,
        'onboarding_step' => null,
        'created_at' => 'date-time',
        'last_login' => 'date-time',
        'last_ip' => null,
        'logins_count' => null,
        'identities' => null,
        'invite' => null,
        'settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'email' => false,
        'email_verified' => false,
        'name' => false,
        'given_name' => false,
        'family_name' => false,
        'picture' => false,
        'is_superuser' => false,
        'is_onboarding' => false,
        'onboarding_step' => false,
        'created_at' => false,
        'last_login' => false,
        'last_ip' => false,
        'logins_count' => false,
        'identities' => false,
        'invite' => false,
        'settings' => false
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
        'id' => 'id',
        'email' => 'email',
        'email_verified' => 'email_verified',
        'name' => 'name',
        'given_name' => 'given_name',
        'family_name' => 'family_name',
        'picture' => 'picture',
        'is_superuser' => 'is_superuser',
        'is_onboarding' => 'is_onboarding',
        'onboarding_step' => 'onboarding_step',
        'created_at' => 'created_at',
        'last_login' => 'last_login',
        'last_ip' => 'last_ip',
        'logins_count' => 'logins_count',
        'identities' => 'identities',
        'invite' => 'invite',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'email_verified' => 'setEmailVerified',
        'name' => 'setName',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'picture' => 'setPicture',
        'is_superuser' => 'setIsSuperuser',
        'is_onboarding' => 'setIsOnboarding',
        'onboarding_step' => 'setOnboardingStep',
        'created_at' => 'setCreatedAt',
        'last_login' => 'setLastLogin',
        'last_ip' => 'setLastIp',
        'logins_count' => 'setLoginsCount',
        'identities' => 'setIdentities',
        'invite' => 'setInvite',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'email_verified' => 'getEmailVerified',
        'name' => 'getName',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'picture' => 'getPicture',
        'is_superuser' => 'getIsSuperuser',
        'is_onboarding' => 'getIsOnboarding',
        'onboarding_step' => 'getOnboardingStep',
        'created_at' => 'getCreatedAt',
        'last_login' => 'getLastLogin',
        'last_ip' => 'getLastIp',
        'logins_count' => 'getLoginsCount',
        'identities' => 'getIdentities',
        'invite' => 'getInvite',
        'settings' => 'getSettings'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('email_verified', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('picture', $data ?? [], null);
        $this->setIfExists('is_superuser', $data ?? [], null);
        $this->setIfExists('is_onboarding', $data ?? [], null);
        $this->setIfExists('onboarding_step', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('last_login', $data ?? [], null);
        $this->setIfExists('last_ip', $data ?? [], '0.0.0.0');
        $this->setIfExists('logins_count', $data ?? [], 0);
        $this->setIfExists('identities', $data ?? [], null);
        $this->setIfExists('invite', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['email_verified'] === null) {
            $invalidProperties[] = "'email_verified' can't be null";
        }
        if ($this->container['is_superuser'] === null) {
            $invalidProperties[] = "'is_superuser' can't be null";
        }
        if ($this->container['is_onboarding'] === null) {
            $invalidProperties[] = "'is_onboarding' can't be null";
        }
        if ($this->container['onboarding_step'] === null) {
            $invalidProperties[] = "'onboarding_step' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['identities'] === null) {
            $invalidProperties[] = "'identities' can't be null";
        }
        if ($this->container['settings'] === null) {
            $invalidProperties[] = "'settings' can't be null";
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
     * @param string $id Unique id of the account member
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of the user controlling this account
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_verified
     *
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param bool $email_verified Whether this email address is verified or not. For social providers like 'Login with Google' this is done automatically, otherwise we will send the user a verification link in email.
     *
     * @return self
     */
    public function setEmailVerified($email_verified)
    {
        if (is_null($email_verified)) {
            throw new \InvalidArgumentException('non-nullable email_verified cannot be null');
        }
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of this user
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
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name First name of the user
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name Last name of the user
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string|null $picture URL to picture, photo, or avatar of the user that controls this account.
     *
     * @return self
     */
    public function setPicture($picture)
    {
        if (is_null($picture)) {
            throw new \InvalidArgumentException('non-nullable picture cannot be null');
        }
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets is_superuser
     *
     * @return bool
     */
    public function getIsSuperuser()
    {
        return $this->container['is_superuser'];
    }

    /**
     * Sets is_superuser
     *
     * @param bool $is_superuser Whether or not this user has special access to permit.io organizations
     *
     * @return self
     */
    public function setIsSuperuser($is_superuser)
    {
        if (is_null($is_superuser)) {
            throw new \InvalidArgumentException('non-nullable is_superuser cannot be null');
        }
        $this->container['is_superuser'] = $is_superuser;

        return $this;
    }

    /**
     * Gets is_onboarding
     *
     * @return bool
     */
    public function getIsOnboarding()
    {
        return $this->container['is_onboarding'];
    }

    /**
     * Sets is_onboarding
     *
     * @param bool $is_onboarding Whether or not this user is currently onboarding, needs to be replaced by a user journey object
     *
     * @return self
     */
    public function setIsOnboarding($is_onboarding)
    {
        if (is_null($is_onboarding)) {
            throw new \InvalidArgumentException('non-nullable is_onboarding cannot be null');
        }
        $this->container['is_onboarding'] = $is_onboarding;

        return $this;
    }

    /**
     * Gets onboarding_step
     *
     * @return \OpenAPI\Client\Model\OnboardingStep
     */
    public function getOnboardingStep()
    {
        return $this->container['onboarding_step'];
    }

    /**
     * Sets onboarding_step
     *
     * @param \OpenAPI\Client\Model\OnboardingStep $onboarding_step the step the user is currently going through in onboarding
     *
     * @return self
     */
    public function setOnboardingStep($onboarding_step)
    {
        if (is_null($onboarding_step)) {
            throw new \InvalidArgumentException('non-nullable onboarding_step cannot be null');
        }
        $this->container['onboarding_step'] = $onboarding_step;

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
     * @param \DateTime $created_at Date and time when the account member was created (ISO_8601 format).
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
     * Gets last_login
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime|null $last_login Last date and time this user logged in (ISO_8601 format).
     *
     * @return self
     */
    public function setLastLogin($last_login)
    {
        if (is_null($last_login)) {
            throw new \InvalidArgumentException('non-nullable last_login cannot be null');
        }
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets last_ip
     *
     * @return string|null
     */
    public function getLastIp()
    {
        return $this->container['last_ip'];
    }

    /**
     * Sets last_ip
     *
     * @param string|null $last_ip Last IP address from which this user logged in.
     *
     * @return self
     */
    public function setLastIp($last_ip)
    {
        if (is_null($last_ip)) {
            throw new \InvalidArgumentException('non-nullable last_ip cannot be null');
        }
        $this->container['last_ip'] = $last_ip;

        return $this;
    }

    /**
     * Gets logins_count
     *
     * @return int|null
     */
    public function getLoginsCount()
    {
        return $this->container['logins_count'];
    }

    /**
     * Sets logins_count
     *
     * @param int|null $logins_count Total number of logins this user has performed.
     *
     * @return self
     */
    public function setLoginsCount($logins_count)
    {
        if (is_null($logins_count)) {
            throw new \InvalidArgumentException('non-nullable logins_count cannot be null');
        }
        $this->container['logins_count'] = $logins_count;

        return $this;
    }

    /**
     * Gets identities
     *
     * @return \OpenAPI\Client\Model\IdentityRead[]
     */
    public function getIdentities()
    {
        return $this->container['identities'];
    }

    /**
     * Sets identities
     *
     * @param \OpenAPI\Client\Model\IdentityRead[] $identities identities
     *
     * @return self
     */
    public function setIdentities($identities)
    {
        if (is_null($identities)) {
            throw new \InvalidArgumentException('non-nullable identities cannot be null');
        }
        $this->container['identities'] = $identities;

        return $this;
    }

    /**
     * Gets invite
     *
     * @return \OpenAPI\Client\Model\InviteRead|null
     */
    public function getInvite()
    {
        return $this->container['invite'];
    }

    /**
     * Sets invite
     *
     * @param \OpenAPI\Client\Model\InviteRead|null $invite invite
     *
     * @return self
     */
    public function setInvite($invite)
    {
        if (is_null($invite)) {
            throw new \InvalidArgumentException('non-nullable invite cannot be null');
        }
        $this->container['invite'] = $invite;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return object
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param object $settings Custom permit.io dashboard settings, such as preferred theme, etc.
     *
     * @return self
     */
    public function setSettings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $this->container['settings'] = $settings;

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


