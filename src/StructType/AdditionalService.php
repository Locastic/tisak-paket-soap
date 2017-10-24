<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalService StructType
 * @subpackage Structs
 */
class AdditionalService extends AbstractStructBase
{
    /**
     * The AdditionalServiceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AdditionalServiceId;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for AdditionalService
     * @uses AdditionalService::setAdditionalServiceId()
     * @uses AdditionalService::setQuantity()
     * @param int $additionalServiceId
     * @param int $quantity
     */
    public function __construct($additionalServiceId = null, $quantity = null)
    {
        $this
            ->setAdditionalServiceId($additionalServiceId)
            ->setQuantity($quantity);
    }
    /**
     * Get AdditionalServiceId value
     * @return int
     */
    public function getAdditionalServiceId()
    {
        return $this->AdditionalServiceId;
    }
    /**
     * Set AdditionalServiceId value
     * @param int $additionalServiceId
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService
     */
    public function setAdditionalServiceId($additionalServiceId = null)
    {
        // validation for constraint: int
        if (!is_null($additionalServiceId) && !is_numeric($additionalServiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalServiceId)), __LINE__);
        }
        $this->AdditionalServiceId = $additionalServiceId;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\AdditionalService
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
