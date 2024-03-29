<?php
/**
 * CreatePointEventDto
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Earthpoints API
 *
 * Earthpoints API description
 *
 * The version of the OpenAPI document: 0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * CreatePointEventDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreatePointEventDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePointEventDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash_string' => 'string',
        'userid' => 'string',
        'email' => 'string',
        'icon' => 'string',
        'verb' => 'string',
        'platform' => 'string',
        'message' => 'string',
        'is_burn' => 'bool',
        'points' => 'float',
        'timestamp' => '\DateTime',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hash_string' => null,
        'userid' => null,
        'email' => null,
        'icon' => null,
        'verb' => null,
        'platform' => null,
        'message' => null,
        'is_burn' => null,
        'points' => null,
        'timestamp' => 'date-time',
        'metadata' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hash_string' => 'hashString',
        'userid' => 'userid',
        'email' => 'email',
        'icon' => 'icon',
        'verb' => 'verb',
        'platform' => 'platform',
        'message' => 'message',
        'is_burn' => 'isBurn',
        'points' => 'points',
        'timestamp' => 'timestamp',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash_string' => 'setHashString',
        'userid' => 'setUserid',
        'email' => 'setEmail',
        'icon' => 'setIcon',
        'verb' => 'setVerb',
        'platform' => 'setPlatform',
        'message' => 'setMessage',
        'is_burn' => 'setIsBurn',
        'points' => 'setPoints',
        'timestamp' => 'setTimestamp',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash_string' => 'getHashString',
        'userid' => 'getUserid',
        'email' => 'getEmail',
        'icon' => 'getIcon',
        'verb' => 'getVerb',
        'platform' => 'getPlatform',
        'message' => 'getMessage',
        'is_burn' => 'getIsBurn',
        'points' => 'getPoints',
        'timestamp' => 'getTimestamp',
        'metadata' => 'getMetadata'
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
        $this->container['hash_string'] = $data['hash_string'] ?? null;
        $this->container['userid'] = $data['userid'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['verb'] = $data['verb'] ?? null;
        $this->container['platform'] = $data['platform'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['is_burn'] = $data['is_burn'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hash_string'] === null) {
            $invalidProperties[] = "'hash_string' can't be null";
        }
        if ($this->container['verb'] === null) {
            $invalidProperties[] = "'verb' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['is_burn'] === null) {
            $invalidProperties[] = "'is_burn' can't be null";
        }
        if ($this->container['points'] === null) {
            $invalidProperties[] = "'points' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
     * Gets hash_string
     *
     * @return string
     */
    public function getHashString()
    {
        return $this->container['hash_string'];
    }

    /**
     * Sets hash_string
     *
     * @param string $hash_string The hash string is used to make sure each event will only result in points awarded once. It should be unique for each event and user, in such a way the same hashString will predictably get generated if the same event was sent again. For example, it could be the string \"created-pledge-page\" followed by the user's id in another system.
     *
     * @return self
     */
    public function setHashString($hash_string)
    {
        $this->container['hash_string'] = $hash_string;

        return $this;
    }

    /**
     * Gets userid
     *
     * @return string|null
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     *
     * @param string|null $userid Already existing User UUID in the system. One of this or an email is required.
     *
     * @return self
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email to associate the points with. If an user with this email is not found, a new user will be created. One of this or an User UUID is required.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon Icon to display in web interface (Font Awesome version 6.0.0)
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets verb
     *
     * @return string
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param string $verb The verb to display along with the point event in user interfaces. For example: \"You connected Facebook\"
     *
     * @return self
     */
    public function setVerb($verb)
    {
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform Social platform (twitter, instagram, facebook) or other external platform where the event was awarded from
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Message to display to the user.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets is_burn
     *
     * @return bool
     */
    public function getIsBurn()
    {
        return $this->container['is_burn'];
    }

    /**
     * Sets is_burn
     *
     * @param bool $is_burn For awarding points, set this to false. Set to true if you want to consume points instead of awarding them
     *
     * @return self
     */
    public function setIsBurn($is_burn)
    {
        $this->container['is_burn'] = $is_burn;

        return $this;
    }

    /**
     * Gets points
     *
     * @return float
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param float $points Number of points to award for this event.
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
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
     * @param \DateTime $timestamp For displaying to the user, the related time when the points were awarded.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata Any custom metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


