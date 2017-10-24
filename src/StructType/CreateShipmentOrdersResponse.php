<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentOrdersResponse StructType
 * @subpackage Structs
 */
class CreateShipmentOrdersResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentOrdersResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse
     */
    public $CreateShipmentOrdersResult;
    /**
     * Constructor method for CreateShipmentOrdersResponse
     * @uses CreateShipmentOrdersResponse::setCreateShipmentOrdersResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse $createShipmentOrdersResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse $createShipmentOrdersResult = null)
    {
        $this
            ->setCreateShipmentOrdersResult($createShipmentOrdersResult);
    }
    /**
     * Get CreateShipmentOrdersResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse|null
     */
    public function getCreateShipmentOrdersResult()
    {
        return $this->CreateShipmentOrdersResult;
    }
    /**
     * Set CreateShipmentOrdersResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse $createShipmentOrdersResult
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrdersResponse
     */
    public function setCreateShipmentOrdersResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSCreateShipmentOrdersResponse $createShipmentOrdersResult = null)
    {
        $this->CreateShipmentOrdersResult = $createShipmentOrdersResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrdersResponse
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
