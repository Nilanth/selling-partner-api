<?php
/**
 * RemovalShipmentItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * RemovalShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Item-level information for a removal shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RemovalShipmentItem implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovalShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'removal_shipment_item_id' => 'string',
        'tax_collection_model' => 'string',
        'fulfillment_network_sku' => 'string',
        'quantity' => 'int',
        'revenue' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'fee_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'tax_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'tax_withheld' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'removal_shipment_item_id' => null,
        'tax_collection_model' => null,
        'fulfillment_network_sku' => null,
        'quantity' => 'int32',
        'revenue' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'tax_withheld' => null
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
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
        'tax_collection_model' => 'TaxCollectionModel',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'quantity' => 'Quantity',
        'revenue' => 'Revenue',
        'fee_amount' => 'FeeAmount',
        'tax_amount' => 'TaxAmount',
        'tax_withheld' => 'TaxWithheld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'removal_shipment_item_id' => 'setRemovalShipmentItemId',
        'tax_collection_model' => 'setTaxCollectionModel',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'quantity' => 'setQuantity',
        'revenue' => 'setRevenue',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_withheld' => 'setTaxWithheld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
        'tax_collection_model' => 'getTaxCollectionModel',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'quantity' => 'getQuantity',
        'revenue' => 'getRevenue',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_withheld' => 'getTaxWithheld'
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
        $this->container['removal_shipment_item_id'] = $data['removal_shipment_item_id'] ?? null;
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['revenue'] = $data['revenue'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_withheld'] = $data['tax_withheld'] ?? null;
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
     * Gets removal_shipment_item_id
     *
     * @return string|null
     */
    public function getRemovalShipmentItemId()
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id
     *
     * @param string|null $removal_shipment_item_id An identifier for an item in a removal shipment.
     *
     * @return self
     */
    public function setRemovalShipmentItemId($removal_shipment_item_id)
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }
    /**
     * Gets tax_collection_model
     *
     * @return string|null
     */
    public function getTaxCollectionModel()
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model
     *
     * @param string|null $tax_collection_model The tax collection model applied to the item. Possible values: * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller. * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return self
     */
    public function setTaxCollectionModel($tax_collection_model)
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }
    /**
     * Gets fulfillment_network_sku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku
     *
     * @param string|null $fulfillment_network_sku The Amazon fulfillment network SKU for the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets revenue
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $revenue revenue
     *
     * @return self
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }
    /**
     * Gets fee_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }
    /**
     * Gets tax_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    /**
     * Gets tax_withheld
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getTaxWithheld()
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $tax_withheld tax_withheld
     *
     * @return self
     */
    public function setTaxWithheld($tax_withheld)
    {
        $this->container['tax_withheld'] = $tax_withheld;

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
     * @return SellingPartnerApi\Model\FinancesV0\RemovalShipmentItem
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


