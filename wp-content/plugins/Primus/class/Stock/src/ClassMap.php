<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'Header' => '\\StructType\\Header',
            'Line' => '\\StructType\\Line',
            'RootWSReturnError' => '\\StructType\\RootWSReturnError',
            'Stock' => '\\StructType\\Stock',
            'RootWSStockParametres' => '\\StructType\\RootWSStockParametres',
            'Filtre' => '\\StructType\\Filtre',
            'PosteStock_Achat' => '\\StructType\\PosteStock_Achat',
            'PosteStock_Vente' => '\\StructType\\PosteStock_Vente',
            'Disponible' => '\\StructType\\Disponible',
            'Prelevement' => '\\StructType\\Prelevement',
            'Article' => '\\StructType\\Article',
            'RootWSStockArticle' => '\\StructType\\RootWSStockArticle',
            'Information' => '\\StructType\\Information',
            'DetailPostesStock' => '\\StructType\\DetailPostesStock',
            'RootWSStockDetailPostes' => '\\StructType\\RootWSStockDetailPostes',
            'DetailStock' => '\\StructType\\DetailStock',
            'RootWSStockDetail' => '\\StructType\\RootWSStockDetail',
            'RootWSStockEtatRupturePFMS' => '\\StructType\\RootWSStockEtatRupturePFMS',
            'Donnees' => '\\StructType\\Donnees',
            'RootWSDonneesParametres' => '\\StructType\\RootWSDonneesParametres',
            'Entrées_Monosociété' => '\\StructType\\Entrées_Monosociété',
            'Entrées_Multisociété' => '\\StructType\\Entrées_Multisociété',
            'PostesStock_Entrées' => '\\StructType\\PostesStock_Entrées',
            'Sorties_Monosociété' => '\\StructType\\Sorties_Monosociété',
            'Sorties_Multisociété' => '\\StructType\\Sorties_Multisociété',
            'PostesStock_Sorties' => '\\StructType\\PostesStock_Sorties',
            'R_DetailsPostesStocks' => '\\StructType\\R_DetailsPostesStocks',
            'Item' => '\\StructType\\Item',
            'RootWSStockOUT' => '\\StructType\\RootWSStockOUT',
            'S001_Lecture_Stock' => '\\StructType\\S001_Lecture_Stock',
            'S001_Lecture_Stock_Result' => '\\StructType\\S001_Lecture_Stock_Result',
            'S002_Lecture_StockDetailPostes' => '\\StructType\\S002_Lecture_StockDetailPostes',
            'S002_Lecture_StockDetailPostes_Result' => '\\StructType\\S002_Lecture_StockDetailPostes_Result',
            'S003_Supprime_StockDetailPostes' => '\\StructType\\S003_Supprime_StockDetailPostes',
            'S003_Supprime_StockDetailPostes_Result' => '\\StructType\\S003_Supprime_StockDetailPostes_Result',
            'S004_Lecture_StockDetail' => '\\StructType\\S004_Lecture_StockDetail',
            'S004_Lecture_StockDetail_Result' => '\\StructType\\S004_Lecture_StockDetail_Result',
            'S005_Supprime_StockDetail' => '\\StructType\\S005_Supprime_StockDetail',
            'S005_Supprime_StockDetail_Result' => '\\StructType\\S005_Supprime_StockDetail_Result',
            'S006_Lecture_EtatRupturePFMS' => '\\StructType\\S006_Lecture_EtatRupturePFMS',
            'S006_Lecture_EtatRupturePFMS_Result' => '\\StructType\\S006_Lecture_EtatRupturePFMS_Result',
            'S007_Supprime_EtatRupturePFMS' => '\\StructType\\S007_Supprime_EtatRupturePFMS',
            'S007_Supprime_EtatRupturePFMS_Result' => '\\StructType\\S007_Supprime_EtatRupturePFMS_Result',
            'S008_New_LectureStock' => '\\StructType\\S008_New_LectureStock',
            'S008_New_LectureStock_Result' => '\\StructType\\S008_New_LectureStock_Result',
        ];
    }
}
