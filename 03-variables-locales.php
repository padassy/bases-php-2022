<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables locales</title>
</head>
<body>
    <h1>Variables locales</h1>
    <p>En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.<br>
Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un souligné (_) mais on va l'éviter car les superglobales l'utilisent, et l'OO (orienté objet aussi), suivi de lettres, chiffres ou soulignés.</p>
<p>On va éviter les caractères spéciaux, même si certains sont valides. il faut absolument éviter les signes servant aux calculs (+-*/)</p>

<h2>Utilité des variables</h2>
<p>Elles servent à stocker des informations</p>
<p>Elles peuvent être manipulées, affichées, sauvegardées, détruites etc...</p>
<h4>Mettez les variables valides (même les déconseillées) dans les balises PHP</h4>
<pre>
    $lulu = 5;
    $lala = "yes";
    $5main = 3;
    $_____coucou = 7;
    $bool = true;
    $bool 2 = false;
    $je-t-aime = "pas";
    $ILoveYou = "me too";
    $6-repos = 77;
    $bon-homme = true;
    $lkhjfgt5468sd58757 = 677;
    $mabapta = $lulu;
</pre>
<hr>
<?php
    $lulu = 5;
    echo '$lulu = ';
    echo "$lulu <br>";

    $lala = "yes";
    echo '$lala = ';
    echo "$lala <br>";


?>
</body>
</html>