<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSGetBarcodeResponse StructType
 * @subpackage Structs
 */
class WSGetBarcodeResponse extends AbstractStructBase
{
    /**
     * The ResponseStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ResponseStatus;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ErrorCode;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Barcode;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for WSGetBarcodeResponse
     * @uses WSGetBarcodeResponse::setResponseStatus()
     * @uses WSGetBarcodeResponse::setErrorCode()
     * @uses WSGetBarcodeResponse::setBarcode()
     * @uses WSGetBarcodeResponse::setErrorMessage()
     * @param string $responseStatus
     * @param int $errorCode
     * @param string $barcode
     * @param string $errorMessage
     */
    public function __construct($responseStatus = null, $errorCode = null, $barcode = null, $errorMessage = null)
    {
        $this
            ->setResponseStatus($responseStatus)
            ->setErrorCode($errorCode)
            ->setBarcode($barcode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get ResponseStatus value
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }
    /**
     * Set ResponseStatus value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $responseStatus
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
     */
    public function setResponseStatus($responseStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::valueIsValid($responseStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseStatus, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::getValidValues())), __LINE__);
        }
        $this->ResponseStatus = $responseStatus;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param string $barcode
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\WSGetBarcodeResponse
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
