<?php

namespace Locastic\PaketTisakSoap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetPackageScans
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetPackageScans $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageScansResponse|bool
     */
    public function GetPackageScans(\Locastic\PaketTisakSoap\StructType\GetPackageScans $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPackageScans($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentOrders
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetShipmentOrders $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetShipmentOrdersResponse|bool
     */
    public function GetShipmentOrders(\Locastic\PaketTisakSoap\StructType\GetShipmentOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetShipmentOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReturnInfo
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetReturnInfo $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetReturnInfoResponse|bool
     */
    public function GetReturnInfo(\Locastic\PaketTisakSoap\StructType\GetReturnInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReturnInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDeliverySites
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetDeliverySites $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetDeliverySitesResponse|bool
     */
    public function GetDeliverySites(\Locastic\PaketTisakSoap\StructType\GetDeliverySites $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDeliverySites($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPossibleReturnsBarcodes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodesResponse|bool
     */
    public function GetPossibleReturnsBarcodes(\Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPossibleReturnsBarcodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPaymentTypes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetPaymentTypes $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetPaymentTypesResponse|bool
     */
    public function GetPaymentTypes(\Locastic\PaketTisakSoap\StructType\GetPaymentTypes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPaymentTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMainServices
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetMainServices $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetMainServicesResponse|bool
     */
    public function GetMainServices(\Locastic\PaketTisakSoap\StructType\GetMainServices $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMainServices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContents
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetContents $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetContentsResponse|bool
     */
    public function GetContents(\Locastic\PaketTisakSoap\StructType\GetContents $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetContents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCashPaymentTypes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetCashPaymentTypes $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetCashPaymentTypesResponse|bool
     */
    public function GetCashPaymentTypes(\Locastic\PaketTisakSoap\StructType\GetCashPaymentTypes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCashPaymentTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdditionalServices
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetAdditionalServices $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetAdditionalServicesResponse|bool
     */
    public function GetAdditionalServices(\Locastic\PaketTisakSoap\StructType\GetAdditionalServices $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAdditionalServices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetT2L
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetT2L $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetT2LResponse|bool
     */
    public function GetT2L(\Locastic\PaketTisakSoap\StructType\GetT2L $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetT2L($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackageSizes
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetPackageSizes $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageSizesResponse|bool
     */
    public function GetPackageSizes(\Locastic\PaketTisakSoap\StructType\GetPackageSizes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPackageSizes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBarcode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetBarcode $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetBarcodeResponse|bool
     */
    public function GetBarcode(\Locastic\PaketTisakSoap\StructType\GetBarcode $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetBarcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackageLabel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: AuthentificationHeader
     * - SOAPHeaderNamespaces: http://dx-web.org
     * - SOAPHeaderTypes: \Locastic\PaketTisakSoap\StructType\AuthentificationHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Locastic\PaketTisakSoap\StructType\GetPackageLabel $parameters
     * @return \Locastic\PaketTisakSoap\StructType\GetPackageLabelResponse|bool
     */
    public function GetPackageLabel(\Locastic\PaketTisakSoap\StructType\GetPackageLabel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPackageLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Locastic\PaketTisakSoap\StructType\GetAdditionalServicesResponse|\Locastic\PaketTisakSoap\StructType\GetBarcodeResponse|\Locastic\PaketTisakSoap\StructType\GetCashPaymentTypesResponse|\Locastic\PaketTisakSoap\StructType\GetContentsResponse|\Locastic\PaketTisakSoap\StructType\GetDeliverySitesResponse|\Locastic\PaketTisakSoap\StructType\GetMainServicesResponse|\Locastic\PaketTisakSoap\StructType\GetPackageLabelResponse|\Locastic\PaketTisakSoap\StructType\GetPackageScansResponse|\Locastic\PaketTisakSoap\StructType\GetPackageSizesResponse|\Locastic\PaketTisakSoap\StructType\GetPaymentTypesResponse|\Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodesResponse|\Locastic\PaketTisakSoap\StructType\GetReturnInfoResponse|\Locastic\PaketTisakSoap\StructType\GetShipmentOrdersResponse|\Locastic\PaketTisakSoap\StructType\GetT2LResponse
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
