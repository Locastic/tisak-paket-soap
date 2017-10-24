<?php

namespace Locastic\PaketTisakSoap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the AuthentificationHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Locastic\PaketTisakSoap\StructType\AuthentificationHeader $authentificationHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAuthentificationHeader(\Locastic\PaketTisakSoap\StructType\AuthentificationHeader $authentificationHeader, $nameSpace = 'http://dx-web.org', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AuthentificationHeader', $authentificationHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named CreateShipmentOrders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\CreateShipmentOrders $parameters
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrdersResponse|bool
     */
    public function CreateShipmentOrders(\Locastic\PaketTisakSoap\StructType\CreateShipmentOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateShipmentOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Locastic\PaketTisakSoap\StructType\CreateShipmentOrdersResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
