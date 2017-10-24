<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSDeliverySite StructType
 * @subpackage Structs
 */
class WSDeliverySite extends AbstractStructBase
{
    /**
     * The GeoX
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $GeoX;
    /**
     * The GeoY
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $GeoY;
    /**
     * The Sifra
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sifra;
    /**
     * The Naziv
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Naziv;
    /**
     * The PostanskiBroj
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostanskiBroj;
    /**
     * The Mjesto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Mjesto;
    /**
     * The Adresa
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Adresa;
    /**
     * The RadnoVrijeme
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RadnoVrijeme;
    /**
     * The Tip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tip;
    /**
     * Constructor method for WSDeliverySite
     * @uses WSDeliverySite::setGeoX()
     * @uses WSDeliverySite::setGeoY()
     * @uses WSDeliverySite::setSifra()
     * @uses WSDeliverySite::setNaziv()
     * @uses WSDeliverySite::setPostanskiBroj()
     * @uses WSDeliverySite::setMjesto()
     * @uses WSDeliverySite::setAdresa()
     * @uses WSDeliverySite::setRadnoVrijeme()
     * @uses WSDeliverySite::setTip()
     * @param float $geoX
     * @param float $geoY
     * @param string $sifra
     * @param string $naziv
     * @param string $postanskiBroj
     * @param string $mjesto
     * @param string $adresa
     * @param string $radnoVrijeme
     * @param string $tip
     */
    public function __construct($geoX = null, $geoY = null, $sifra = null, $naziv = null, $postanskiBroj = null, $mjesto = null, $adresa = null, $radnoVrijeme = null, $tip = null)
    {
        $this
            ->setGeoX($geoX)
            ->setGeoY($geoY)
            ->setSifra($sifra)
            ->setNaziv($naziv)
            ->setPostanskiBroj($postanskiBroj)
            ->setMjesto($mjesto)
            ->setAdresa($adresa)
            ->setRadnoVrijeme($radnoVrijeme)
            ->setTip($tip);
    }
    /**
     * Get GeoX value
     * @return float
     */
    public function getGeoX()
    {
        return $this->GeoX;
    }
    /**
     * Set GeoX value
     * @param float $geoX
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setGeoX($geoX = null)
    {
        $this->GeoX = $geoX;
        return $this;
    }
    /**
     * Get GeoY value
     * @return float
     */
    public function getGeoY()
    {
        return $this->GeoY;
    }
    /**
     * Set GeoY value
     * @param float $geoY
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setGeoY($geoY = null)
    {
        $this->GeoY = $geoY;
        return $this;
    }
    /**
     * Get Sifra value
     * @return string|null
     */
    public function getSifra()
    {
        return $this->Sifra;
    }
    /**
     * Set Sifra value
     * @param string $sifra
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setSifra($sifra = null)
    {
        // validation for constraint: string
        if (!is_null($sifra) && !is_string($sifra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sifra)), __LINE__);
        }
        $this->Sifra = $sifra;
        return $this;
    }
    /**
     * Get Naziv value
     * @return string|null
     */
    public function getNaziv()
    {
        return $this->Naziv;
    }
    /**
     * Set Naziv value
     * @param string $naziv
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setNaziv($naziv = null)
    {
        // validation for constraint: string
        if (!is_null($naziv) && !is_string($naziv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($naziv)), __LINE__);
        }
        $this->Naziv = $naziv;
        return $this;
    }
    /**
     * Get PostanskiBroj value
     * @return string|null
     */
    public function getPostanskiBroj()
    {
        return $this->PostanskiBroj;
    }
    /**
     * Set PostanskiBroj value
     * @param string $postanskiBroj
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setPostanskiBroj($postanskiBroj = null)
    {
        // validation for constraint: string
        if (!is_null($postanskiBroj) && !is_string($postanskiBroj)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postanskiBroj)), __LINE__);
        }
        $this->PostanskiBroj = $postanskiBroj;
        return $this;
    }
    /**
     * Get Mjesto value
     * @return string|null
     */
    public function getMjesto()
    {
        return $this->Mjesto;
    }
    /**
     * Set Mjesto value
     * @param string $mjesto
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setMjesto($mjesto = null)
    {
        // validation for constraint: string
        if (!is_null($mjesto) && !is_string($mjesto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mjesto)), __LINE__);
        }
        $this->Mjesto = $mjesto;
        return $this;
    }
    /**
     * Get Adresa value
     * @return string|null
     */
    public function getAdresa()
    {
        return $this->Adresa;
    }
    /**
     * Set Adresa value
     * @param string $adresa
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setAdresa($adresa = null)
    {
        // validation for constraint: string
        if (!is_null($adresa) && !is_string($adresa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adresa)), __LINE__);
        }
        $this->Adresa = $adresa;
        return $this;
    }
    /**
     * Get RadnoVrijeme value
     * @return string|null
     */
    public function getRadnoVrijeme()
    {
        return $this->RadnoVrijeme;
    }
    /**
     * Set RadnoVrijeme value
     * @param string $radnoVrijeme
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setRadnoVrijeme($radnoVrijeme = null)
    {
        // validation for constraint: string
        if (!is_null($radnoVrijeme) && !is_string($radnoVrijeme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($radnoVrijeme)), __LINE__);
        }
        $this->RadnoVrijeme = $radnoVrijeme;
        return $this;
    }
    /**
     * Get Tip value
     * @return string|null
     */
    public function getTip()
    {
        return $this->Tip;
    }
    /**
     * Set Tip value
     * @param string $tip
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
     */
    public function setTip($tip = null)
    {
        // validation for constraint: string
        if (!is_null($tip) && !is_string($tip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tip)), __LINE__);
        }
        $this->Tip = $tip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\WSDeliverySite
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
