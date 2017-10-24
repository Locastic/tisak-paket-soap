<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPackageScan ArrayType
 * @subpackage Arrays
 */
class ArrayOfPackageScan extends AbstractStructArrayBase
{
    /**
     * The PackageScan
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\PackageScan[]
     */
    public $PackageScan;
    /**
     * Constructor method for ArrayOfPackageScan
     * @uses ArrayOfPackageScan::setPackageScan()
     * @param \Locastic\PaketTisakSoap\StructType\PackageScan[] $packageScan
     */
    public function __construct(array $packageScan = array())
    {
        $this
            ->setPackageScan($packageScan);
    }
    /**
     * Get PackageScan value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan[]|null
     */
    public function getPackageScan()
    {
        return isset($this->PackageScan) ? $this->PackageScan : null;
    }
    /**
     * Set PackageScan value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\PackageScan[] $packageScan
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackageScan
     */
    public function setPackageScan(array $packageScan = array())
    {
        foreach ($packageScan as $arrayOfPackageScanPackageScanItem) {
            // validation for constraint: itemType
            if (!$arrayOfPackageScanPackageScanItem instanceof \Locastic\PaketTisakSoap\StructType\PackageScan) {
                throw new \InvalidArgumentException(sprintf('The PackageScan property can only contain items of \Locastic\PaketTisakSoap\StructType\PackageScan, "%s" given', is_object($arrayOfPackageScanPackageScanItem) ? get_class($arrayOfPackageScanPackageScanItem) : gettype($arrayOfPackageScanPackageScanItem)), __LINE__);
            }
        }
        if (is_null($packageScan) || (is_array($packageScan) && empty($packageScan))) {
            unset($this->PackageScan);
        } else {
            $this->PackageScan = $packageScan;
        }
        return $this;
    }
    /**
     * Add item to PackageScan value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\PackageScan $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackageScan
     */
    public function addToPackageScan(\Locastic\PaketTisakSoap\StructType\PackageScan $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\PackageScan) {
            throw new \InvalidArgumentException(sprintf('The PackageScan property can only contain items of \Locastic\PaketTisakSoap\StructType\PackageScan, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageScan[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\PackageScan|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PackageScan
     */
    public function getAttributeName()
    {
        return 'PackageScan';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackageScan
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
