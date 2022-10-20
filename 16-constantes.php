<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Les constantes</h3>
    <p>Ce sont les variables qui doivent être initialisées avec une valeur. Celles-ci ne peût etre changée après l initialisation. On peut utiliser define et const en PHP pour créer celles-ci </p>
    <h4>define("NOM_MAJUSCULE", {valeur})</h4>
    <p></p>
<?php
define ("UNE_CONSTANTE", "une chaine de caractere" );

echo UNE_CONSTANTE;

//erreur car déjà définie
//define ("UNE_CONSTANTE", 25);

echo "<br>" .UNE_CONSTANTE." est affichee";

define ("DB_HOST", "localhost");
define ("TABLEAU", [
    'un',
    'deux',
    'trois',
]);

echo "<br>". DB_HOST;
//echo "<br>". TABLEAU; erreur affichage d'un tableau 
echo "<br>" .TABLEAU[0];

?>
    
</body>
</html>