<?php

namespace Locastic\PaketTisakSoap;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'CreateShipmentOrders' => '\\Locastic\\PaketTisakSoap\\StructType\\CreateShipmentOrders',
            'ArrayOfShipmentOrder' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfShipmentOrder',
            'ShipmentOrder' => '\\Locastic\\PaketTisakSoap\\StructType\\ShipmentOrder',
            'ArrayOfAdditionalService' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfAdditionalService',
            'AdditionalService' => '\\Locastic\\PaketTisakSoap\\StructType\\AdditionalService',
            'ArrayOfPackage' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfPackage',
            'Package' => '\\Locastic\\PaketTisakSoap\\StructType\\Package',
            'CreateShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\CreateShipmentOrdersResponse',
            'ArrayOfWSCreateShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSCreateShipmentOrdersResponse',
            'WSCreateShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSCreateShipmentOrdersResponse',
            'AuthentificationHeader' => '\\Locastic\\PaketTisakSoap\\StructType\\AuthentificationHeader',
            'GetPackageScans' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageScans',
            'ArrayOfString' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfString',
            'GetPackageScansResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageScansResponse',
            'ArrayOfWSGetPackageScansResponse' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSGetPackageScansResponse',
            'WSGetPackageScansResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSGetPackageScansResponse',
            'ArrayOfPackageScan' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfPackageScan',
            'PackageScan' => '\\Locastic\\PaketTisakSoap\\StructType\\PackageScan',
            'GetShipmentOrders' => '\\Locastic\\PaketTisakSoap\\StructType\\GetShipmentOrders',
            'ArrayOfClientReferenceNumber' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfClientReferenceNumber',
            'ClientReferenceNumber' => '\\Locastic\\PaketTisakSoap\\StructType\\ClientReferenceNumber',
            'GetShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetShipmentOrdersResponse',
            'ArrayOfWSGetShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSGetShipmentOrdersResponse',
            'WSGetShipmentOrdersResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSGetShipmentOrdersResponse',
            'GetReturnInfo' => '\\Locastic\\PaketTisakSoap\\StructType\\GetReturnInfo',
            'GetReturnInfoResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetReturnInfoResponse',
            'ArrayOfWSGetReturnInfoResponse' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSGetReturnInfoResponse',
            'WSGetReturnInfoResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSGetReturnInfoResponse',
            'ArrayOfReturnInfoScan' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfReturnInfoScan',
            'ReturnInfoScan' => '\\Locastic\\PaketTisakSoap\\StructType\\ReturnInfoScan',
            'GetDeliverySites' => '\\Locastic\\PaketTisakSoap\\StructType\\GetDeliverySites',
            'GetDeliverySitesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetDeliverySitesResponse',
            'ArrayOfWSDeliverySite' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSDeliverySite',
            'WSDeliverySite' => '\\Locastic\\PaketTisakSoap\\StructType\\WSDeliverySite',
            'GetPossibleReturnsBarcodes' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPossibleReturnsBarcodes',
            'GetPossibleReturnsBarcodesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPossibleReturnsBarcodesResponse',
            'WSGetPossibleReturnsBarcodesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSGetPossibleReturnsBarcodesResponse',
            'GetPaymentTypes' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPaymentTypes',
            'GetPaymentTypesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPaymentTypesResponse',
            'ArrayOfWSIdentifier' => '\\Locastic\\PaketTisakSoap\\ArrayType\\ArrayOfWSIdentifier',
            'WSIdentifier' => '\\Locastic\\PaketTisakSoap\\StructType\\WSIdentifier',
            'GetMainServices' => '\\Locastic\\PaketTisakSoap\\StructType\\GetMainServices',
            'GetMainServicesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetMainServicesResponse',
            'GetContents' => '\\Locastic\\PaketTisakSoap\\StructType\\GetContents',
            'GetContentsResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetContentsResponse',
            'GetCashPaymentTypes' => '\\Locastic\\PaketTisakSoap\\StructType\\GetCashPaymentTypes',
            'GetCashPaymentTypesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetCashPaymentTypesResponse',
            'GetAdditionalServices' => '\\Locastic\\PaketTisakSoap\\StructType\\GetAdditionalServices',
            'GetAdditionalServicesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetAdditionalServicesResponse',
            'GetT2L' => '\\Locastic\\PaketTisakSoap\\StructType\\GetT2L',
            'GetT2LResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetT2LResponse',
            'GetPackageSizes' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageSizes',
            'GetPackageSizesResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageSizesResponse',
            'GetBarcode' => '\\Locastic\\PaketTisakSoap\\StructType\\GetBarcode',
            'GetBarcodeResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetBarcodeResponse',
            'WSGetBarcodeResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\WSGetBarcodeResponse',
            'GetPackageLabel' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageLabel',
            'GetPackageLabelResponse' => '\\Locastic\\PaketTisakSoap\\StructType\\GetPackageLabelResponse',
        );
    }
}
