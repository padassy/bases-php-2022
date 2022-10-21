<?php

/*

CECI EST NOTRE CONTROLEUR FRONTAL

*/

// Appel des dépendances
require_once "config.php";

// si il existe une variable get nommée page (on a cliqué sur un lien)
if(isset($_GET['page'])){
    
    // utilisation du switch
    switch($_GET['page']){
        case 'contact':
            include "mycontact.php";
            break;
        case 'curriculum':
            include 'cv.php';
            break;
        case 'img':
            include 'gallery.php';
            break;
        default:
            include_once "homepage.php";
    }

// sinon    
}else{
    // inclusion d'homepage une seule X
    include_once "homepage.php";
}
