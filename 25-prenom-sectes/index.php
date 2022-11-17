<?php

$titre = "titre";

if (isset($_GET['u'])) {

    switch ($_GET['u']) {
        case 'hist': 
            $titre = "Histoire"; 
            include 'pages/Histoire.php';
            break;
        case 'dif':
            $titre = "Secte et Religion";
            include "pages/secte-religion.php";
            break;
        case 'Krish':
            $titre = "Krishna";
            include 'pages/krishma.php';
            break;
        case 'Morm':
            $titre = "Mormons";
            include 'pages/mormons.php';
            break;
        case 'scien':
            $titre = "Scientologue";
            include 'pages/scientologue.php';
            break;
        case 'Tsoleil':
            $titre = "temple du soleil";
            include 'pages/Lordre_du_temple_du_soleil.php';
            break;
         case 'form':
            $titre = "Contact";
            include 'pages/contact.php';
            break;
        default:
            $titre = "error 404";
            include_once 'pages/error-404.php';
    }
} else {
    include_once 'pages/home-page.php';
};