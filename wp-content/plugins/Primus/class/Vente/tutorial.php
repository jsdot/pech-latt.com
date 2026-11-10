<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Vente',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/SITEC/Codeunit/WS_IN_Vente',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for SC ServiceType
 */
$sC = new \ServiceType\SC($options);
/**
 * Sample call for S001_Creation_Client operation/method
 */
if ($sC->S001_Creation_Client(new \StructType\S001_Creation_Client()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Sample call for S005_Creation_CourtageContrat operation/method
 */
if ($sC->S005_Creation_CourtageContrat(new \StructType\S005_Creation_CourtageContrat()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Sample call for S012_Creation_Commande operation/method
 */
if ($sC->S012_Creation_Commande(new \StructType\S012_Creation_Commande()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Sample call for S015_Creation_Client_V2 operation/method
 */
if ($sC->S015_Creation_Client_V2(new \StructType\S015_Creation_Client_V2()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Sample call for S023_Creation_Contact operation/method
 */
if ($sC->S023_Creation_Contact(new \StructType\S023_Creation_Contact()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Sample call for S024_Creation_FeuilleReglement operation/method
 */
if ($sC->S024_Creation_FeuilleReglement(new \StructType\S024_Creation_FeuilleReglement()) !== false) {
    print_r($sC->getResult());
} else {
    print_r($sC->getLastError());
}
/**
 * Samples for ST ServiceType
 */
$sT = new \ServiceType\ST($options);
/**
 * Sample call for S002_Test_Existence_Client_No operation/method
 */
if ($sT->S002_Test_Existence_Client_No(new \StructType\S002_Test_Existence_Client_No()) !== false) {
    print_r($sT->getResult());
} else {
    print_r($sT->getLastError());
}
/**
 * Sample call for S002_Test_Existence_Client_RefExterne operation/method
 */
if ($sT->S002_Test_Existence_Client_RefExterne(new \StructType\S002_Test_Existence_Client_RefExterne()) !== false) {
    print_r($sT->getResult());
} else {
    print_r($sT->getLastError());
}
/**
 * Sample call for S007_Test_Existence_CourtageContrat_NoContrat operation/method
 */
if ($sT->S007_Test_Existence_CourtageContrat_NoContrat(new \StructType\S007_Test_Existence_CourtageContrat_NoContrat()) !== false) {
    print_r($sT->getResult());
} else {
    print_r($sT->getLastError());
}
/**
 * Sample call for S007_Test_Existence_CourtageContrat_RefExterne operation/method
 */
if ($sT->S007_Test_Existence_CourtageContrat_RefExterne(new \StructType\S007_Test_Existence_CourtageContrat_RefExterne()) !== false) {
    print_r($sT->getResult());
} else {
    print_r($sT->getLastError());
}
/**
 * Sample call for S011_TarifsOUT operation/method
 */
if ($sT->S011_TarifsOUT(new \StructType\S011_TarifsOUT()) !== false) {
    print_r($sT->getResult());
} else {
    print_r($sT->getLastError());
}
/**
 * Samples for SM ServiceType
 */
$sM = new \ServiceType\SM($options);
/**
 * Sample call for S003_Modification_Client operation/method
 */
if ($sM->S003_Modification_Client(new \StructType\S003_Modification_Client()) !== false) {
    print_r($sM->getResult());
} else {
    print_r($sM->getLastError());
}
/**
 * Sample call for S006_Modification_CourtageContrat operation/method
 */
if ($sM->S006_Modification_CourtageContrat(new \StructType\S006_Modification_CourtageContrat()) !== false) {
    print_r($sM->getResult());
} else {
    print_r($sM->getLastError());
}
/**
 * Sample call for S009_MajListeClients operation/method
 */
if ($sM->S009_MajListeClients(new \StructType\S009_MajListeClients()) !== false) {
    print_r($sM->getResult());
} else {
    print_r($sM->getLastError());
}
/**
 * Samples for SL ServiceType
 */
$sL = new \ServiceType\SL($options);
/**
 * Sample call for S004_Lecture_Client operation/method
 */
if ($sL->S004_Lecture_Client(new \StructType\S004_Lecture_Client()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S008_Lecture_CourtageContrat operation/method
 */
if ($sL->S008_Lecture_CourtageContrat(new \StructType\S008_Lecture_CourtageContrat()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S010_Lecture_EnCours_Client operation/method
 */
if ($sL->S010_Lecture_EnCours_Client(new \StructType\S010_Lecture_EnCours_Client()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S016_Lecture_MajContacts operation/method
 */
if ($sL->S016_Lecture_MajContacts(new \StructType\S016_Lecture_MajContacts()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S017_Lecture_MajVendeurs operation/method
 */
if ($sL->S017_Lecture_MajVendeurs(new \StructType\S017_Lecture_MajVendeurs()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S018_Lecture_Factures operation/method
 */
if ($sL->S018_Lecture_Factures(new \StructType\S018_Lecture_Factures()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S019_Lecture_Avoirs operation/method
 */
if ($sL->S019_Lecture_Avoirs(new \StructType\S019_Lecture_Avoirs()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S020_Lecture_Commandes operation/method
 */
if ($sL->S020_Lecture_Commandes(new \StructType\S020_Lecture_Commandes()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S021_Lecture_Avoirs operation/method
 */
if ($sL->S021_Lecture_Avoirs(new \StructType\S021_Lecture_Avoirs()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S022_LectureEquipesAgents operation/method
 */
if ($sL->S022_LectureEquipesAgents(new \StructType\S022_LectureEquipesAgents()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Sample call for S025_Lecture_Client_V2 operation/method
 */
if ($sL->S025_Lecture_Client_V2(new \StructType\S025_Lecture_Client_V2()) !== false) {
    print_r($sL->getResult());
} else {
    print_r($sL->getLastError());
}
/**
 * Samples for SG ServiceType
 */
$sG = new \ServiceType\SG($options);
/**
 * Sample call for S013_Get_Statut_Commande operation/method
 */
if ($sG->S013_Get_Statut_Commande(new \StructType\S013_Get_Statut_Commande()) !== false) {
    print_r($sG->getResult());
} else {
    print_r($sG->getLastError());
}
/**
 * Sample call for S014_Get_Statut_Reglement operation/method
 */
if ($sG->S014_Get_Statut_Reglement(new \StructType\S014_Get_Statut_Reglement()) !== false) {
    print_r($sG->getResult());
} else {
    print_r($sG->getLastError());
}
