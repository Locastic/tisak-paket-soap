<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReturnInfoScan ArrayType
 * @subpackage Arrays
 */
class ArrayOfReturnInfoScan extends AbstractStructArrayBase
{
    /**
     * The ReturnInfoScan
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\ReturnInfoScan[]
     */
    public $ReturnInfoScan;
    /**
     * Constructor method for ArrayOfReturnInfoScan
     * @uses ArrayOfReturnInfoScan::setReturnInfoScan()
     * @param \Locastic\PaketTisakSoap\StructType\ReturnInfoScan[] $returnInfoScan
     */
    public function __construct(array $returnInfoScan = array())
    {
        $this
            ->setReturnInfoScan($returnInfoScan);
    }
    /**
     * Get ReturnInfoScan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan[]|null
     */
    public function getReturnInfoScan()
    {
        return isset($this->ReturnInfoScan) ? $this->ReturnInfoScan : null;
    }
    /**
     * Set ReturnInfoScan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ReturnInfoScan[] $returnInfoScan
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfReturnInfoScan
     */
    public function setReturnInfoScan(array $returnInfoScan = array())
    {
        foreach ($returnInfoScan as $arrayOfReturnInfoScanReturnInfoScanItem) {
            // validation for constraint: itemType
            if (!$arrayOfReturnInfoScanReturnInfoScanItem instanceof \Locastic\PaketTisakSoap\StructType\ReturnInfoScan) {
                throw new \InvalidArgumentException(sprintf('The ReturnInfoScan property can only contain items of \Locastic\PaketTisakSoap\StructType\ReturnInfoScan, "%s" given', is_object($arrayOfReturnInfoScanReturnInfoScanItem) ? get_class($arrayOfReturnInfoScanReturnInfoScanItem) : gettype($arrayOfReturnInfoScanReturnInfoScanItem)), __LINE__);
            }
        }
        if (is_null($returnInfoScan) || (is_array($returnInfoScan) && empty($returnInfoScan))) {
            unset($this->ReturnInfoScan);
        } else {
            $this->ReturnInfoScan = $returnInfoScan;
        }
        return $this;
    }
    /**
     * Add item to ReturnInfoScan value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\ReturnInfoScan $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfReturnInfoScan
     */
    public function addToReturnInfoScan(\Locastic\PaketTisakSoap\StructType\ReturnInfoScan $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\ReturnInfoScan) {
            throw new \InvalidArgumentException(sprintf('The ReturnInfoScan property can only contain items of \Locastic\PaketTisakSoap\StructType\ReturnInfoScan, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReturnInfoScan[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReturnInfoScan
     */
    public function getAttributeName()
    {
        return 'ReturnInfoScan';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfReturnInfoScan
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
