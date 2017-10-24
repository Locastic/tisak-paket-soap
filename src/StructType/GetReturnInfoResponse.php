<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReturnInfoResponse StructType
 * @subpackage Structs
 */
class GetReturnInfoResponse extends AbstractStructBase
{
    /**
     * The GetReturnInfoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse
     */
    public $GetReturnInfoResult;
    /**
     * Constructor method for GetReturnInfoResponse
     * @uses GetReturnInfoResponse::setGetReturnInfoResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse $getReturnInfoResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse $getReturnInfoResult = null)
    {
        $this
            ->setGetReturnInfoResult($getReturnInfoResult);
    }
    /**
     * Get GetReturnInfoResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse|null
     */
    public function getGetReturnInfoResult()
    {
        return $this->GetReturnInfoResult;
    }
    /**
     * Set GetReturnInfoResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse $getReturnInfoResult
     * @return \Locastic\PaketTisakSoap\StructType\GetReturnInfoResponse
     */
    public function setGetReturnInfoResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetReturnInfoResponse $getReturnInfoResult = null)
    {
        $this->GetReturnInfoResult = $getReturnInfoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetReturnInfoResponse
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
