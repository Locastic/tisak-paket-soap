<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSGetPossibleReturnsBarcodesResponse StructType
 * @subpackage Structs
 */
class WSGetPossibleReturnsBarcodesResponse extends AbstractStructBase
{
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Size;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ValidUntil;
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
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfString
     */
    public $Barcodes;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for WSGetPossibleReturnsBarcodesResponse
     * @uses WSGetPossibleReturnsBarcodesResponse::setSize()
     * @uses WSGetPossibleReturnsBarcodesResponse::setValidUntil()
     * @uses WSGetPossibleReturnsBarcodesResponse::setResponseStatus()
     * @uses WSGetPossibleReturnsBarcodesResponse::setErrorCode()
     * @uses WSGetPossibleReturnsBarcodesResponse::setBarcodes()
     * @uses WSGetPossibleReturnsBarcodesResponse::setErrorMessage()
     * @param int $size
     * @param string $validUntil
     * @param string $responseStatus
     * @param int $errorCode
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barcodes
     * @param string $errorMessage
     */
    public function __construct($size = null, $validUntil = null, $responseStatus = null, $errorCode = null, \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barcodes = null, $errorMessage = null)
    {
        $this
            ->setSize($size)
            ->setValidUntil($validUntil)
            ->setResponseStatus($responseStatus)
            ->setErrorCode($errorCode)
            ->setBarcodes($barcodes)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get ValidUntil value
     * @return string
     */
    public function getValidUntil()
    {
        return $this->ValidUntil;
    }
    /**
     * Set ValidUntil value
     * @param string $validUntil
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validUntil)), __LINE__);
        }
        $this->ValidUntil = $validUntil;
        return $this;
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
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
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
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
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
     * Get Barcodes value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfString|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barcodes
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
     */
    public function setBarcodes(\Locastic\PaketTisakSoap\ArrayType\ArrayOfString $barcodes = null)
    {
        $this->Barcodes = $barcodes;
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
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
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
     * @return \Locastic\PaketTisakSoap\StructType\WSGetPossibleReturnsBarcodesResponse
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
