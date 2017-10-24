<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClientReferenceNumber ArrayType
 * @subpackage Arrays
 */
class ArrayOfClientReferenceNumber extends AbstractStructArrayBase
{
    /**
     * The ClientReferenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber[]
     */
    public $ClientReferenceNumber;
    /**
     * Constructor method for ArrayOfClientReferenceNumber
     * @uses ArrayOfClientReferenceNumber::setClientReferenceNumber()
     * @param \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber[] $clientReferenceNumber
     */
    public function __construct(array $clientReferenceNumber = array())
    {
        $this
            ->setClientReferenceNumber($clientReferenceNumber);
    }
    /**
     * Get ClientReferenceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber[]|null
     */
    public function getClientReferenceNumber()
    {
        return isset($this->ClientReferenceNumber) ? $this->ClientReferenceNumber : null;
    }
    /**
     * Set ClientReferenceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber[] $clientReferenceNumber
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber
     */
    public function setClientReferenceNumber(array $clientReferenceNumber = array())
    {
        foreach ($clientReferenceNumber as $arrayOfClientReferenceNumberClientReferenceNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfClientReferenceNumberClientReferenceNumberItem instanceof \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber) {
                throw new \InvalidArgumentException(sprintf('The ClientReferenceNumber property can only contain items of \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber, "%s" given', is_object($arrayOfClientReferenceNumberClientReferenceNumberItem) ? get_class($arrayOfClientReferenceNumberClientReferenceNumberItem) : gettype($arrayOfClientReferenceNumberClientReferenceNumberItem)), __LINE__);
            }
        }
        if (is_null($clientReferenceNumber) || (is_array($clientReferenceNumber) && empty($clientReferenceNumber))) {
            unset($this->ClientReferenceNumber);
        } else {
            $this->ClientReferenceNumber = $clientReferenceNumber;
        }
        return $this;
    }
    /**
     * Add item to ClientReferenceNumber value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber
     */
    public function addToClientReferenceNumber(\Locastic\PaketTisakSoap\StructType\ClientReferenceNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber) {
            throw new \InvalidArgumentException(sprintf('The ClientReferenceNumber property can only contain items of \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClientReferenceNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\ClientReferenceNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClientReferenceNumber
     */
    public function getAttributeName()
    {
        return 'ClientReferenceNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber
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
