<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentOrders StructType
 * @subpackage Structs
 */
class CreateShipmentOrders extends AbstractStructBase
{
    /**
     * The shipmentOrders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder
     */
    public $shipmentOrders;
    /**
     * Constructor method for CreateShipmentOrders
     * @uses CreateShipmentOrders::setShipmentOrders()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder $shipmentOrders
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder $shipmentOrders = null)
    {
        $this
            ->setShipmentOrders($shipmentOrders);
    }
    /**
     * Get shipmentOrders value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder|null
     */
    public function getShipmentOrders()
    {
        return $this->shipmentOrders;
    }
    /**
     * Set shipmentOrders value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder $shipmentOrders
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrders
     */
    public function setShipmentOrders(\Locastic\PaketTisakSoap\ArrayType\ArrayOfShipmentOrder $shipmentOrders = null)
    {
        $this->shipmentOrders = $shipmentOrders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrders
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
