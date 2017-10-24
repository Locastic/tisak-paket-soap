<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentOrder StructType
 * @subpackage Structs
 */
class ShipmentOrder extends AbstractStructBase
{
    /**
     * The OrderedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OrderedBy;
    /**
     * The MainService
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MainService;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PaymentType;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Value;
    /**
     * The CODAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $CODAmount;
    /**
     * The Customs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Customs;
    /**
     * The Contents
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Contents;
    /**
     * The CashPaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $CashPaymentType;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliverByTime1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DeliverByTime1;
    /**
     * The DeliverByTime2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DeliverByTime2;
    /**
     * The CollectByDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $CollectByDate;
    /**
     * The CollectByTime1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $CollectByTime1;
    /**
     * The CollectByTime2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $CollectByTime2;
    /**
     * The IdT2L
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $IdT2L;
    /**
     * The T2LValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $T2LValue;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $OrderNumber;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Total;
    /**
     * The Returning
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Returning;
    /**
     * The ClientReferenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientReferenceNumber;
    /**
     * The SenderContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderContact;
    /**
     * The SenderPhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderPhone;
    /**
     * The SenderEMail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderEMail;
    /**
     * The SenderCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderCountry;
    /**
     * The SenderCityName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderCityName;
    /**
     * The SenderCityPOCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderCityPOCode;
    /**
     * The SenderStreet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderStreet;
    /**
     * The SenderHouseNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SenderHouseNumber;
    /**
     * The RecipientContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientContact;
    /**
     * The RecipientPhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientPhone;
    /**
     * The RecipientEMail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientEMail;
    /**
     * The RecipientCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientCountry;
    /**
     * The RecipientCityName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientCityName;
    /**
     * The RecipientCityPOCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientCityPOCode;
    /**
     * The RecipientStreet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientStreet;
    /**
     * The RecipientHouseNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecipientHouseNumber;
    /**
     * The AdditionalServiceList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService
     */
    public $AdditionalServiceList;
    /**
     * The PackageList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage
     */
    public $PackageList;
    /**
     * The ShippingDocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDocumentNumber;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The ReferenceFieldB
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceFieldB;
    /**
     * The ReferenceFieldC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceFieldC;
    /**
     * The ReferenceFieldD
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceFieldD;
    /**
     * The SourceSite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SourceSite;
    /**
     * The DestinationSite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DestinationSite;
    /**
     * Constructor method for ShipmentOrder
     * @uses ShipmentOrder::setOrderedBy()
     * @uses ShipmentOrder::setMainService()
     * @uses ShipmentOrder::setPaymentType()
     * @uses ShipmentOrder::setValue()
     * @uses ShipmentOrder::setCODAmount()
     * @uses ShipmentOrder::setCustoms()
     * @uses ShipmentOrder::setContents()
     * @uses ShipmentOrder::setCashPaymentType()
     * @uses ShipmentOrder::setDeliveryDate()
     * @uses ShipmentOrder::setDeliverByTime1()
     * @uses ShipmentOrder::setDeliverByTime2()
     * @uses ShipmentOrder::setCollectByDate()
     * @uses ShipmentOrder::setCollectByTime1()
     * @uses ShipmentOrder::setCollectByTime2()
     * @uses ShipmentOrder::setIdT2L()
     * @uses ShipmentOrder::setT2LValue()
     * @uses ShipmentOrder::setOrderNumber()
     * @uses ShipmentOrder::setTotal()
     * @uses ShipmentOrder::setReturning()
     * @uses ShipmentOrder::setClientReferenceNumber()
     * @uses ShipmentOrder::setSenderContact()
     * @uses ShipmentOrder::setSenderPhone()
     * @uses ShipmentOrder::setSenderEMail()
     * @uses ShipmentOrder::setSenderCountry()
     * @uses ShipmentOrder::setSenderCityName()
     * @uses ShipmentOrder::setSenderCityPOCode()
     * @uses ShipmentOrder::setSenderStreet()
     * @uses ShipmentOrder::setSenderHouseNumber()
     * @uses ShipmentOrder::setRecipientContact()
     * @uses ShipmentOrder::setRecipientPhone()
     * @uses ShipmentOrder::setRecipientEMail()
     * @uses ShipmentOrder::setRecipientCountry()
     * @uses ShipmentOrder::setRecipientCityName()
     * @uses ShipmentOrder::setRecipientCityPOCode()
     * @uses ShipmentOrder::setRecipientStreet()
     * @uses ShipmentOrder::setRecipientHouseNumber()
     * @uses ShipmentOrder::setAdditionalServiceList()
     * @uses ShipmentOrder::setPackageList()
     * @uses ShipmentOrder::setShippingDocumentNumber()
     * @uses ShipmentOrder::setComment()
     * @uses ShipmentOrder::setReferenceFieldB()
     * @uses ShipmentOrder::setReferenceFieldC()
     * @uses ShipmentOrder::setReferenceFieldD()
     * @uses ShipmentOrder::setSourceSite()
     * @uses ShipmentOrder::setDestinationSite()
     * @param int $orderedBy
     * @param int $mainService
     * @param int $paymentType
     * @param float $value
     * @param float $cODAmount
     * @param float $customs
     * @param int $contents
     * @param int $cashPaymentType
     * @param string $deliveryDate
     * @param string $deliverByTime1
     * @param string $deliverByTime2
     * @param string $collectByDate
     * @param string $collectByTime1
     * @param string $collectByTime2
     * @param int $idT2L
     * @param float $t2LValue
     * @param int $orderNumber
     * @param float $total
     * @param bool $returning
     * @param string $clientReferenceNumber
     * @param string $senderContact
     * @param string $senderPhone
     * @param string $senderEMail
     * @param string $senderCountry
     * @param string $senderCityName
     * @param string $senderCityPOCode
     * @param string $senderStreet
     * @param string $senderHouseNumber
     * @param string $recipientContact
     * @param string $recipientPhone
     * @param string $recipientEMail
     * @param string $recipientCountry
     * @param string $recipientCityName
     * @param string $recipientCityPOCode
     * @param string $recipientStreet
     * @param string $recipientHouseNumber
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService $additionalServiceList
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage $packageList
     * @param string $shippingDocumentNumber
     * @param string $comment
     * @param string $referenceFieldB
     * @param string $referenceFieldC
     * @param string $referenceFieldD
     * @param string $sourceSite
     * @param string $destinationSite
     */
    public function __construct($orderedBy = null, $mainService = null, $paymentType = null, $value = null, $cODAmount = null, $customs = null, $contents = null, $cashPaymentType = null, $deliveryDate = null, $deliverByTime1 = null, $deliverByTime2 = null, $collectByDate = null, $collectByTime1 = null, $collectByTime2 = null, $idT2L = null, $t2LValue = null, $orderNumber = null, $total = null, $returning = null, $clientReferenceNumber = null, $senderContact = null, $senderPhone = null, $senderEMail = null, $senderCountry = null, $senderCityName = null, $senderCityPOCode = null, $senderStreet = null, $senderHouseNumber = null, $recipientContact = null, $recipientPhone = null, $recipientEMail = null, $recipientCountry = null, $recipientCityName = null, $recipientCityPOCode = null, $recipientStreet = null, $recipientHouseNumber = null, \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService $additionalServiceList = null, \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage $packageList = null, $shippingDocumentNumber = null, $comment = null, $referenceFieldB = null, $referenceFieldC = null, $referenceFieldD = null, $sourceSite = null, $destinationSite = null)
    {
        $this
            ->setOrderedBy($orderedBy)
            ->setMainService($mainService)
            ->setPaymentType($paymentType)
            ->setValue($value)
            ->setCODAmount($cODAmount)
            ->setCustoms($customs)
            ->setContents($contents)
            ->setCashPaymentType($cashPaymentType)
            ->setDeliveryDate($deliveryDate)
            ->setDeliverByTime1($deliverByTime1)
            ->setDeliverByTime2($deliverByTime2)
            ->setCollectByDate($collectByDate)
            ->setCollectByTime1($collectByTime1)
            ->setCollectByTime2($collectByTime2)
            ->setIdT2L($idT2L)
            ->setT2LValue($t2LValue)
            ->setOrderNumber($orderNumber)
            ->setTotal($total)
            ->setReturning($returning)
            ->setClientReferenceNumber($clientReferenceNumber)
            ->setSenderContact($senderContact)
            ->setSenderPhone($senderPhone)
            ->setSenderEMail($senderEMail)
            ->setSenderCountry($senderCountry)
            ->setSenderCityName($senderCityName)
            ->setSenderCityPOCode($senderCityPOCode)
            ->setSenderStreet($senderStreet)
            ->setSenderHouseNumber($senderHouseNumber)
            ->setRecipientContact($recipientContact)
            ->setRecipientPhone($recipientPhone)
            ->setRecipientEMail($recipientEMail)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientCityName($recipientCityName)
            ->setRecipientCityPOCode($recipientCityPOCode)
            ->setRecipientStreet($recipientStreet)
            ->setRecipientHouseNumber($recipientHouseNumber)
            ->setAdditionalServiceList($additionalServiceList)
            ->setPackageList($packageList)
            ->setShippingDocumentNumber($shippingDocumentNumber)
            ->setComment($comment)
            ->setReferenceFieldB($referenceFieldB)
            ->setReferenceFieldC($referenceFieldC)
            ->setReferenceFieldD($referenceFieldD)
            ->setSourceSite($sourceSite)
            ->setDestinationSite($destinationSite);
    }
    /**
     * Get OrderedBy value
     * @return int
     */
    public function getOrderedBy()
    {
        return $this->OrderedBy;
    }
    /**
     * Set OrderedBy value
     * @param int $orderedBy
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setOrderedBy($orderedBy = null)
    {
        // validation for constraint: int
        if (!is_null($orderedBy) && !is_numeric($orderedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderedBy)), __LINE__);
        }
        $this->OrderedBy = $orderedBy;
        return $this;
    }
    /**
     * Get MainService value
     * @return int
     */
    public function getMainService()
    {
        return $this->MainService;
    }
    /**
     * Set MainService value
     * @param int $mainService
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setMainService($mainService = null)
    {
        // validation for constraint: int
        if (!is_null($mainService) && !is_numeric($mainService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mainService)), __LINE__);
        }
        $this->MainService = $mainService;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return int
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param int $paymentType
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: int
        if (!is_null($paymentType) && !is_numeric($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Value value
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get CODAmount value
     * @return float
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param float $cODAmount
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCODAmount($cODAmount = null)
    {
        $this->CODAmount = $cODAmount;
        return $this;
    }
    /**
     * Get Customs value
     * @return float
     */
    public function getCustoms()
    {
        return $this->Customs;
    }
    /**
     * Set Customs value
     * @param float $customs
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCustoms($customs = null)
    {
        $this->Customs = $customs;
        return $this;
    }
    /**
     * Get Contents value
     * @return int
     */
    public function getContents()
    {
        return $this->Contents;
    }
    /**
     * Set Contents value
     * @param int $contents
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setContents($contents = null)
    {
        // validation for constraint: int
        if (!is_null($contents) && !is_numeric($contents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contents)), __LINE__);
        }
        $this->Contents = $contents;
        return $this;
    }
    /**
     * Get CashPaymentType value
     * @return int
     */
    public function getCashPaymentType()
    {
        return $this->CashPaymentType;
    }
    /**
     * Set CashPaymentType value
     * @param int $cashPaymentType
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCashPaymentType($cashPaymentType = null)
    {
        // validation for constraint: int
        if (!is_null($cashPaymentType) && !is_numeric($cashPaymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cashPaymentType)), __LINE__);
        }
        $this->CashPaymentType = $cashPaymentType;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliverByTime1 value
     * @return string
     */
    public function getDeliverByTime1()
    {
        return $this->DeliverByTime1;
    }
    /**
     * Set DeliverByTime1 value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliverByTime1
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setDeliverByTime1($deliverByTime1 = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid($deliverByTime1)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliverByTime1, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues())), __LINE__);
        }
        $this->DeliverByTime1 = $deliverByTime1;
        return $this;
    }
    /**
     * Get DeliverByTime2 value
     * @return string
     */
    public function getDeliverByTime2()
    {
        return $this->DeliverByTime2;
    }
    /**
     * Set DeliverByTime2 value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliverByTime2
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setDeliverByTime2($deliverByTime2 = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid($deliverByTime2)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliverByTime2, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues())), __LINE__);
        }
        $this->DeliverByTime2 = $deliverByTime2;
        return $this;
    }
    /**
     * Get CollectByDate value
     * @return string
     */
    public function getCollectByDate()
    {
        return $this->CollectByDate;
    }
    /**
     * Set CollectByDate value
     * @param string $collectByDate
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCollectByDate($collectByDate = null)
    {
        // validation for constraint: string
        if (!is_null($collectByDate) && !is_string($collectByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($collectByDate)), __LINE__);
        }
        $this->CollectByDate = $collectByDate;
        return $this;
    }
    /**
     * Get CollectByTime1 value
     * @return string
     */
    public function getCollectByTime1()
    {
        return $this->CollectByTime1;
    }
    /**
     * Set CollectByTime1 value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectByTime1
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCollectByTime1($collectByTime1 = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid($collectByTime1)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectByTime1, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues())), __LINE__);
        }
        $this->CollectByTime1 = $collectByTime1;
        return $this;
    }
    /**
     * Get CollectByTime2 value
     * @return string
     */
    public function getCollectByTime2()
    {
        return $this->CollectByTime2;
    }
    /**
     * Set CollectByTime2 value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectByTime2
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setCollectByTime2($collectByTime2 = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumTime::valueIsValid($collectByTime2)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectByTime2, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumTime::getValidValues())), __LINE__);
        }
        $this->CollectByTime2 = $collectByTime2;
        return $this;
    }
    /**
     * Get IdT2L value
     * @return int
     */
    public function getIdT2L()
    {
        return $this->IdT2L;
    }
    /**
     * Set IdT2L value
     * @param int $idT2L
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setIdT2L($idT2L = null)
    {
        // validation for constraint: int
        if (!is_null($idT2L) && !is_numeric($idT2L)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($idT2L)), __LINE__);
        }
        $this->IdT2L = $idT2L;
        return $this;
    }
    /**
     * Get T2LValue value
     * @return float
     */
    public function getT2LValue()
    {
        return $this->T2LValue;
    }
    /**
     * Set T2LValue value
     * @param float $t2LValue
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setT2LValue($t2LValue = null)
    {
        $this->T2LValue = $t2LValue;
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param int $orderNumber
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: int
        if (!is_null($orderNumber) && !is_numeric($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
        return $this;
    }
    /**
     * Get Total value
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param float $total
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Returning value
     * @return bool
     */
    public function getReturning()
    {
        return $this->Returning;
    }
    /**
     * Set Returning value
     * @param bool $returning
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setReturning($returning = null)
    {
        // validation for constraint: boolean
        if (!is_null($returning) && !is_bool($returning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returning)), __LINE__);
        }
        $this->Returning = $returning;
        return $this;
    }
    /**
     * Get ClientReferenceNumber value
     * @return string|null
     */
    public function getClientReferenceNumber()
    {
        return $this->ClientReferenceNumber;
    }
    /**
     * Set ClientReferenceNumber value
     * @param string $clientReferenceNumber
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setClientReferenceNumber($clientReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($clientReferenceNumber) && !is_string($clientReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientReferenceNumber)), __LINE__);
        }
        $this->ClientReferenceNumber = $clientReferenceNumber;
        return $this;
    }
    /**
     * Get SenderContact value
     * @return string|null
     */
    public function getSenderContact()
    {
        return $this->SenderContact;
    }
    /**
     * Set SenderContact value
     * @param string $senderContact
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderContact($senderContact = null)
    {
        // validation for constraint: string
        if (!is_null($senderContact) && !is_string($senderContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderContact)), __LINE__);
        }
        $this->SenderContact = $senderContact;
        return $this;
    }
    /**
     * Get SenderPhone value
     * @return string|null
     */
    public function getSenderPhone()
    {
        return $this->SenderPhone;
    }
    /**
     * Set SenderPhone value
     * @param string $senderPhone
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderPhone($senderPhone = null)
    {
        // validation for constraint: string
        if (!is_null($senderPhone) && !is_string($senderPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderPhone)), __LINE__);
        }
        $this->SenderPhone = $senderPhone;
        return $this;
    }
    /**
     * Get SenderEMail value
     * @return string|null
     */
    public function getSenderEMail()
    {
        return $this->SenderEMail;
    }
    /**
     * Set SenderEMail value
     * @param string $senderEMail
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderEMail($senderEMail = null)
    {
        // validation for constraint: string
        if (!is_null($senderEMail) && !is_string($senderEMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderEMail)), __LINE__);
        }
        $this->SenderEMail = $senderEMail;
        return $this;
    }
    /**
     * Get SenderCountry value
     * @return string|null
     */
    public function getSenderCountry()
    {
        return $this->SenderCountry;
    }
    /**
     * Set SenderCountry value
     * @param string $senderCountry
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderCountry($senderCountry = null)
    {
        // validation for constraint: string
        if (!is_null($senderCountry) && !is_string($senderCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCountry)), __LINE__);
        }
        $this->SenderCountry = $senderCountry;
        return $this;
    }
    /**
     * Get SenderCityName value
     * @return string|null
     */
    public function getSenderCityName()
    {
        return $this->SenderCityName;
    }
    /**
     * Set SenderCityName value
     * @param string $senderCityName
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderCityName($senderCityName = null)
    {
        // validation for constraint: string
        if (!is_null($senderCityName) && !is_string($senderCityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCityName)), __LINE__);
        }
        $this->SenderCityName = $senderCityName;
        return $this;
    }
    /**
     * Get SenderCityPOCode value
     * @return string|null
     */
    public function getSenderCityPOCode()
    {
        return $this->SenderCityPOCode;
    }
    /**
     * Set SenderCityPOCode value
     * @param string $senderCityPOCode
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderCityPOCode($senderCityPOCode = null)
    {
        // validation for constraint: string
        if (!is_null($senderCityPOCode) && !is_string($senderCityPOCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCityPOCode)), __LINE__);
        }
        $this->SenderCityPOCode = $senderCityPOCode;
        return $this;
    }
    /**
     * Get SenderStreet value
     * @return string|null
     */
    public function getSenderStreet()
    {
        return $this->SenderStreet;
    }
    /**
     * Set SenderStreet value
     * @param string $senderStreet
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderStreet($senderStreet = null)
    {
        // validation for constraint: string
        if (!is_null($senderStreet) && !is_string($senderStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderStreet)), __LINE__);
        }
        $this->SenderStreet = $senderStreet;
        return $this;
    }
    /**
     * Get SenderHouseNumber value
     * @return string|null
     */
    public function getSenderHouseNumber()
    {
        return $this->SenderHouseNumber;
    }
    /**
     * Set SenderHouseNumber value
     * @param string $senderHouseNumber
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSenderHouseNumber($senderHouseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($senderHouseNumber) && !is_string($senderHouseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderHouseNumber)), __LINE__);
        }
        $this->SenderHouseNumber = $senderHouseNumber;
        return $this;
    }
    /**
     * Get RecipientContact value
     * @return string|null
     */
    public function getRecipientContact()
    {
        return $this->RecipientContact;
    }
    /**
     * Set RecipientContact value
     * @param string $recipientContact
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientContact($recipientContact = null)
    {
        // validation for constraint: string
        if (!is_null($recipientContact) && !is_string($recipientContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientContact)), __LINE__);
        }
        $this->RecipientContact = $recipientContact;
        return $this;
    }
    /**
     * Get RecipientPhone value
     * @return string|null
     */
    public function getRecipientPhone()
    {
        return $this->RecipientPhone;
    }
    /**
     * Set RecipientPhone value
     * @param string $recipientPhone
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientPhone($recipientPhone = null)
    {
        // validation for constraint: string
        if (!is_null($recipientPhone) && !is_string($recipientPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientPhone)), __LINE__);
        }
        $this->RecipientPhone = $recipientPhone;
        return $this;
    }
    /**
     * Get RecipientEMail value
     * @return string|null
     */
    public function getRecipientEMail()
    {
        return $this->RecipientEMail;
    }
    /**
     * Set RecipientEMail value
     * @param string $recipientEMail
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientEMail($recipientEMail = null)
    {
        // validation for constraint: string
        if (!is_null($recipientEMail) && !is_string($recipientEMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientEMail)), __LINE__);
        }
        $this->RecipientEMail = $recipientEMail;
        return $this;
    }
    /**
     * Get RecipientCountry value
     * @return string|null
     */
    public function getRecipientCountry()
    {
        return $this->RecipientCountry;
    }
    /**
     * Set RecipientCountry value
     * @param string $recipientCountry
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientCountry($recipientCountry = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientCountry)), __LINE__);
        }
        $this->RecipientCountry = $recipientCountry;
        return $this;
    }
    /**
     * Get RecipientCityName value
     * @return string|null
     */
    public function getRecipientCityName()
    {
        return $this->RecipientCityName;
    }
    /**
     * Set RecipientCityName value
     * @param string $recipientCityName
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientCityName($recipientCityName = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCityName) && !is_string($recipientCityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientCityName)), __LINE__);
        }
        $this->RecipientCityName = $recipientCityName;
        return $this;
    }
    /**
     * Get RecipientCityPOCode value
     * @return string|null
     */
    public function getRecipientCityPOCode()
    {
        return $this->RecipientCityPOCode;
    }
    /**
     * Set RecipientCityPOCode value
     * @param string $recipientCityPOCode
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientCityPOCode($recipientCityPOCode = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCityPOCode) && !is_string($recipientCityPOCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientCityPOCode)), __LINE__);
        }
        $this->RecipientCityPOCode = $recipientCityPOCode;
        return $this;
    }
    /**
     * Get RecipientStreet value
     * @return string|null
     */
    public function getRecipientStreet()
    {
        return $this->RecipientStreet;
    }
    /**
     * Set RecipientStreet value
     * @param string $recipientStreet
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientStreet($recipientStreet = null)
    {
        // validation for constraint: string
        if (!is_null($recipientStreet) && !is_string($recipientStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientStreet)), __LINE__);
        }
        $this->RecipientStreet = $recipientStreet;
        return $this;
    }
    /**
     * Get RecipientHouseNumber value
     * @return string|null
     */
    public function getRecipientHouseNumber()
    {
        return $this->RecipientHouseNumber;
    }
    /**
     * Set RecipientHouseNumber value
     * @param string $recipientHouseNumber
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setRecipientHouseNumber($recipientHouseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($recipientHouseNumber) && !is_string($recipientHouseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientHouseNumber)), __LINE__);
        }
        $this->RecipientHouseNumber = $recipientHouseNumber;
        return $this;
    }
    /**
     * Get AdditionalServiceList value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService|null
     */
    public function getAdditionalServiceList()
    {
        return $this->AdditionalServiceList;
    }
    /**
     * Set AdditionalServiceList value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService $additionalServiceList
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setAdditionalServiceList(\Locastic\PaketTisakSoap\ArrayType\ArrayOfAdditionalService $additionalServiceList = null)
    {
        $this->AdditionalServiceList = $additionalServiceList;
        return $this;
    }
    /**
     * Get PackageList value
     * @return \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage|null
     */
    public function getPackageList()
    {
        return $this->PackageList;
    }
    /**
     * Set PackageList value
     * @param \Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage $packageList
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setPackageList(\Locastic\PaketTisakSoap\ArrayType\ArrayOfPackage $packageList = null)
    {
        $this->PackageList = $packageList;
        return $this;
    }
    /**
     * Get ShippingDocumentNumber value
     * @return string|null
     */
    public function getShippingDocumentNumber()
    {
        return $this->ShippingDocumentNumber;
    }
    /**
     * Set ShippingDocumentNumber value
     * @param string $shippingDocumentNumber
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setShippingDocumentNumber($shippingDocumentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDocumentNumber) && !is_string($shippingDocumentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingDocumentNumber)), __LINE__);
        }
        $this->ShippingDocumentNumber = $shippingDocumentNumber;
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
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
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
     * Get ReferenceFieldB value
     * @return string|null
     */
    public function getReferenceFieldB()
    {
        return $this->ReferenceFieldB;
    }
    /**
     * Set ReferenceFieldB value
     * @param string $referenceFieldB
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setReferenceFieldB($referenceFieldB = null)
    {
        // validation for constraint: string
        if (!is_null($referenceFieldB) && !is_string($referenceFieldB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceFieldB)), __LINE__);
        }
        $this->ReferenceFieldB = $referenceFieldB;
        return $this;
    }
    /**
     * Get ReferenceFieldC value
     * @return string|null
     */
    public function getReferenceFieldC()
    {
        return $this->ReferenceFieldC;
    }
    /**
     * Set ReferenceFieldC value
     * @param string $referenceFieldC
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setReferenceFieldC($referenceFieldC = null)
    {
        // validation for constraint: string
        if (!is_null($referenceFieldC) && !is_string($referenceFieldC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceFieldC)), __LINE__);
        }
        $this->ReferenceFieldC = $referenceFieldC;
        return $this;
    }
    /**
     * Get ReferenceFieldD value
     * @return string|null
     */
    public function getReferenceFieldD()
    {
        return $this->ReferenceFieldD;
    }
    /**
     * Set ReferenceFieldD value
     * @param string $referenceFieldD
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setReferenceFieldD($referenceFieldD = null)
    {
        // validation for constraint: string
        if (!is_null($referenceFieldD) && !is_string($referenceFieldD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceFieldD)), __LINE__);
        }
        $this->ReferenceFieldD = $referenceFieldD;
        return $this;
    }
    /**
     * Get SourceSite value
     * @return string|null
     */
    public function getSourceSite()
    {
        return $this->SourceSite;
    }
    /**
     * Set SourceSite value
     * @param string $sourceSite
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setSourceSite($sourceSite = null)
    {
        // validation for constraint: string
        if (!is_null($sourceSite) && !is_string($sourceSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceSite)), __LINE__);
        }
        $this->SourceSite = $sourceSite;
        return $this;
    }
    /**
     * Get DestinationSite value
     * @return string|null
     */
    public function getDestinationSite()
    {
        return $this->DestinationSite;
    }
    /**
     * Set DestinationSite value
     * @param string $destinationSite
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
     */
    public function setDestinationSite($destinationSite = null)
    {
        // validation for constraint: string
        if (!is_null($destinationSite) && !is_string($destinationSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationSite)), __LINE__);
        }
        $this->DestinationSite = $destinationSite;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\ShipmentOrder
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
