<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPossibleReturnsBarcodesResponse StructType
 * @subpackage Structs
 */
class GetPossibleReturnsBarcodesResponse extends AbstractStructBase
{
    /**
     * The GetPossibleReturnsBarcodesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
     */
    public $GetPossibleReturnsBarcodesResult;
    /**
     * Constructor method for GetPossibleReturnsBarcodesResponse
     * @uses GetPossibleReturnsBarcodesResponse::setGetPossibleReturnsBarcodesResult()
     * @param \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse $getPossibleReturnsBarcodesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse $getPossibleReturnsBarcodesResult = null)
    {
        $this
            ->setGetPossibleReturnsBarcodesResult($getPossibleReturnsBarcodesResult);
    }
    /**
     * Get GetPossibleReturnsBarcodesResult value
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse|null
     */
    public function getGetPossibleReturnsBarcodesResult()
    {
        return $this->GetPossibleReturnsBarcodesResult;
    }
    /**
     * Set GetPossibleReturnsBarcodesResult value
     * @param \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse $getPossibleReturnsBarcodesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodesResponse
     */
    public function setGetPossibleReturnsBarcodesResult(\Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse $getPossibleReturnsBarcodesResult = null)
    {
        $this->GetPossibleReturnsBarcodesResult = $getPossibleReturnsBarcodesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodesResponse
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
