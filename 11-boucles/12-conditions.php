<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h2>if (conditions), Si</h2>
    <p>Plus basiques que les boucles, les conditions sont cependants la base de tous les languages de programmation</p>
    <p>Le if va vérifier que le ou les paramètres passés entre () valent true (boolean)</p>
    <pre>
        <code>if (conditions1) { // si la condition est vraie
            echo "true"
        </code>
    </pre>
    <?php
    $nombre = mt_rand(0,20);
    // si $nombre est plus petit que 10 affichez le entre "$nombre est plus petit que 10"
    if ($nombre<10) {
        echo "$nombre est plus petit que 10";
    } 
    ?>
    <p>Une condition peut etre plus complexe  et donc utiliser les && (et), || (ou), ! (contraire de) et XOR (^ ou stricte) </p>
</body>
</html>