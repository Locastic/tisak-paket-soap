<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentTypesResponse StructType
 * @subpackage Structs
 */
class GetPaymentTypesResponse extends AbstractStructBase
{
    /**
     * The GetPaymentTypesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier
     */
    public $GetPaymentTypesResult;
    /**
     * Constructor method for GetPaymentTypesResponse
     * @uses GetPaymentTypesResponse::setGetPaymentTypesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPaymentTypesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPaymentTypesResult = null)
    {
        $this
            ->setGetPaymentTypesResult($getPaymentTypesResult);
    }
    /**
     * Get GetPaymentTypesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier|null
     */
    public function getGetPaymentTypesResult()
    {
        return $this->GetPaymentTypesResult;
    }
    /**
     * Set GetPaymentTypesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPaymentTypesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetPaymentTypesResponse
     */
    public function setGetPaymentTypesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSIdentifier $getPaymentTypesResult = null)
    {
        $this->GetPaymentTypesResult = $getPaymentTypesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetPaymentTypesResponse
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
