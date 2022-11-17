<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>
    
</body>
</html>

<?php 

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "cuisine":
            include "pages/cuisine.php";
            break;
        case "ville":    
            include "pages/ville.php";
            break;
        case "manga":
            include "pages/manga.php";
            break;
        case "culture":
            include "pages/culture.php";
            break;
        case "paysage":
            include "pages/paysage.php";
            break;
        case "histoire":
            include "pages/histoire.php";
        default:
            include "pages/404.php";         




    }





} else {
    include_once "pages/homepage.php";

}