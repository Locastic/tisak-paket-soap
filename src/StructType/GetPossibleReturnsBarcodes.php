<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPossibleReturnsBarcodes StructType
 * @subpackage Structs
 */
class GetPossibleReturnsBarcodes extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $amount;
    /**
     * The size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $size;
    /**
     * The validUntil
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $validUntil;
    /**
     * Constructor method for GetPossibleReturnsBarcodes
     * @uses GetPossibleReturnsBarcodes::setAmount()
     * @uses GetPossibleReturnsBarcodes::setSize()
     * @uses GetPossibleReturnsBarcodes::setValidUntil()
     * @param int $amount
     * @param int $size
     * @param string $validUntil
     */
    public function __construct($amount = null, $size = null, $validUntil = null)
    {
        $this
            ->setAmount($amount)
            ->setSize($size)
            ->setValidUntil($validUntil);
    }
    /**
     * Get amount value
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get size value
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Get validUntil value
     * @return string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes
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
