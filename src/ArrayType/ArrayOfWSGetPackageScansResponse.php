<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSGetPackageScansResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSGetPackageScansResponse extends AbstractStructArrayBase
{
    /**
     * The WSGetPackageScansResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse[]
     */
    public $WSGetPackageScansResponse;
    /**
     * Constructor method for ArrayOfWSGetPackageScansResponse
     * @uses ArrayOfWSGetPackageScansResponse::setWSGetPackageScansResponse()
     * @param \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse[] $wSGetPackageScansResponse
     */
    public function __construct(array $wSGetPackageScansResponse = array())
    {
        $this
            ->setWSGetPackageScansResponse($wSGetPackageScansResponse);
    }
    /**
     * Get WSGetPackageScansResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse[]|null
     */
    public function getWSGetPackageScansResponse()
    {
        return isset($this->WSGetPackageScansResponse) ? $this->WSGetPackageScansResponse : null;
    }
    /**
     * Set WSGetPackageScansResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse[] $wSGetPackageScansResponse
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse
     */
    public function setWSGetPackageScansResponse(array $wSGetPackageScansResponse = array())
    {
        foreach ($wSGetPackageScansResponse as $arrayOfWSGetPackageScansResponseWSGetPackageScansResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSGetPackageScansResponseWSGetPackageScansResponseItem instanceof \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse) {
                throw new \InvalidArgumentException(sprintf('The WSGetPackageScansResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse, "%s" given', is_object($arrayOfWSGetPackageScansResponseWSGetPackageScansResponseItem) ? get_class($arrayOfWSGetPackageScansResponseWSGetPackageScansResponseItem) : gettype($arrayOfWSGetPackageScansResponseWSGetPackageScansResponseItem)), __LINE__);
            }
        }
        if (is_null($wSGetPackageScansResponse) || (is_array($wSGetPackageScansResponse) && empty($wSGetPackageScansResponse))) {
            unset($this->WSGetPackageScansResponse);
        } else {
            $this->WSGetPackageScansResponse = $wSGetPackageScansResponse;
        }
        return $this;
    }
    /**
     * Add item to WSGetPackageScansResponse value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse
     */
    public function addToWSGetPackageScansResponse(\Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse) {
            throw new \InvalidArgumentException(sprintf('The WSGetPackageScansResponse property can only contain items of \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSGetPackageScansResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPackageScansResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSGetPackageScansResponse
     */
    public function getAttributeName()
    {
        return 'WSGetPackageScansResponse';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse
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
