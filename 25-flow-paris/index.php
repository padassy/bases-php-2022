<?php

if(isset($_GET['pg'])){
    switch($_GET['pg']){
        case 'source':
            include "pages/source.php";
            break;
        case 'histoireetgeographie':
            include "pages/histoireetgeographie.php";
            break;
        case 'cuisine':
            include 'pages/cuisine.php';
            break;
        case 'accueuil':
            include 'pages/accueil.php';
            break;
        default:
            include_once "pages/accueil.php";
    }
}else{
    include_once "pages/accueil.php";
}