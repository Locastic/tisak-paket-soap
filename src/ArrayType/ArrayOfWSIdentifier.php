<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSIdentifier ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSIdentifier extends AbstractStructArrayBase
{
    /**
     * The WSIdentifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSIdentifier[]
     */
    public $WSIdentifier;
    /**
     * Constructor method for ArrayOfWSIdentifier
     * @uses ArrayOfWSIdentifier::setWSIdentifier()
     * @param \Locastic\PaketTisakSoap\StructType\WSIdentifier[] $wSIdentifier
     */
    public function __construct(array $wSIdentifier = array())
    {
        $this
            ->setWSIdentifier($wSIdentifier);
    }
    /**
     * Get WSIdentifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier[]|null
     */
    public function getWSIdentifier()
    {
        return isset($this->WSIdentifier) ? $this->WSIdentifier : null;
    }
    /**
     * Set WSIdentifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSIdentifier[] $wSIdentifier
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public function setWSIdentifier(array $wSIdentifier = array())
    {
        foreach ($wSIdentifier as $arrayOfWSIdentifierWSIdentifierItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSIdentifierWSIdentifierItem instanceof \Locastic\PaketTisakSoap\StructType\WSIdentifier) {
                throw new \InvalidArgumentException(sprintf('The WSIdentifier property can only contain items of \Locastic\PaketTisakSoap\StructType\WSIdentifier, "%s" given', is_object($arrayOfWSIdentifierWSIdentifierItem) ? get_class($arrayOfWSIdentifierWSIdentifierItem) : gettype($arrayOfWSIdentifierWSIdentifierItem)), __LINE__);
            }
        }
        if (is_null($wSIdentifier) || (is_array($wSIdentifier) && empty($wSIdentifier))) {
            unset($this->WSIdentifier);
        } else {
            $this->WSIdentifier = $wSIdentifier;
        }
        return $this;
    }
    /**
     * Add item to WSIdentifier value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSIdentifier $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public function addToWSIdentifier(\Locastic\PaketTisakSoap\StructType\WSIdentifier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSIdentifier) {
            throw new \InvalidArgumentException(sprintf('The WSIdentifier property can only contain items of \Locastic\PaketTisakSoap\StructType\WSIdentifier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSIdentifier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSIdentifier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSIdentifier
     */
    public function getAttributeName()
    {
        return 'WSIdentifier';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
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
