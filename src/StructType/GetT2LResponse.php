<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetT2LResponse StructType
 * @subpackage Structs
 */
class GetT2LResponse extends AbstractStructBase
{
    /**
     * The GetT2LResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetT2LResult;
    /**
     * Constructor method for GetT2LResponse
     * @uses GetT2LResponse::setGetT2LResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getT2LResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getT2LResult = null)
    {
        $this
            ->setGetT2LResult($getT2LResult);
    }
    /**
     * Get GetT2LResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetT2LResult()
    {
        return $this->GetT2LResult;
    }
    /**
     * Set GetT2LResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getT2LResult
     * @return \Locastic\PaketTisakSoap\StructType\GetT2LResponse
     */
    public function setGetT2LResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getT2LResult = null)
    {
        $this->GetT2LResult = $getT2LResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetT2LResponse
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
