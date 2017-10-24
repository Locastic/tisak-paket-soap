<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnInfoScan StructType
 * @subpackage Structs
 */
class ReturnInfoScan extends AbstractStructBase
{
    /**
     * The ScanTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ScanTime;
    /**
     * The Scan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Scan;
    /**
     * The ScanDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScanDescription;
    /**
     * The Center
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Center;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for ReturnInfoScan
     * @uses ReturnInfoScan::setScanTime()
     * @uses ReturnInfoScan::setScan()
     * @uses ReturnInfoScan::setScanDescription()
     * @uses ReturnInfoScan::setCenter()
     * @uses ReturnInfoScan::setComment()
     * @param string $scanTime
     * @param string $scan
     * @param string $scanDescription
     * @param string $center
     * @param string $comment
     */
    public function __construct($scanTime = null, $scan = null, $scanDescription = null, $center = null, $comment = null)
    {
        $this
            ->setScanTime($scanTime)
            ->setScan($scan)
            ->setScanDescription($scanDescription)
            ->setCenter($center)
            ->setComment($comment);
    }
    /**
     * Get ScanTime value
     * @return string
     */
    public function getScanTime()
    {
        return $this->ScanTime;
    }
    /**
     * Set ScanTime value
     * @param string $scanTime
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
     */
    public function setScanTime($scanTime = null)
    {
        // validation for constraint: string
        if (!is_null($scanTime) && !is_string($scanTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scanTime)), __LINE__);
        }
        $this->ScanTime = $scanTime;
        return $this;
    }
    /**
     * Get Scan value
     * @return string|null
     */
    public function getScan()
    {
        return $this->Scan;
    }
    /**
     * Set Scan value
     * @param string $scan
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
     */
    public function setScan($scan = null)
    {
        // validation for constraint: string
        if (!is_null($scan) && !is_string($scan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scan)), __LINE__);
        }
        $this->Scan = $scan;
        return $this;
    }
    /**
     * Get ScanDescription value
     * @return string|null
     */
    public function getScanDescription()
    {
        return $this->ScanDescription;
    }
    /**
     * Set ScanDescription value
     * @param string $scanDescription
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
     */
    public function setScanDescription($scanDescription = null)
    {
        // validation for constraint: string
        if (!is_null($scanDescription) && !is_string($scanDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scanDescription)), __LINE__);
        }
        $this->ScanDescription = $scanDescription;
        return $this;
    }
    /**
     * Get Center value
     * @return string|null
     */
    public function getCenter()
    {
        return $this->Center;
    }
    /**
     * Set Center value
     * @param string $center
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
     */
    public function setCenter($center = null)
    {
        // validation for constraint: string
        if (!is_null($center) && !is_string($center)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($center)), __LINE__);
        }
        $this->Center = $center;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\ReturnInfoScan
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
