<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliverySitesResponse StructType
 * @subpackage Structs
 */
class GetDeliverySitesResponse extends AbstractStructBase
{
    /**
     * The GetDeliverySitesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite
     */
    public $GetDeliverySitesResult;
    /**
     * Constructor method for GetDeliverySitesResponse
     * @uses GetDeliverySitesResponse::setGetDeliverySitesResult()
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite $getDeliverySitesResult
     */
    public function __construct(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite $getDeliverySitesResult = null)
    {
        $this
            ->setGetDeliverySitesResult($getDeliverySitesResult);
    }
    /**
     * Get GetDeliverySitesResult value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite|null
     */
    public function getGetDeliverySitesResult()
    {
        return $this->GetDeliverySitesResult;
    }
    /**
     * Set GetDeliverySitesResult value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite $getDeliverySitesResult
     * @return \Locastic\PaketTisakSoap\StructType\GetDeliverySitesResponse
     */
    public function setGetDeliverySitesResult(\Locastic\PaketTisakSoap\ArrayType\ArrayOfWSDeliverySite $getDeliverySitesResult = null)
    {
        $this->GetDeliverySitesResult = $getDeliverySitesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\GetDeliverySitesResponse
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
