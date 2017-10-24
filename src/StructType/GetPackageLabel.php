<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageLabel StructType
 * @subpackage Structs
 */
class GetPackageLabel extends AbstractStructBase
{
    /**
     * The A4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $A4;
    /**
     * The barkodovi
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfString
     */
    public $barkodovi;
    /**
     * Constructor method for GetPackageLabel
     * @uses GetPackageLabel::setA4()
     * @uses GetPackageLabel::setBarkodovi()
     * @param bool $a4
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barkodovi
     */
    public function __construct($a4 = null, \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barkodovi = null)
    {
        $this
            ->setA4($a4)
            ->setBarkodovi($barkodovi);
    }
    /**
     * Get A4 value
     * @return bool
     */
    public function getA4()
    {
        return $this->A4;
    }
    /**
     * Set A4 value
     * @param bool $a4
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabel
     */
    public function setA4($a4 = null)
    {
        // validation for constraint: boolean
        if (!is_null($a4) && !is_bool($a4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($a4)), __LINE__);
        }
        $this->A4 = $a4;
        return $this;
    }
    /**
     * Get barkodovi value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfString|null
     */
    public function getBarkodovi()
    {
        return $this->barkodovi;
    }
    /**
     * Set barkodovi value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barkodovi
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabel
     */
    public function setBarkodovi(\Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barkodovi = null)
    {
        $this->barkodovi = $barkodovi;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabel
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
