<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageLabelResponse StructType
 * @subpackage Structs
 */
class GetPackageLabelResponse extends AbstractStructBase
{
    /**
     * The GetPackageLabelResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetPackageLabelResult;
    /**
     * Constructor method for GetPackageLabelResponse
     * @uses GetPackageLabelResponse::setGetPackageLabelResult()
     * @param string $getPackageLabelResult
     */
    public function __construct($getPackageLabelResult = null)
    {
        $this
            ->setGetPackageLabelResult($getPackageLabelResult);
    }
    /**
     * Get GetPackageLabelResult value
     * @return string|null
     */
    public function getGetPackageLabelResult()
    {
        return $this->GetPackageLabelResult;
    }
    /**
     * Set GetPackageLabelResult value
     * @param string $getPackageLabelResult
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabelResponse
     */
    public function setGetPackageLabelResult($getPackageLabelResult = null)
    {
        // validation for constraint: string
        if (!is_null($getPackageLabelResult) && !is_string($getPackageLabelResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getPackageLabelResult)), __LINE__);
        }
        $this->GetPackageLabelResult = $getPackageLabelResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabelResponse
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
