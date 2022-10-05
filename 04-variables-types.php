<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les différents types de variables </title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (texte </h2>
    <p>Les chaines de caracteres sont mises dans des variables de type string ou str, se sont les cvariables les plus utilisées pour l'affichage de texte dans les sites web
    </p>
    <p>On peut les utiliser et les mettre à la suite de ... Cela s 'appelle la concaténation </p>

    <?php
    //Ici création de la variable ici en camelCase) avec le = qui donne la valeur en procédural, le typage strict n'est pas obligatoire
    $monTitre = "Bientot la fin de ce cours interminable !";
    //Affichage du contenu de la variable avec une chaine concaténée (utlisation du . ou de la , ) .gettype est une fonction permettant de récupérer le typage d'une variable ( en PHP 8 on utlisera pluto get_debug_type())
    echo $monTitre."Yes <br>";
    echo "Le type de la variable est ." .gettype($monTitre). ' !';
    ?>
    <p>Il existe des centaines de fonction s pour gérer du texte, par exemple</p>
    <?php

    echo 'mettre tout eb majuscule : strtoupper($monTitre) ' .strtoupper($monTitre);
    ?>
</body>
</html>