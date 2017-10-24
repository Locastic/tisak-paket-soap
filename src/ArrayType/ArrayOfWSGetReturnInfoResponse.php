<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSGetReturnInfoResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSGetReturnInfoResponse extends AbstractStructArrayBase
{
    /**
     * The WSGetReturnInfoResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse[]
     */
    public $WSGetReturnInfoResponse;
    /**
     * Constructor method for ArrayOfWSGetReturnInfoResponse
     * @uses ArrayOfWSGetReturnInfoResponse::setWSGetReturnInfoResponse()
     * @param \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse[] $wSGetReturnInfoResponse
     */
    public function __construct(array $wSGetReturnInfoResponse = array())
    {
        $this
            ->setWSGetReturnInfoResponse($wSGetReturnInfoResponse);
    }
    /**
     * Get WSGetReturnInfoResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse[]|null
     */
    public function getWSGetReturnInfoResponse()
    {
        return isset($this->WSGetReturnInfoResponse) ? $this->WSGetReturnInfoResponse : null;
    }
    /**
     * Set WSGetReturnInfoResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse[] $wSGetReturnInfoResponse
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse
     */
    public function setWSGetReturnInfoResponse(array $wSGetReturnInfoResponse = array())
    {
        foreach ($wSGetReturnInfoResponse as $arrayOfWSGetReturnInfoResponseWSGetReturnInfoResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSGetReturnInfoResponseWSGetReturnInfoResponseItem instanceof \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse) {
                throw new \InvalidArgumentException(sprintf('The WSGetReturnInfoResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse, "%s" given', is_object($arrayOfWSGetReturnInfoResponseWSGetReturnInfoResponseItem) ? get_class($arrayOfWSGetReturnInfoResponseWSGetReturnInfoResponseItem) : gettype($arrayOfWSGetReturnInfoResponseWSGetReturnInfoResponseItem)), __LINE__);
            }
        }
        if (is_null($wSGetReturnInfoResponse) || (is_array($wSGetReturnInfoResponse) && empty($wSGetReturnInfoResponse))) {
            unset($this->WSGetReturnInfoResponse);
        } else {
            $this->WSGetReturnInfoResponse = $wSGetReturnInfoResponse;
        }
        return $this;
    }
    /**
     * Add item to WSGetReturnInfoResponse value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse
     */
    public function addToWSGetReturnInfoResponse(\Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse) {
            throw new \InvalidArgumentException(sprintf('The WSGetReturnInfoResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSGetReturnInfoResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSGetReturnInfoResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSGetReturnInfoResponse
     */
    public function getAttributeName()
    {
        return 'WSGetReturnInfoResponse';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse
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
