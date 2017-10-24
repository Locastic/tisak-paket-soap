<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWSDeliverySite ArrayType
 * @subpackage Arrays
 */
class ArrayOfWSDeliverySite extends AbstractStructArrayBase
{
    /**
     * The WSDeliverySite
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\WSDeliverySite[]
     */
    public $WSDeliverySite;
    /**
     * Constructor method for ArrayOfWSDeliverySite
     * @uses ArrayOfWSDeliverySite::setWSDeliverySite()
     * @param \Locastic\PaketTisakSoap\StructType\WSDeliverySite[] $wSDeliverySite
     */
    public function __construct(array $wSDeliverySite = array())
    {
        $this
            ->setWSDeliverySite($wSDeliverySite);
    }
    /**
     * Get WSDeliverySite value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite[]|null
     */
    public function getWSDeliverySite()
    {
        return isset($this->WSDeliverySite) ? $this->WSDeliverySite : null;
    }
    /**
     * Set WSDeliverySite value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSDeliverySite[] $wSDeliverySite
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite
     */
    public function setWSDeliverySite(array $wSDeliverySite = array())
    {
        foreach ($wSDeliverySite as $arrayOfWSDeliverySiteWSDeliverySiteItem) {
            // validation for constraint: itemType
            if (!$arrayOfWSDeliverySiteWSDeliverySiteItem instanceof \Locastic\PaketTisakSoap\StructType\WSDeliverySite) {
                throw new \InvalidArgumentException(sprintf('The WSDeliverySite property can only contain items of \Locastic\PaketTisakSoap\StructType\WSDeliverySite, "%s" given', is_object($arrayOfWSDeliverySiteWSDeliverySiteItem) ? get_class($arrayOfWSDeliverySiteWSDeliverySiteItem) : gettype($arrayOfWSDeliverySiteWSDeliverySiteItem)), __LINE__);
            }
        }
        if (is_null($wSDeliverySite) || (is_array($wSDeliverySite) && empty($wSDeliverySite))) {
            unset($this->WSDeliverySite);
        } else {
            $this->WSDeliverySite = $wSDeliverySite;
        }
        return $this;
    }
    /**
     * Add item to WSDeliverySite value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\WSDeliverySite $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite
     */
    public function addToWSDeliverySite(\Locastic\PaketTisakSoap\StructType\WSDeliverySite $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\WSDeliverySite) {
            throw new \InvalidArgumentException(sprintf('The WSDeliverySite property can only contain items of \Locastic\PaketTisakSoap\StructType\WSDeliverySite, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WSDeliverySite[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WSDeliverySite
     */
    public function getAttributeName()
    {
        return 'WSDeliverySite';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite
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
