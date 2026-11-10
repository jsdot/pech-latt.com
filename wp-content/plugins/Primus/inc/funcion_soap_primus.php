<?php

function logger($message, $logFile = "default_log.txt") {
    // Assurez-vous que le chemin du fichier de log est correct et accessible en écriture
    //$logPath = __DIR__ . '/logs/' . $logFile; // Modifier le chemin selon votre structure de répertoires
    $logPath = $logFile; // Modifier le chemin selon votre structure de répertoires

    // Vérifier si le répertoire de log existe, sinon le créer
    $logDir = dirname($logPath);
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }

    // Ajouter la date et l'heure actuelle au message
    $logMessage = date("Y-m-d H:i:s") . " - " . $message . PHP_EOL;

    // Écrire le message dans le fichier de log
    file_put_contents($logPath, $logMessage, FILE_APPEND);
}

// Rechercher un client 

function soap_client_by_ref($ref){


 // class marc



}