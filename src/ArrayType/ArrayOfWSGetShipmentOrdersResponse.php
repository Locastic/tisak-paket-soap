<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSGetShipmentOrdersResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSGetShipmentOrdersResponse extends AbstractStructArrayBase
{
    /**
     * The WSGetShipmentOrdersResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse[]
     */
    public $WSGetShipmentOrdersResponse;
    /**
     * Constructor method for ArrayOfWSGetShipmentOrdersResponse
     * @uses ArrayOfWSGetShipmentOrdersResponse::setWSGetShipmentOrdersResponse()
     * @param \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse[] $wSGetShipmentOrdersResponse
     */
    public function __construct(array $wSGetShipmentOrdersResponse = array())
    {
        $this
            ->setWSGetShipmentOrdersResponse($wSGetShipmentOrdersResponse);
    }
    /**
     * Get WSGetShipmentOrdersResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse[]|null
     */
    public function getWSGetShipmentOrdersResponse()
    {
        return isset($this->WSGetShipmentOrdersResponse) ? $this->WSGetShipmentOrdersResponse : null;
    }
    /**
     * Set WSGetShipmentOrdersResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse[] $wSGetShipmentOrdersResponse
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse
     */
    public function setWSGetShipmentOrdersResponse(array $wSGetShipmentOrdersResponse = array())
    {
        foreach ($wSGetShipmentOrdersResponse as $arrayOfWSGetShipmentOrdersResponseWSGetShipmentOrdersResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSGetShipmentOrdersResponseWSGetShipmentOrdersResponseItem instanceof \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse) {
                throw new \InvalidArgumentException(sprintf('The WSGetShipmentOrdersResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse, "%s" given', is_object($arrayOfWSGetShipmentOrdersResponseWSGetShipmentOrdersResponseItem) ? get_class($arrayOfWSGetShipmentOrdersResponseWSGetShipmentOrdersResponseItem) : gettype($arrayOfWSGetShipmentOrdersResponseWSGetShipmentOrdersResponseItem)), __LINE__);
            }
        }
        if (is_null($wSGetShipmentOrdersResponse) || (is_array($wSGetShipmentOrdersResponse) && empty($wSGetShipmentOrdersResponse))) {
            unset($this->WSGetShipmentOrdersResponse);
        } else {
            $this->WSGetShipmentOrdersResponse = $wSGetShipmentOrdersResponse;
        }
        return $this;
    }
    /**
     * Add item to WSGetShipmentOrdersResponse value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse
     */
    public function addToWSGetShipmentOrdersResponse(\Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse) {
            throw new \InvalidArgumentException(sprintf('The WSGetShipmentOrdersResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSGetShipmentOrdersResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSGetShipmentOrdersResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSGetShipmentOrdersResponse
     */
    public function getAttributeName()
    {
        return 'WSGetShipmentOrdersResponse';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse
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
