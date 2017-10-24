<?php

namespace Locastic\PaketTisakSoap\EnumType;

/**
 * This class stands for EnumResponseStatus EnumType
 * @subpackage Enumerations
 */
class EnumResponseStatus
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'REJECTED'
     * @return string 'REJECTED'
     */
    const VALUE_REJECTED = 'REJECTED';
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
     * @uses self::VALUE_OK
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_REJECTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_ERROR,
            self::VALUE_REJECTED,
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
