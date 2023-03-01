<?php

#Etape 1 : charger l'autolader
require_once "vendor/autoload.php";
require_once "models/data.php";

#Etape 2 : On indique où se trouve le repertoire des nos vues twig
$loader = new \Twig\Loader\FilesystemLoader("templates");

#Etape 3 : On indique les informations d'environnement pour l'execution de Twig
$twig = new \Twig\Environment($loader,[
    'cache' => false, #Si vous souhaitez utiliser du cache : indiquer le chemin vers le dossier de cache
    'debug' => true
]);

## Les données
$players = getData();

echo $twig->render("index.html.twig", [
    "players" => $players
]);