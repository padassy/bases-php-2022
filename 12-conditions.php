<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <h2>if(condition), SI</h2>
    <p>Plus basique que les boucles, les conditions sont cependants la base de tous les langages informatique</p>
    <p>Le if va vérifier que le ou les paramètre.s passé.s entre () valent true (boolean)</p>
    <pre><code>if(condition1){ // si la condition est vraie 
    echo "true";
}
    </code></pre>
<?php
$nombre = mt_rand(0,20);
// si $nombre est plus petit que 10 affichez le entre "$nombre est plus petit que 10"
if($nombre<10){
    echo "$nombre est plus petit que 10";
}
?>
<p>Une condition peut être complexe, et donc utiliser les && (et - AND), ||(ou - OR), ! (contraire de ) et XOR (^ ou stricte) voir <a href="https://www.php.net/manual/fr/language.operators.logical.php" target="_blank">opérateurs logiques</a></p>
<?php
// si la variable est initialisée (isset) (ici $nombre existe)
if(isset($nombre)&& $nombre>5 && $nombre < 15){
    echo "$nombre existe ET est plus grand que 5 ET est plus petit que 15";
}
?>
</body>
</html>