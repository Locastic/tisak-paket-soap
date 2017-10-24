<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReturnInfo StructType
 * @subpackage Structs
 */
class GetReturnInfo extends AbstractStructBase
{
    /**
     * The clientReferenceNumberList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber
     */
    public $clientReferenceNumberList;
    /**
     * Constructor method for GetReturnInfo
     * @uses GetReturnInfo::setClientReferenceNumberList()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumberList
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumberList = null)
    {
        $this
            ->setClientReferenceNumberList($clientReferenceNumberList);
    }
    /**
     * Get clientReferenceNumberList value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber|null
     */
    public function getClientReferenceNumberList()
    {
        return $this->clientReferenceNumberList;
    }
    /**
     * Set clientReferenceNumberList value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumberList
     * @return \Locastic\PaketTisakSoap\StructType\GetReturnInfo
     */
    public function setClientReferenceNumberList(\Locastic\PaketTisakSoap\ArrayType\ArrayOfClientReferenceNumber $clientReferenceNumberList = null)
    {
        $this->clientReferenceNumberList = $clientReferenceNumberList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetReturnInfo
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
