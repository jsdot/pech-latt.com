<?php

ini_set('display_errors',1);

require 'vendor/autoload.php';

use WsdlToPhp\PackageBase\SoapClientInterface;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    ->setOrigin('https://45.81.209.16:7302/I_PRIMUS_WINE_RECETTE_WS/WS/DOMAINE%20MIA/Codeunit/WS_IN_Stock_Article')
    ->setDestination('./Stock')
    ->setSoapOptions([
        SoapClientInterface::WSDL_STREAM_CONTEXT => stream_context_create($headers = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]])
    ])
    ->setBasicLogin('WS')
    ->setStandalone(true)
    ->setBasicPassword('primus')
    ->setComposerName('soap/primus');

// Generator instantiation
$generator = new Generator($options);


// Package generation
$generator->generatePackage();

exit;