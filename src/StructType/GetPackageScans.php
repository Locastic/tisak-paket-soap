<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageScans StructType
 * @subpackage Structs
 */
class GetPackageScans extends AbstractStructBase
{
    /**
     * The clientBarcodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfString
     */
    public $clientBarcodes;
    /**
     * Constructor method for GetPackageScans
     * @uses GetPackageScans::setClientBarcodes()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $clientBarcodes
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfString $clientBarcodes = null)
    {
        $this
            ->setClientBarcodes($clientBarcodes);
    }
    /**
     * Get clientBarcodes value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfString|null
     */
    public function getClientBarcodes()
    {
        return $this->clientBarcodes;
    }
    /**
     * Set clientBarcodes value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $clientBarcodes
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageScans
     */
    public function setClientBarcodes(\Locastic\PaketTisakSoap\ArrayType\ArrayOfString $clientBarcodes = null)
    {
        $this->clientBarcodes = $clientBarcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageScans
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
