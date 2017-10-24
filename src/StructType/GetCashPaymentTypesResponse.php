<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCashPaymentTypesResponse StructType
 * @subpackage Structs
 */
class GetCashPaymentTypesResponse extends AbstractStructBase
{
    /**
     * The GetCashPaymentTypesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetCashPaymentTypesResult;
    /**
     * Constructor method for GetCashPaymentTypesResponse
     * @uses GetCashPaymentTypesResponse::setGetCashPaymentTypesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getCashPaymentTypesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getCashPaymentTypesResult = null)
    {
        $this
            ->setGetCashPaymentTypesResult($getCashPaymentTypesResult);
    }
    /**
     * Get GetCashPaymentTypesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetCashPaymentTypesResult()
    {
        return $this->GetCashPaymentTypesResult;
    }
    /**
     * Set GetCashPaymentTypesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getCashPaymentTypesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetCashPaymentTypesResponse
     */
    public function setGetCashPaymentTypesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getCashPaymentTypesResult = null)
    {
        $this->GetCashPaymentTypesResult = $getCashPaymentTypesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetCashPaymentTypesResponse
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
