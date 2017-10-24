<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentOrder ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipmentOrder extends AbstractStructArrayBase
{
    /**
     * The ShipmentOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\ShipmentOrder[]
     */
    public $ShipmentOrder;
    /**
     * Constructor method for ArrayOfShipmentOrder
     * @uses ArrayOfShipmentOrder::setShipmentOrder()
     * @param \Locastic\PaketTisakSoap\StructType\ShipmentOrder[] $shipmentOrder
     */
    public function __construct(array $shipmentOrder = array())
    {
        $this
            ->setShipmentOrder($shipmentOrder);
    }
    /**
     * Get ShipmentOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder[]|null
     */
    public function getShipmentOrder()
    {
        return isset($this->ShipmentOrder) ? $this->ShipmentOrder : null;
    }
    /**
     * Set ShipmentOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ShipmentOrder[] $shipmentOrder
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder
     */
    public function setShipmentOrder(array $shipmentOrder = array())
    {
        foreach ($shipmentOrder as $arrayOfShipmentOrderShipmentOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentOrderShipmentOrderItem instanceof \Locastic\PaketTisakSoap\StructType\ShipmentOrder) {
                throw new \InvalidArgumentException(sprintf('The ShipmentOrder property can only contain items of \Locastic\PaketTisakSoap\StructType\ShipmentOrder, "%s" given', is_object($arrayOfShipmentOrderShipmentOrderItem) ? get_class($arrayOfShipmentOrderShipmentOrderItem) : gettype($arrayOfShipmentOrderShipmentOrderItem)), __LINE__);
            }
        }
        if (is_null($shipmentOrder) || (is_array($shipmentOrder) && empty($shipmentOrder))) {
            unset($this->ShipmentOrder);
        } else {
            $this->ShipmentOrder = $shipmentOrder;
        }
        return $this;
    }
    /**
     * Add item to ShipmentOrder value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ShipmentOrder $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder
     */
    public function addToShipmentOrder(\Locastic\PaketTisakSoap\StructType\ShipmentOrder $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\ShipmentOrder) {
            throw new \InvalidArgumentException(sprintf('The ShipmentOrder property can only contain items of \Locastic\PaketTisakSoap\StructType\ShipmentOrder, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentOrder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentOrder
     */
    public function getAttributeName()
    {
        return 'ShipmentOrder';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
