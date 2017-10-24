<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBarcodeResponse StructType
 * @subpackage Structs
 */
class GetBarcodeResponse extends AbstractStructBase
{
    /**
     * The GetBarcodeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
     */
    public $GetBarcodeResult;
    /**
     * Constructor method for GetBarcodeResponse
     * @uses GetBarcodeResponse::setGetBarcodeResult()
     * @param \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse $getBarcodeResult
     */
    public function __construct(\Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse $getBarcodeResult = null)
    {
        $this
            ->setGetBarcodeResult($getBarcodeResult);
    }
    /**
     * Get GetBarcodeResult value
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse|null
     */
    public function getGetBarcodeResult()
    {
        return $this->GetBarcodeResult;
    }
    /**
     * Set GetBarcodeResult value
     * @param \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse $getBarcodeResult
     * @return \Locastic\PaketTisakSoap\StructType\GetBarcodeResponse
     */
    public function setGetBarcodeResult(\Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse $getBarcodeResult = null)
    {
        $this->GetBarcodeResult = $getBarcodeResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetBarcodeResponse
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
