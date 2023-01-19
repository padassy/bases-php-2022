<?php

require_once "../config.php";

try{
    $baseDeDonnees = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT );
    //var_dump($baseDeDonnees);
    mysqli_set_charset($baseDeDonnees, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UFT-8', 'ISO-8859-1'));
}

$requeteSql = "SELECT ad.nomadresses, ad.mailadresses, ad.dateadresses FROM adresses ad";

$recupBaseDeDonnees = mysqli_query($baseDeDonnees, $requeteSql) or die('Erreur de $recupBaseDeDonnees');
$nbAdresse = mysqli_num_rows($recupBaseDeDonnees);

$resultatAdresses = mysqli_fetch_all($recupBaseDeDonnees, MYSQLI_ASSOC);

//var_dump($requeteSql, $recupBaseDeDonnees, $nbAdresse, $resultatAdresses);

if (empty($resultatAdresses)){
    
}