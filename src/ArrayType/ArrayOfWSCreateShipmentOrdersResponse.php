<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSCreateShipmentOrdersResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSCreateShipmentOrdersResponse extends AbstractStructArrayBase
{
    /**
     * The WSCreateShipmentOrdersResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse[]
     */
    public $WSCreateShipmentOrdersResponse;
    /**
     * Constructor method for ArrayOfWSCreateShipmentOrdersResponse
     * @uses ArrayOfWSCreateShipmentOrdersResponse::setWSCreateShipmentOrdersResponse()
     * @param \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse[] $wSCreateShipmentOrdersResponse
     */
    public function __construct(array $wSCreateShipmentOrdersResponse = array())
    {
        $this
            ->setWSCreateShipmentOrdersResponse($wSCreateShipmentOrdersResponse);
    }
    /**
     * Get WSCreateShipmentOrdersResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse[]|null
     */
    public function getWSCreateShipmentOrdersResponse()
    {
        return isset($this->WSCreateShipmentOrdersResponse) ? $this->WSCreateShipmentOrdersResponse : null;
    }
    /**
     * Set WSCreateShipmentOrdersResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse[] $wSCreateShipmentOrdersResponse
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse
     */
    public function setWSCreateShipmentOrdersResponse(array $wSCreateShipmentOrdersResponse = array())
    {
        foreach ($wSCreateShipmentOrdersResponse as $arrayOfWSCreateShipmentOrdersResponseWSCreateShipmentOrdersResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSCreateShipmentOrdersResponseWSCreateShipmentOrdersResponseItem instanceof \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse) {
                throw new \InvalidArgumentException(sprintf('The WSCreateShipmentOrdersResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse, "%s" given', is_object($arrayOfWSCreateShipmentOrdersResponseWSCreateShipmentOrdersResponseItem) ? get_class($arrayOfWSCreateShipmentOrdersResponseWSCreateShipmentOrdersResponseItem) : gettype($arrayOfWSCreateShipmentOrdersResponseWSCreateShipmentOrdersResponseItem)), __LINE__);
            }
        }
        if (is_null($wSCreateShipmentOrdersResponse) || (is_array($wSCreateShipmentOrdersResponse) && empty($wSCreateShipmentOrdersResponse))) {
            unset($this->WSCreateShipmentOrdersResponse);
        } else {
            $this->WSCreateShipmentOrdersResponse = $wSCreateShipmentOrdersResponse;
        }
        return $this;
    }
    /**
     * Add item to WSCreateShipmentOrdersResponse value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse
     */
    public function addToWSCreateShipmentOrdersResponse(\Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse) {
            throw new \InvalidArgumentException(sprintf('The WSCreateShipmentOrdersResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSCreateShipmentOrdersResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSCreateShipmentOrdersResponse
     */
    public function getAttributeName()
    {
        return 'WSCreateShipmentOrdersResponse';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse
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
