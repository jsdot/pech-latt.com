<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Stock_Article',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Stock_Article',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for SL ServiceType
 */
$sL = new \ServiceType\SL($options);
/**
 * Sample call for S001_Lecture_Stock operation/method
 */
if ($sL->S001_Lecture_Stock(new \StructType\S001_Lecture_Stock()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S002_Lecture_StockDetailPostes operation/method
 */
if ($sL->S002_Lecture_StockDetailPostes(new \StructType\S002_Lecture_StockDetailPostes()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S004_Lecture_StockDetail operation/method
 */
if ($sL->S004_Lecture_StockDetail(new \StructType\S004_Lecture_StockDetail()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S006_Lecture_EtatRupturePFMS operation/method
 */
if ($sL->S006_Lecture_EtatRupturePFMS(new \StructType\S006_Lecture_EtatRupturePFMS()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Samples for SS ServiceType
 */
$sS = new \ServiceType\SS($options);
/**
 * Sample call for S003_Supprime_StockDetailPostes operation/method
 */
if ($sS->S003_Supprime_StockDetailPostes(new \StructType\S003_Supprime_StockDetailPostes()) !== false) {
    print_r($sS->getResult());
} else {
    print_r($sS->getLastError());
}
/**
 * Sample call for S005_Supprime_StockDetail operation/method
 */
if ($sS->S005_Supprime_StockDetail(new \StructType\S005_Supprime_StockDetail()) !== false) {
    print_r($sS->getResult());
} else {
    print_r($sS->getLastError());
}
/**
 * Sample call for S007_Supprime_EtatRupturePFMS operation/method
 */
if ($sS->S007_Supprime_EtatRupturePFMS(new \StructType\S007_Supprime_EtatRupturePFMS()) !== false) {
    print_r($sS->getResult());
} else {
    print_r($sS->getLastError());
}
/**
 * Samples for SN ServiceType
 */
$sN = new \ServiceType\SN($options);
/**
 * Sample call for S008_New_LectureStock operation/method
 */
if ($sN->S008_New_LectureStock(new \StructType\S008_New_LectureStock()) !== false) {
    print_r($sN->getResult());
} else {
    print_r($sN->getLastError());
}
