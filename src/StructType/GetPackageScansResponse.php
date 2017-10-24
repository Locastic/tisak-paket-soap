<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageScansResponse StructType
 * @subpackage Structs
 */
class GetPackageScansResponse extends AbstractStructBase
{
    /**
     * The GetPackageScansResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse
     */
    public $GetPackageScansResult;
    /**
     * Constructor method for GetPackageScansResponse
     * @uses GetPackageScansResponse::setGetPackageScansResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse $getPackageScansResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse $getPackageScansResult = null)
    {
        $this
            ->setGetPackageScansResult($getPackageScansResult);
    }
    /**
     * Get GetPackageScansResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse|null
     */
    public function getGetPackageScansResult()
    {
        return $this->GetPackageScansResult;
    }
    /**
     * Set GetPackageScansResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse $getPackageScansResult
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageScansResponse
     */
    public function setGetPackageScansResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetPackageScansResponse $getPackageScansResult = null)
    {
        $this->GetPackageScansResult = $getPackageScansResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageScansResponse
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
