<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMainServicesResponse StructType
 * @subpackage Structs
 */
class GetMainServicesResponse extends AbstractStructBase
{
    /**
     * The GetMainServicesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetMainServicesResult;
    /**
     * Constructor method for GetMainServicesResponse
     * @uses GetMainServicesResponse::setGetMainServicesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getMainServicesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getMainServicesResult = null)
    {
        $this
            ->setGetMainServicesResult($getMainServicesResult);
    }
    /**
     * Get GetMainServicesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetMainServicesResult()
    {
        return $this->GetMainServicesResult;
    }
    /**
     * Set GetMainServicesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getMainServicesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetMainServicesResponse
     */
    public function setGetMainServicesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getMainServicesResult = null)
    {
        $this->GetMainServicesResult = $getMainServicesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetMainServicesResponse
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
