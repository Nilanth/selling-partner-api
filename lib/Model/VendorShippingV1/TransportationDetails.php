<?php
/**
 * TransportationDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * TransportationDetails Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TransportationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransportationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_scac' => 'string',
        'carrier_shipment_reference_number' => 'string',
        'transportation_mode' => 'string',
        'bill_of_lading_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_scac' => null,
        'carrier_shipment_reference_number' => null,
        'transportation_mode' => null,
        'bill_of_lading_number' => null
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
        'carrier_scac' => 'carrierScac',
        'carrier_shipment_reference_number' => 'carrierShipmentReferenceNumber',
        'transportation_mode' => 'transportationMode',
        'bill_of_lading_number' => 'billOfLadingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'carrier_scac' => 'setCarrierScac',
        'carrier_shipment_reference_number' => 'setCarrierShipmentReferenceNumber',
        'transportation_mode' => 'setTransportationMode',
        'bill_of_lading_number' => 'setBillOfLadingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_scac' => 'getCarrierScac',
        'carrier_shipment_reference_number' => 'getCarrierShipmentReferenceNumber',
        'transportation_mode' => 'getTransportationMode',
        'bill_of_lading_number' => 'getBillOfLadingNumber'
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

    const TRANSPORTATION_MODE_ROAD = 'Road';
    const TRANSPORTATION_MODE_AIR = 'Air';
    const TRANSPORTATION_MODE_OCEAN = 'Ocean';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportationModeAllowableValues()
    {
        return [
            self::TRANSPORTATION_MODE_ROAD,
            self::TRANSPORTATION_MODE_AIR,
            self::TRANSPORTATION_MODE_OCEAN,
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
        $this->container['carrier_scac'] = $data['carrier_scac'] ?? null;
        $this->container['carrier_shipment_reference_number'] = $data['carrier_shipment_reference_number'] ?? null;
        $this->container['transportation_mode'] = $data['transportation_mode'] ?? null;
        $this->container['bill_of_lading_number'] = $data['bill_of_lading_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($this->container['transportation_mode']) && !in_array($this->container['transportation_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transportation_mode', must be one of '%s'",
                $this->container['transportation_mode'],
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
     * Gets carrier_scac
     *
     * @return string|null
     */
    public function getCarrierScac()
    {
        return $this->container['carrier_scac'];
    }

    /**
     * Sets carrier_scac
     *
     * @param string|null $carrier_scac Code that identifies the carrier for the shipment. The Standard Carrier Alpha Code (SCAC) is a unique two to four letter code used to identify a carrier. Carrier SCAC codes are assigned and maintained by the NMFTA (National Motor Freight Association). This field is mandatory for US, CA, MX shipment confirmations.
     *
     * @return self
     */
    public function setCarrierScac($carrier_scac)
    {
        $this->container['carrier_scac'] = $carrier_scac;

        return $this;
    }
    /**
     * Gets carrier_shipment_reference_number
     *
     * @return string|null
     */
    public function getCarrierShipmentReferenceNumber()
    {
        return $this->container['carrier_shipment_reference_number'];
    }

    /**
     * Sets carrier_shipment_reference_number
     *
     * @param string|null $carrier_shipment_reference_number The field also known as PRO number is a unique number assigned by the carrier. It is used to identify and track the shipment that goes out for delivery. This field is mandatory for UA, CA, MX shipment confirmations.
     *
     * @return self
     */
    public function setCarrierShipmentReferenceNumber($carrier_shipment_reference_number)
    {
        $this->container['carrier_shipment_reference_number'] = $carrier_shipment_reference_number;

        return $this;
    }
    /**
     * Gets transportation_mode
     *
     * @return string|null
     */
    public function getTransportationMode()
    {
        return $this->container['transportation_mode'];
    }

    /**
     * Sets transportation_mode
     *
     * @param string|null $transportation_mode The mode of transportation for this shipment.
     *
     * @return self
     */
    public function setTransportationMode($transportation_mode)
    {
        $allowedValues = $this->getTransportationModeAllowableValues();
        if (!is_null($transportation_mode) && !in_array($transportation_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transportation_mode', must be one of '%s'",
                    $transportation_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transportation_mode'] = $transportation_mode;

        return $this;
    }
    /**
     * Gets bill_of_lading_number
     *
     * @return string|null
     */
    public function getBillOfLadingNumber()
    {
        return $this->container['bill_of_lading_number'];
    }

    /**
     * Sets bill_of_lading_number
     *
     * @param string|null $bill_of_lading_number Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     *
     * @return self
     */
    public function setBillOfLadingNumber($bill_of_lading_number)
    {
        $this->container['bill_of_lading_number'] = $bill_of_lading_number;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


