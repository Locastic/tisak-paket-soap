<?php

namespace Locastic\PaketTisakSoap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalService ArrayType
 * @subpackage Arrays
 */
class ArrayOfAdditionalService extends AbstractStructArrayBase
{
    /**
     * The AdditionalService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Locastic\PaketTisakSoap\StructType\AdditionalService[]
     */
    public $AdditionalService;
    /**
     * Constructor method for ArrayOfAdditionalService
     * @uses ArrayOfAdditionalService::setAdditionalService()
     * @param \Locastic\PaketTisakSoap\StructType\AdditionalService[] $additionalService
     */
    public function __construct(array $additionalService = array())
    {
        $this
            ->setAdditionalService($additionalService);
    }
    /**
     * Get AdditionalService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService[]|null
     */
    public function getAdditionalService()
    {
        return isset($this->AdditionalService) ? $this->AdditionalService : null;
    }
    /**
     * Set AdditionalService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\AdditionalService[] $additionalService
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService
     */
    public function setAdditionalService(array $additionalService = array())
    {
        foreach ($additionalService as $arrayOfAdditionalServiceAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalServiceAdditionalServiceItem instanceof \Locastic\PaketTisakSoap\StructType\AdditionalService) {
                throw new \InvalidArgumentException(sprintf('The AdditionalService property can only contain items of \Locastic\PaketTisakSoap\StructType\AdditionalService, "%s" given', is_object($arrayOfAdditionalServiceAdditionalServiceItem) ? get_class($arrayOfAdditionalServiceAdditionalServiceItem) : gettype($arrayOfAdditionalServiceAdditionalServiceItem)), __LINE__);
            }
        }
        if (is_null($additionalService) || (is_array($additionalService) && empty($additionalService))) {
            unset($this->AdditionalService);
        } else {
            $this->AdditionalService = $additionalService;
        }
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws \InvalidArgumentException
     * @param \Locastic\PaketTisakSoap\StructType\AdditionalService $item
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService
     */
    public function addToAdditionalService(\Locastic\PaketTisakSoap\StructType\AdditionalService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Locastic\PaketTisakSoap\StructType\AdditionalService) {
            throw new \InvalidArgumentException(sprintf('The AdditionalService property can only contain items of \Locastic\PaketTisakSoap\StructType\AdditionalService, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalService[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalService
     */
    public function getAttributeName()
    {
        return 'AdditionalService';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService
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
