<?php

namespace Locastic\PaketTisakSoap\EnumType;

/**
 * This class stands for EnumBarcodeType EnumType
 * @subpackage Enumerations
 */
class EnumBarcodeType
{
    /**
     * Constant for value 'BARCODE_3P'
     * @return string 'BARCODE_3P'
     */
    const VALUE_BARCODE_3_P = 'BARCODE_3P';
    /**
     * Constant for value 'BARCODE_CUSTOM'
     * @return string 'BARCODE_CUSTOM'
     */
    const VALUE_BARCODE_CUSTOM = 'BARCODE_CUSTOM';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BARCODE_3_P
     * @uses self::VALUE_BARCODE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BARCODE_3_P,
            self::VALUE_BARCODE_CUSTOM,
        );
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
