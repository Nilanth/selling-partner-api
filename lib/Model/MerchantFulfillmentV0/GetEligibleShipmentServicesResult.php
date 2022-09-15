<?php
/**
 * GetEligibleShipmentServicesResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * GetEligibleShipmentServicesResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getEligibleShipmentServices operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetEligibleShipmentServicesResult implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetEligibleShipmentServicesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_service_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingService[]',
        'rejected_shipping_service_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\RejectedShippingService[]',
        'temporarily_unavailable_carrier_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\TemporarilyUnavailableCarrier[]',
        'terms_and_conditions_not_accepted_carrier_list' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\TermsAndConditionsNotAcceptedCarrier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_service_list' => null,
        'rejected_shipping_service_list' => null,
        'temporarily_unavailable_carrier_list' => null,
        'terms_and_conditions_not_accepted_carrier_list' => null
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
        'shipping_service_list' => 'ShippingServiceList',
        'rejected_shipping_service_list' => 'RejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'TemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'TermsAndConditionsNotAcceptedCarrierList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'shipping_service_list' => 'setShippingServiceList',
        'rejected_shipping_service_list' => 'setRejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'setTemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'setTermsAndConditionsNotAcceptedCarrierList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_service_list' => 'getShippingServiceList',
        'rejected_shipping_service_list' => 'getRejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'getTemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'getTermsAndConditionsNotAcceptedCarrierList'
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
        $this->container['shipping_service_list'] = $data['shipping_service_list'] ?? null;
        $this->container['rejected_shipping_service_list'] = $data['rejected_shipping_service_list'] ?? null;
        $this->container['temporarily_unavailable_carrier_list'] = $data['temporarily_unavailable_carrier_list'] ?? null;
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = $data['terms_and_conditions_not_accepted_carrier_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipping_service_list'] === null) {
            $invalidProperties[] = "'shipping_service_list' can't be null";
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
     * Gets shipping_service_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingService[]
     */
    public function getShippingServiceList()
    {
        return $this->container['shipping_service_list'];
    }

    /**
     * Sets shipping_service_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\ShippingService[] $shipping_service_list A list of shipping services offers.
     *
     * @return self
     */
    public function setShippingServiceList($shipping_service_list)
    {
        $this->container['shipping_service_list'] = $shipping_service_list;

        return $this;
    }
    /**
     * Gets rejected_shipping_service_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\RejectedShippingService[]|null
     */
    public function getRejectedShippingServiceList()
    {
        return $this->container['rejected_shipping_service_list'];
    }

    /**
     * Sets rejected_shipping_service_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\RejectedShippingService[]|null $rejected_shipping_service_list List of services that were for some reason unavailable for this request
     *
     * @return self
     */
    public function setRejectedShippingServiceList($rejected_shipping_service_list)
    {
        $this->container['rejected_shipping_service_list'] = $rejected_shipping_service_list;

        return $this;
    }
    /**
     * Gets temporarily_unavailable_carrier_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\TemporarilyUnavailableCarrier[]|null
     */
    public function getTemporarilyUnavailableCarrierList()
    {
        return $this->container['temporarily_unavailable_carrier_list'];
    }

    /**
     * Sets temporarily_unavailable_carrier_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\TemporarilyUnavailableCarrier[]|null $temporarily_unavailable_carrier_list A list of temporarily unavailable carriers.
     *
     * @return self
     */
    public function setTemporarilyUnavailableCarrierList($temporarily_unavailable_carrier_list)
    {
        $this->container['temporarily_unavailable_carrier_list'] = $temporarily_unavailable_carrier_list;

        return $this;
    }
    /**
     * Gets terms_and_conditions_not_accepted_carrier_list
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\TermsAndConditionsNotAcceptedCarrier[]|null
     */
    public function getTermsAndConditionsNotAcceptedCarrierList()
    {
        return $this->container['terms_and_conditions_not_accepted_carrier_list'];
    }

    /**
     * Sets terms_and_conditions_not_accepted_carrier_list
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\TermsAndConditionsNotAcceptedCarrier[]|null $terms_and_conditions_not_accepted_carrier_list List of carriers whose terms and conditions were not accepted by the seller.
     *
     * @return self
     */
    public function setTermsAndConditionsNotAcceptedCarrierList($terms_and_conditions_not_accepted_carrier_list)
    {
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = $terms_and_conditions_not_accepted_carrier_list;

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

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\MerchantFulfillmentV0\GetEligibleShipmentServicesResult
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


