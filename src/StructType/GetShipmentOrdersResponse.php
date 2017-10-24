<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentOrdersResponse StructType
 * @subpackage Structs
 */
class GetShipmentOrdersResponse extends AbstractStructBase
{
    /**
     * The GetShipmentOrdersResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse
     */
    public $GetShipmentOrdersResult;
    /**
     * Constructor method for GetShipmentOrdersResponse
     * @uses GetShipmentOrdersResponse::setGetShipmentOrdersResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse $getShipmentOrdersResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse $getShipmentOrdersResult = null)
    {
        $this
            ->setGetShipmentOrdersResult($getShipmentOrdersResult);
    }
    /**
     * Get GetShipmentOrdersResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse|null
     */
    public function getGetShipmentOrdersResult()
    {
        return $this->GetShipmentOrdersResult;
    }
    /**
     * Set GetShipmentOrdersResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse $getShipmentOrdersResult
     * @return \Locastic\PaketTisakSoap\StructType\GetShipmentOrdersResponse
     */
    public function setGetShipmentOrdersResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSGetShipmentOrdersResponse $getShipmentOrdersResult = null)
    {
        $this->GetShipmentOrdersResult = $getShipmentOrdersResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetShipmentOrdersResponse
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
