<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContentsResponse StructType
 * @subpackage Structs
 */
class GetContentsResponse extends AbstractStructBase
{
    /**
     * The GetContentsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetContentsResult;
    /**
     * Constructor method for GetContentsResponse
     * @uses GetContentsResponse::setGetContentsResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getContentsResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getContentsResult = null)
    {
        $this
            ->setGetContentsResult($getContentsResult);
    }
    /**
     * Get GetContentsResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetContentsResult()
    {
        return $this->GetContentsResult;
    }
    /**
     * Set GetContentsResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getContentsResult
     * @return \Locastic\PaketTisakSoap\StructType\GetContentsResponse
     */
    public function setGetContentsResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getContentsResult = null)
    {
        $this->GetContentsResult = $getContentsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetContentsResponse
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
