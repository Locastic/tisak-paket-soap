<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Package StructType
 * @subpackage Structs
 */
class Package extends AbstractStructBase
{
    /**
     * The BarcodeType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BarcodeType;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Weight;
    /**
     * The VolumeX
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VolumeX;
    /**
     * The VolumeY
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VolumeY;
    /**
     * The VolumeZ
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VolumeZ;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Size;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Barcode;
    /**
     * The CommentPackage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CommentPackage;
    /**
     * The ReferenceFieldPackageB
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceFieldPackageB;
    /**
     * Constructor method for Package
     * @uses Package::setBarcodeType()
     * @uses Package::setWeight()
     * @uses Package::setVolumeX()
     * @uses Package::setVolumeY()
     * @uses Package::setVolumeZ()
     * @uses Package::setSize()
     * @uses Package::setBarcode()
     * @uses Package::setCommentPackage()
     * @uses Package::setReferenceFieldPackageB()
     * @param string $barcodeType
     * @param float $weight
     * @param int $volumeX
     * @param int $volumeY
     * @param int $volumeZ
     * @param int $size
     * @param string $barcode
     * @param string $commentPackage
     * @param string $referenceFieldPackageB
     */
    public function __construct($barcodeType = null, $weight = null, $volumeX = null, $volumeY = null, $volumeZ = null, $size = null, $barcode = null, $commentPackage = null, $referenceFieldPackageB = null)
    {
        $this
            ->setBarcodeType($barcodeType)
            ->setWeight($weight)
            ->setVolumeX($volumeX)
            ->setVolumeY($volumeY)
            ->setVolumeZ($volumeZ)
            ->setSize($size)
            ->setBarcode($barcode)
            ->setCommentPackage($commentPackage)
            ->setReferenceFieldPackageB($referenceFieldPackageB);
    }
    /**
     * Get BarcodeType value
     * @return string
     */
    public function getBarcodeType()
    {
        return $this->BarcodeType;
    }
    /**
     * Set BarcodeType value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumBarcodeType::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumBarcodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $barcodeType
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setBarcodeType($barcodeType = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumBarcodeType::valueIsValid($barcodeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $barcodeType, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumBarcodeType::getValidValues())), __LINE__);
        }
        $this->BarcodeType = $barcodeType;
        return $this;
    }
    /**
     * Get Weight value
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setWeight($weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get VolumeX value
     * @return int
     */
    public function getVolumeX()
    {
        return $this->VolumeX;
    }
    /**
     * Set VolumeX value
     * @param int $volumeX
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setVolumeX($volumeX = null)
    {
        // validation for constraint: int
        if (!is_null($volumeX) && !is_numeric($volumeX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volumeX)), __LINE__);
        }
        $this->VolumeX = $volumeX;
        return $this;
    }
    /**
     * Get VolumeY value
     * @return int
     */
    public function getVolumeY()
    {
        return $this->VolumeY;
    }
    /**
     * Set VolumeY value
     * @param int $volumeY
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setVolumeY($volumeY = null)
    {
        // validation for constraint: int
        if (!is_null($volumeY) && !is_numeric($volumeY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volumeY)), __LINE__);
        }
        $this->VolumeY = $volumeY;
        return $this;
    }
    /**
     * Get VolumeZ value
     * @return int
     */
    public function getVolumeZ()
    {
        return $this->VolumeZ;
    }
    /**
     * Set VolumeZ value
     * @param int $volumeZ
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setVolumeZ($volumeZ = null)
    {
        // validation for constraint: int
        if (!is_null($volumeZ) && !is_numeric($volumeZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volumeZ)), __LINE__);
        }
        $this->VolumeZ = $volumeZ;
        return $this;
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
     * @return \Locastic\PaketTisakSoap\StructType\Package
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
     * @return \Locastic\PaketTisakSoap\StructType\Package
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
     * Get CommentPackage value
     * @return string|null
     */
    public function getCommentPackage()
    {
        return $this->CommentPackage;
    }
    /**
     * Set CommentPackage value
     * @param string $commentPackage
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setCommentPackage($commentPackage = null)
    {
        // validation for constraint: string
        if (!is_null($commentPackage) && !is_string($commentPackage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commentPackage)), __LINE__);
        }
        $this->CommentPackage = $commentPackage;
        return $this;
    }
    /**
     * Get ReferenceFieldPackageB value
     * @return string|null
     */
    public function getReferenceFieldPackageB()
    {
        return $this->ReferenceFieldPackageB;
    }
    /**
     * Set ReferenceFieldPackageB value
     * @param string $referenceFieldPackageB
     * @return \Locastic\PaketTisakSoap\StructType\Package
     */
    public function setReferenceFieldPackageB($referenceFieldPackageB = null)
    {
        // validation for constraint: string
        if (!is_null($referenceFieldPackageB) && !is_string($referenceFieldPackageB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceFieldPackageB)), __LINE__);
        }
        $this->ReferenceFieldPackageB = $referenceFieldPackageB;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\Package
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
