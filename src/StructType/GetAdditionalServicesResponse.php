<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalServicesResponse StructType
 * @subpackage Structs
 */
class GetAdditionalServicesResponse extends AbstractStructBase
{
    /**
     * The GetAdditionalServicesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetAdditionalServicesResult;
    /**
     * Constructor method for GetAdditionalServicesResponse
     * @uses GetAdditionalServicesResponse::setGetAdditionalServicesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getAdditionalServicesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getAdditionalServicesResult = null)
    {
        $this
            ->setGetAdditionalServicesResult($getAdditionalServicesResult);
    }
    /**
     * Get GetAdditionalServicesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetAdditionalServicesResult()
    {
        return $this->GetAdditionalServicesResult;
    }
    /**
     * Set GetAdditionalServicesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getAdditionalServicesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetAdditionalServicesResponse
     */
    public function setGetAdditionalServicesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getAdditionalServicesResult = null)
    {
        $this->GetAdditionalServicesResult = $getAdditionalServicesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetAdditionalServicesResponse
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
