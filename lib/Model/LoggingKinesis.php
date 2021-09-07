<?php
/**
 * LoggingKinesis
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * LoggingKinesis Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LoggingKinesis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'logging_kinesis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'access_key' => 'string',
        'format' => 'string',
        'format_version' => '\Fastly\Model\LoggingFormatVersion',
        'iam_role' => 'string',
        'name' => 'string',
        'placement' => '\Fastly\Model\LoggingPlacement',
        'region' => 'string',
        'secret_key' => 'string',
        'topic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'access_key' => null,
        'format' => null,
        'format_version' => null,
        'iam_role' => null,
        'name' => null,
        'placement' => null,
        'region' => null,
        'secret_key' => null,
        'topic' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'access_key' => 'access_key',
        'format' => 'format',
        'format_version' => 'format_version',
        'iam_role' => 'iam_role',
        'name' => 'name',
        'placement' => 'placement',
        'region' => 'region',
        'secret_key' => 'secret_key',
        'topic' => 'topic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_key' => 'setAccessKey',
        'format' => 'setFormat',
        'format_version' => 'setFormatVersion',
        'iam_role' => 'setIamRole',
        'name' => 'setName',
        'placement' => 'setPlacement',
        'region' => 'setRegion',
        'secret_key' => 'setSecretKey',
        'topic' => 'setTopic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_key' => 'getAccessKey',
        'format' => 'getFormat',
        'format_version' => 'getFormatVersion',
        'iam_role' => 'getIamRole',
        'name' => 'getName',
        'placement' => 'getPlacement',
        'region' => 'getRegion',
        'secret_key' => 'getSecretKey',
        'topic' => 'getTopic'
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
        return self::$fastlyModelName;
    }

    const REGION_US_EAST_1 = 'us-east-1';
    const REGION_US_EAST_2 = 'us-east-2';
    const REGION_US_WEST_1 = 'us-west-1';
    const REGION_US_WEST_2 = 'us-west-2';
    const REGION_AF_SOUTH_1 = 'af-south-1';
    const REGION_AP_EAST_1 = 'ap-east-1';
    const REGION_AP_SOUTH_1 = 'ap-south-1';
    const REGION_AP_NORTHEAST_3 = 'ap-northeast-3';
    const REGION_AP_NORTHEAST_2 = 'ap-northeast-2';
    const REGION_AP_SOUTHEAST_1 = 'ap-southeast-1';
    const REGION_AP_SOUTHEAST_2 = 'ap-southeast-2';
    const REGION_AP_NORTHEAST_1 = 'ap-northeast-1';
    const REGION_CA_CENTRAL_1 = 'ca-central-1';
    const REGION_CN_NORTH_1 = 'cn-north-1';
    const REGION_CN_NORTHWEST_1 = 'cn-northwest-1';
    const REGION_EU_CENTRAL_1 = 'eu-central-1';
    const REGION_EU_WEST_1 = 'eu-west-1';
    const REGION_EU_WEST_2 = 'eu-west-2';
    const REGION_EU_SOUTH_1 = 'eu-south-1';
    const REGION_EU_WEST_3 = 'eu-west-3';
    const REGION_EU_NORTH_1 = 'eu-north-1';
    const REGION_ME_SOUTH_1 = 'me-south-1';
    const REGION_SA_EAST_1 = 'sa-east-1';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_US_EAST_1,
            self::REGION_US_EAST_2,
            self::REGION_US_WEST_1,
            self::REGION_US_WEST_2,
            self::REGION_AF_SOUTH_1,
            self::REGION_AP_EAST_1,
            self::REGION_AP_SOUTH_1,
            self::REGION_AP_NORTHEAST_3,
            self::REGION_AP_NORTHEAST_2,
            self::REGION_AP_SOUTHEAST_1,
            self::REGION_AP_SOUTHEAST_2,
            self::REGION_AP_NORTHEAST_1,
            self::REGION_CA_CENTRAL_1,
            self::REGION_CN_NORTH_1,
            self::REGION_CN_NORTHWEST_1,
            self::REGION_EU_CENTRAL_1,
            self::REGION_EU_WEST_1,
            self::REGION_EU_WEST_2,
            self::REGION_EU_SOUTH_1,
            self::REGION_EU_WEST_3,
            self::REGION_EU_NORTH_1,
            self::REGION_ME_SOUTH_1,
            self::REGION_SA_EAST_1,
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
        $this->container['access_key'] = $data['access_key'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['format_version'] = $data['format_version'] ?? null;
        $this->container['iam_role'] = $data['iam_role'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement'] = $data['placement'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['secret_key'] = $data['secret_key'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
                implode("', '", $allowedValues)
            );
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
     * Gets access_key
     *
     * @return string|null
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string|null $access_key The access key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets format_version
     *
     * @return \Fastly\Model\LoggingFormatVersion|null
     */
    public function getFormatVersion()
    {
        return $this->container['format_version'];
    }

    /**
     * Sets format_version
     *
     * @param \Fastly\Model\LoggingFormatVersion|null $format_version format_version
     *
     * @return self
     */
    public function setFormatVersion($format_version)
    {
        $this->container['format_version'] = $format_version;

        return $this;
    }

    /**
     * Gets iam_role
     *
     * @return string|null
     */
    public function getIamRole()
    {
        return $this->container['iam_role'];
    }

    /**
     * Sets iam_role
     *
     * @param string|null $iam_role The ARN for an IAM role granting Fastly access to the target Amazon Kinesis stream. Not required if `access_key` and `secret_key` are provided.
     *
     * @return self
     */
    public function setIamRole($iam_role)
    {
        $this->container['iam_role'] = $iam_role;

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
     * @param string|null $name The name for the real-time logging configuration.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return \Fastly\Model\LoggingPlacement|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param \Fastly\Model\LoggingPlacement|null $placement placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region The [AWS region](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints) to stream logs to.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key The secret key associated with the target Amazon Kinesis stream. Not required if `iam_role` is specified.
     *
     * @return self
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string|null $topic The Amazon Kinesis stream to send logs to. Required.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

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


