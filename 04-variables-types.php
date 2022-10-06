<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de... Cela s'appelle la concaténation.</p>
    <?php
    // création de la variable (ici en camelCase), avec le = qui donne la valeur. En procédural, le typage strict n'est pas obligatoire
    $monTitre = "Bientôt la fin de ce cours interminable !";
    // affichage du contenu de la variable avec une chaîne concaténée (utilisation du . ou de la virgule) - gettype est une fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilisera plutôt get_debug_type())
    echo $monTitre." Yes! <br>";
    echo "Le type de la variable est ".gettype($monTitre).' !';
    ?>
    <p>Il existe des centaines de fonctions pour gérer du texte, par exemple</p>
    <?php
    echo 'mettre tout en majuscule : mb_strtoupper($monTitre) '.mb_strtoupper($monTitre);
    ?>
    <p><a href="https://www.php.net/manual/fr/book.strings.php" target="_blank">string</a></p>
    <h2>Les numériques</h2>
    <p>Les numériques sont les variables les plus utilisées pour les calculs, il existe plusieurs sous-types de ceux-ci</p>
    <h3>Les entiers (integer, int)</h3>
    <p>Sont des entiers les nombres sans virgules, positifs comme négatifs</p>
    <pre>$myFirstInt = 22;
$mySecondInt = - 7;</pre>
    <?php
    $myFirstInt = 22;
    $mySecondInt = - 7;

    echo $myFirstInt;
    echo "<br>";

    // addition
    $add = $myFirstInt + $mySecondInt;
    echo $add;
    echo "<br>";

    // soustraction
    $sous = $myFirstInt - $mySecondInt;
    echo $sous;
    echo "<br>";

    // multiplication
    $multi = $myFirstInt * $mySecondInt;
    echo $multi;
    echo "<br>";

    // division
    $div = $myFirstInt / $mySecondInt;
    echo $div;
    echo "<br>";


    ?>




    <hr>
    <?php
    // outil de débogage le plus commun
    var_dump($monTitre,$myFirstInt,$mySecondInt, $add, $sous, $multi,$div);

    ?>
</body>
</html>