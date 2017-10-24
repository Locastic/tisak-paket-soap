<?php

namespace Locastic\PaketTisakSoap\EnumType;

/**
 * This class stands for EnumTime EnumType
 * @subpackage Enumerations
 */
class EnumTime
{
    /**
     * Constant for value 'TIME_0800'
     * @return string 'TIME_0800'
     */
    const VALUE_TIME_0800 = 'TIME_0800';
    /**
     * Constant for value 'TIME_0830'
     * @return string 'TIME_0830'
     */
    const VALUE_TIME_0830 = 'TIME_0830';
    /**
     * Constant for value 'TIME_0900'
     * @return string 'TIME_0900'
     */
    const VALUE_TIME_0900 = 'TIME_0900';
    /**
     * Constant for value 'TIME_0930'
     * @return string 'TIME_0930'
     */
    const VALUE_TIME_0930 = 'TIME_0930';
    /**
     * Constant for value 'TIME_1000'
     * @return string 'TIME_1000'
     */
    const VALUE_TIME_1000 = 'TIME_1000';
    /**
     * Constant for value 'TIME_1030'
     * @return string 'TIME_1030'
     */
    const VALUE_TIME_1030 = 'TIME_1030';
    /**
     * Constant for value 'TIME_1100'
     * @return string 'TIME_1100'
     */
    const VALUE_TIME_1100 = 'TIME_1100';
    /**
     * Constant for value 'TIME_1130'
     * @return string 'TIME_1130'
     */
    const VALUE_TIME_1130 = 'TIME_1130';
    /**
     * Constant for value 'TIME_1200'
     * @return string 'TIME_1200'
     */
    const VALUE_TIME_1200 = 'TIME_1200';
    /**
     * Constant for value 'TIME_1230'
     * @return string 'TIME_1230'
     */
    const VALUE_TIME_1230 = 'TIME_1230';
    /**
     * Constant for value 'TIME_1300'
     * @return string 'TIME_1300'
     */
    const VALUE_TIME_1300 = 'TIME_1300';
    /**
     * Constant for value 'TIME_1330'
     * @return string 'TIME_1330'
     */
    const VALUE_TIME_1330 = 'TIME_1330';
    /**
     * Constant for value 'TIME_1400'
     * @return string 'TIME_1400'
     */
    const VALUE_TIME_1400 = 'TIME_1400';
    /**
     * Constant for value 'TIME_1430'
     * @return string 'TIME_1430'
     */
    const VALUE_TIME_1430 = 'TIME_1430';
    /**
     * Constant for value 'TIME_1500'
     * @return string 'TIME_1500'
     */
    const VALUE_TIME_1500 = 'TIME_1500';
    /**
     * Constant for value 'TIME_1530'
     * @return string 'TIME_1530'
     */
    const VALUE_TIME_1530 = 'TIME_1530';
    /**
     * Constant for value 'TIME_1600'
     * @return string 'TIME_1600'
     */
    const VALUE_TIME_1600 = 'TIME_1600';
    /**
     * Constant for value 'TIME_1630'
     * @return string 'TIME_1630'
     */
    const VALUE_TIME_1630 = 'TIME_1630';
    /**
     * Constant for value 'TIME_1700'
     * @return string 'TIME_1700'
     */
    const VALUE_TIME_1700 = 'TIME_1700';
    /**
     * Constant for value 'TIME_1730'
     * @return string 'TIME_1730'
     */
    const VALUE_TIME_1730 = 'TIME_1730';
    /**
     * Constant for value 'TIME_1800'
     * @return string 'TIME_1800'
     */
    const VALUE_TIME_1800 = 'TIME_1800';
    /**
     * Constant for value 'TIME_1830'
     * @return string 'TIME_1830'
     */
    const VALUE_TIME_1830 = 'TIME_1830';
    /**
     * Constant for value 'TIME_1900'
     * @return string 'TIME_1900'
     */
    const VALUE_TIME_1900 = 'TIME_1900';
    /**
     * Constant for value 'TIME_1930'
     * @return string 'TIME_1930'
     */
    const VALUE_TIME_1930 = 'TIME_1930';
    /**
     * Constant for value 'TIME_2000'
     * @return string 'TIME_2000'
     */
    const VALUE_TIME_2000 = 'TIME_2000';
    /**
     * Constant for value 'TIME_2030'
     * @return string 'TIME_2030'
     */
    const VALUE_TIME_2030 = 'TIME_2030';
    /**
     * Constant for value 'TIME_2100'
     * @return string 'TIME_2100'
     */
    const VALUE_TIME_2100 = 'TIME_2100';
    /**
     * Constant for value 'TIME_2130'
     * @return string 'TIME_2130'
     */
    const VALUE_TIME_2130 = 'TIME_2130';
    /**
     * Constant for value 'TIME_2200'
     * @return string 'TIME_2200'
     */
    const VALUE_TIME_2200 = 'TIME_2200';
    /**
     * Constant for value 'TIME_2230'
     * @return string 'TIME_2230'
     */
    const VALUE_TIME_2230 = 'TIME_2230';
    /**
     * Constant for value 'TIME_2300'
     * @return string 'TIME_2300'
     */
    const VALUE_TIME_2300 = 'TIME_2300';
    /**
     * Constant for value 'TIME_2330'
     * @return string 'TIME_2330'
     */
    const VALUE_TIME_2330 = 'TIME_2330';
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
     * @uses self::VALUE_TIME_0800
     * @uses self::VALUE_TIME_0830
     * @uses self::VALUE_TIME_0900
     * @uses self::VALUE_TIME_0930
     * @uses self::VALUE_TIME_1000
     * @uses self::VALUE_TIME_1030
     * @uses self::VALUE_TIME_1100
     * @uses self::VALUE_TIME_1130
     * @uses self::VALUE_TIME_1200
     * @uses self::VALUE_TIME_1230
     * @uses self::VALUE_TIME_1300
     * @uses self::VALUE_TIME_1330
     * @uses self::VALUE_TIME_1400
     * @uses self::VALUE_TIME_1430
     * @uses self::VALUE_TIME_1500
     * @uses self::VALUE_TIME_1530
     * @uses self::VALUE_TIME_1600
     * @uses self::VALUE_TIME_1630
     * @uses self::VALUE_TIME_1700
     * @uses self::VALUE_TIME_1730
     * @uses self::VALUE_TIME_1800
     * @uses self::VALUE_TIME_1830
     * @uses self::VALUE_TIME_1900
     * @uses self::VALUE_TIME_1930
     * @uses self::VALUE_TIME_2000
     * @uses self::VALUE_TIME_2030
     * @uses self::VALUE_TIME_2100
     * @uses self::VALUE_TIME_2130
     * @uses self::VALUE_TIME_2200
     * @uses self::VALUE_TIME_2230
     * @uses self::VALUE_TIME_2300
     * @uses self::VALUE_TIME_2330
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TIME_0800,
            self::VALUE_TIME_0830,
            self::VALUE_TIME_0900,
            self::VALUE_TIME_0930,
            self::VALUE_TIME_1000,
            self::VALUE_TIME_1030,
            self::VALUE_TIME_1100,
            self::VALUE_TIME_1130,
            self::VALUE_TIME_1200,
            self::VALUE_TIME_1230,
            self::VALUE_TIME_1300,
            self::VALUE_TIME_1330,
            self::VALUE_TIME_1400,
            self::VALUE_TIME_1430,
            self::VALUE_TIME_1500,
            self::VALUE_TIME_1530,
            self::VALUE_TIME_1600,
            self::VALUE_TIME_1630,
            self::VALUE_TIME_1700,
            self::VALUE_TIME_1730,
            self::VALUE_TIME_1800,
            self::VALUE_TIME_1830,
            self::VALUE_TIME_1900,
            self::VALUE_TIME_1930,
            self::VALUE_TIME_2000,
            self::VALUE_TIME_2030,
            self::VALUE_TIME_2100,
            self::VALUE_TIME_2130,
            self::VALUE_TIME_2200,
            self::VALUE_TIME_2230,
            self::VALUE_TIME_2300,
            self::VALUE_TIME_2330,
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
