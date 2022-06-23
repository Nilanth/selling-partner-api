<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description An item of a shipment, refund, guarantee claim, or chargeback.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'order_adjustment_item_id' => 'string',
        'quantity_shipped' => 'int',
        'item_charge_list' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]',
        'item_charge_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]',
        'item_fee_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'item_fee_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'item_tax_withheld_list' => '\SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]',
        'promotion_list' => '\SellingPartnerApi\Model\FinancesV0\Promotion[]',
        'promotion_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\Promotion[]',
        'cost_of_points_granted' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'cost_of_points_returned' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'order_item_id' => null,
        'order_adjustment_item_id' => null,
        'quantity_shipped' => 'int32',
        'item_charge_list' => null,
        'item_charge_adjustment_list' => null,
        'item_fee_list' => null,
        'item_fee_adjustment_list' => null,
        'item_tax_withheld_list' => null,
        'promotion_list' => null,
        'promotion_adjustment_list' => null,
        'cost_of_points_granted' => null,
        'cost_of_points_returned' => null
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
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'order_adjustment_item_id' => 'OrderAdjustmentItemId',
        'quantity_shipped' => 'QuantityShipped',
        'item_charge_list' => 'ItemChargeList',
        'item_charge_adjustment_list' => 'ItemChargeAdjustmentList',
        'item_fee_list' => 'ItemFeeList',
        'item_fee_adjustment_list' => 'ItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'ItemTaxWithheldList',
        'promotion_list' => 'PromotionList',
        'promotion_adjustment_list' => 'PromotionAdjustmentList',
        'cost_of_points_granted' => 'CostOfPointsGranted',
        'cost_of_points_returned' => 'CostOfPointsReturned'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'order_adjustment_item_id' => 'setOrderAdjustmentItemId',
        'quantity_shipped' => 'setQuantityShipped',
        'item_charge_list' => 'setItemChargeList',
        'item_charge_adjustment_list' => 'setItemChargeAdjustmentList',
        'item_fee_list' => 'setItemFeeList',
        'item_fee_adjustment_list' => 'setItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'setItemTaxWithheldList',
        'promotion_list' => 'setPromotionList',
        'promotion_adjustment_list' => 'setPromotionAdjustmentList',
        'cost_of_points_granted' => 'setCostOfPointsGranted',
        'cost_of_points_returned' => 'setCostOfPointsReturned'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'order_adjustment_item_id' => 'getOrderAdjustmentItemId',
        'quantity_shipped' => 'getQuantityShipped',
        'item_charge_list' => 'getItemChargeList',
        'item_charge_adjustment_list' => 'getItemChargeAdjustmentList',
        'item_fee_list' => 'getItemFeeList',
        'item_fee_adjustment_list' => 'getItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'getItemTaxWithheldList',
        'promotion_list' => 'getPromotionList',
        'promotion_adjustment_list' => 'getPromotionAdjustmentList',
        'cost_of_points_granted' => 'getCostOfPointsGranted',
        'cost_of_points_returned' => 'getCostOfPointsReturned'
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['order_adjustment_item_id'] = $data['order_adjustment_item_id'] ?? null;
        $this->container['quantity_shipped'] = $data['quantity_shipped'] ?? null;
        $this->container['item_charge_list'] = $data['item_charge_list'] ?? null;
        $this->container['item_charge_adjustment_list'] = $data['item_charge_adjustment_list'] ?? null;
        $this->container['item_fee_list'] = $data['item_fee_list'] ?? null;
        $this->container['item_fee_adjustment_list'] = $data['item_fee_adjustment_list'] ?? null;
        $this->container['item_tax_withheld_list'] = $data['item_tax_withheld_list'] ?? null;
        $this->container['promotion_list'] = $data['promotion_list'] ?? null;
        $this->container['promotion_adjustment_list'] = $data['promotion_adjustment_list'] ?? null;
        $this->container['cost_of_points_granted'] = $data['cost_of_points_granted'] ?? null;
        $this->container['cost_of_points_returned'] = $data['cost_of_points_returned'] ?? null;
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
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets order_item_id
     *
     * @return string|null
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string|null $order_item_id An Amazon-defined order item identifier.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }
    /**
     * Gets order_adjustment_item_id
     *
     * @return string|null
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->container['order_adjustment_item_id'];
    }

    /**
     * Sets order_adjustment_item_id
     *
     * @param string|null $order_adjustment_item_id An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events.
     *
     * @return self
     */
    public function setOrderAdjustmentItemId($order_adjustment_item_id)
    {
        $this->container['order_adjustment_item_id'] = $order_adjustment_item_id;

        return $this;
    }
    /**
     * Gets quantity_shipped
     *
     * @return int|null
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped
     *
     * @param int|null $quantity_shipped The number of items shipped.
     *
     * @return self
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }
    /**
     * Gets item_charge_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null
     */
    public function getItemChargeList()
    {
        return $this->container['item_charge_list'];
    }

    /**
     * Sets item_charge_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null $item_charge_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setItemChargeList($item_charge_list)
    {
        $this->container['item_charge_list'] = $item_charge_list;

        return $this;
    }
    /**
     * Gets item_charge_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null
     */
    public function getItemChargeAdjustmentList()
    {
        return $this->container['item_charge_adjustment_list'];
    }

    /**
     * Sets item_charge_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null $item_charge_adjustment_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setItemChargeAdjustmentList($item_charge_adjustment_list)
    {
        $this->container['item_charge_adjustment_list'] = $item_charge_adjustment_list;

        return $this;
    }
    /**
     * Gets item_fee_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getItemFeeList()
    {
        return $this->container['item_fee_list'];
    }

    /**
     * Sets item_fee_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $item_fee_list A list of fee component information.
     *
     * @return self
     */
    public function setItemFeeList($item_fee_list)
    {
        $this->container['item_fee_list'] = $item_fee_list;

        return $this;
    }
    /**
     * Gets item_fee_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getItemFeeAdjustmentList()
    {
        return $this->container['item_fee_adjustment_list'];
    }

    /**
     * Sets item_fee_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $item_fee_adjustment_list A list of fee component information.
     *
     * @return self
     */
    public function setItemFeeAdjustmentList($item_fee_adjustment_list)
    {
        $this->container['item_fee_adjustment_list'] = $item_fee_adjustment_list;

        return $this;
    }
    /**
     * Gets item_tax_withheld_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]|null
     */
    public function getItemTaxWithheldList()
    {
        return $this->container['item_tax_withheld_list'];
    }

    /**
     * Sets item_tax_withheld_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]|null $item_tax_withheld_list A list of information about taxes withheld.
     *
     * @return self
     */
    public function setItemTaxWithheldList($item_tax_withheld_list)
    {
        $this->container['item_tax_withheld_list'] = $item_tax_withheld_list;

        return $this;
    }
    /**
     * Gets promotion_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Promotion[]|null
     */
    public function getPromotionList()
    {
        return $this->container['promotion_list'];
    }

    /**
     * Sets promotion_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Promotion[]|null $promotion_list A list of promotions.
     *
     * @return self
     */
    public function setPromotionList($promotion_list)
    {
        $this->container['promotion_list'] = $promotion_list;

        return $this;
    }
    /**
     * Gets promotion_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Promotion[]|null
     */
    public function getPromotionAdjustmentList()
    {
        return $this->container['promotion_adjustment_list'];
    }

    /**
     * Sets promotion_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Promotion[]|null $promotion_adjustment_list A list of promotions.
     *
     * @return self
     */
    public function setPromotionAdjustmentList($promotion_adjustment_list)
    {
        $this->container['promotion_adjustment_list'] = $promotion_adjustment_list;

        return $this;
    }
    /**
     * Gets cost_of_points_granted
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getCostOfPointsGranted()
    {
        return $this->container['cost_of_points_granted'];
    }

    /**
     * Sets cost_of_points_granted
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $cost_of_points_granted cost_of_points_granted
     *
     * @return self
     */
    public function setCostOfPointsGranted($cost_of_points_granted)
    {
        $this->container['cost_of_points_granted'] = $cost_of_points_granted;

        return $this;
    }
    /**
     * Gets cost_of_points_returned
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getCostOfPointsReturned()
    {
        return $this->container['cost_of_points_returned'];
    }

    /**
     * Sets cost_of_points_returned
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $cost_of_points_returned cost_of_points_returned
     *
     * @return self
     */
    public function setCostOfPointsReturned($cost_of_points_returned)
    {
        $this->container['cost_of_points_returned'] = $cost_of_points_returned;

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


