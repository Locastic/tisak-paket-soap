<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Locastic\PaketTisakSoap\ClassMap::get(),
);
/**
 * Samples for Create ServiceType
 */
$create = new \Locastic\PaketTisakSoap\ServiceType\Create($options);
$create->setSoapHeaderAuthentificationHeader(new \Locastic\PaketTisakSoap\StructType\AuthentificationHeader());
/**
 * Sample call for CreateShipmentOrders operation/method
 */
if ($create->CreateShipmentOrders(new \Locastic\PaketTisakSoap\StructType\CreateShipmentOrders()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Locastic\PaketTisakSoap\ServiceType\Get($options);
$get->setSoapHeaderAuthentificationHeader(new \Locastic\PaketTisakSoap\StructType\AuthentificationHeader());
/**
 * Sample call for GetPackageScans operation/method
 */
if ($get->GetPackageScans(new \Locastic\PaketTisakSoap\StructType\GetPackageScans()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentOrders operation/method
 */
if ($get->GetShipmentOrders(new \Locastic\PaketTisakSoap\StructType\GetShipmentOrders()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReturnInfo operation/method
 */
if ($get->GetReturnInfo(new \Locastic\PaketTisakSoap\StructType\GetReturnInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDeliverySites operation/method
 */
if ($get->GetDeliverySites(new \Locastic\PaketTisakSoap\StructType\GetDeliverySites()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPossibleReturnsBarcodes operation/method
 */
if ($get->GetPossibleReturnsBarcodes(new \Locastic\PaketTisakSoap\StructType\GetPossibleReturnsBarcodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPaymentTypes operation/method
 */
if ($get->GetPaymentTypes(new \Locastic\PaketTisakSoap\StructType\GetPaymentTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMainServices operation/method
 */
if ($get->GetMainServices(new \Locastic\PaketTisakSoap\StructType\GetMainServices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetContents operation/method
 */
if ($get->GetContents(new \Locastic\PaketTisakSoap\StructType\GetContents()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCashPaymentTypes operation/method
 */
if ($get->GetCashPaymentTypes(new \Locastic\PaketTisakSoap\StructType\GetCashPaymentTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAdditionalServices operation/method
 */
if ($get->GetAdditionalServices(new \Locastic\PaketTisakSoap\StructType\GetAdditionalServices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetT2L operation/method
 */
if ($get->GetT2L(new \Locastic\PaketTisakSoap\StructType\GetT2L()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPackageSizes operation/method
 */
if ($get->GetPackageSizes(new \Locastic\PaketTisakSoap\StructType\GetPackageSizes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBarcode operation/method
 */
if ($get->GetBarcode(new \Locastic\PaketTisakSoap\StructType\GetBarcode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPackageLabel operation/method
 */
if ($get->GetPackageLabel(new \Locastic\PaketTisakSoap\StructType\GetPackageLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
