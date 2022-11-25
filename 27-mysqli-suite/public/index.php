<?php

// importation des dépendances

require_once "../config.php";

// Essai de connexion à la DB
try{

    // connexion
    $connectDB = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

    // charset
    mysqli_set_charset($connectDB,DB_CHARSET);

// si erreur, on l'attrape dans l'objet Exception, mis dans la variable $e (pointeur vers l'objet)
}catch(Exception $e){

    // arrêt du script et affichage de l'erreur (en OO)
    die(utf8_encode($e->getMessage()));

}