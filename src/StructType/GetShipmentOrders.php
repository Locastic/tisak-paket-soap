<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentOrders StructType
 * @subpackage Structs
 */
class GetShipmentOrders extends AbstractStructBase
{
    /**
     * The clientReferenceNumbers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber
     */
    public $clientReferenceNumbers;
    /**
     * Constructor method for GetShipmentOrders
     * @uses GetShipmentOrders::setClientReferenceNumbers()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumbers
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumbers = null)
    {
        $this
            ->setClientReferenceNumbers($clientReferenceNumbers);
    }
    /**
     * Get clientReferenceNumbers value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber|null
     */
    public function getClientReferenceNumbers()
    {
        return $this->clientReferenceNumbers;
    }
    /**
     * Set clientReferenceNumbers value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumbers
     * @return \Locastic\PaketTisakSoap\StructType\GetShipmentOrders
     */
    public function setClientReferenceNumbers(\Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumbers = null)
    {
        $this->clientReferenceNumbers = $clientReferenceNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetShipmentOrders
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
