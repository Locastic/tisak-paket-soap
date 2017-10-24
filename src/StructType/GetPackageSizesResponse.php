<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageSizesResponse StructType
 * @subpackage Structs
 */
class GetPackageSizesResponse extends AbstractStructBase
{
    /**
     * The GetPackageSizesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetPackageSizesResult;
    /**
     * Constructor method for GetPackageSizesResponse
     * @uses GetPackageSizesResponse::setGetPackageSizesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPackageSizesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPackageSizesResult = null)
    {
        $this
            ->setGetPackageSizesResult($getPackageSizesResult);
    }
    /**
     * Get GetPackageSizesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetPackageSizesResult()
    {
        return $this->GetPackageSizesResult;
    }
    /**
     * Set GetPackageSizesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPackageSizesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageSizesResponse
     */
    public function setGetPackageSizesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPackageSizesResult = null)
    {
        $this->GetPackageSizesResult = $getPackageSizesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageSizesResponse
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
