<?php

/*

Front controller -> index.php

*/

/*

Appel des dépendances

*/
require_once "config.php";

// (modèle)
include "functions.php";

/*

Routage (router), ou liens vers d'autres controleurs

*/
if(isset($_GET['page'])){
    // si le nom de la variable get existe dans le tableau NOM_DE_PAGES
    if(in_array($_GET['page'],NOM_DE_PAGES)){
        include $_GET['page'].".php";
    }else{
        include "404.php";
    }
}else{
    include "homepage.php";
}

