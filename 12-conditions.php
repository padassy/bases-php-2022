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
    // || est true si 1 true minimum
    // XOR ^ est true si 1 true maximum
    //&& est true si tout est true 
    // ! inversion entre true et false.. false devient true et vice-versa
    ?>
    <p>Une condition peut etre plus complexe  et donc utiliser les && (et), || (ou), ! (contraire de) et XOR (^ ou stricte) </p>
    <?php
    // si la variable est initialisée (isset) ici $nombre existe 
    if (isset($nombre)&& $nombre>5 && $nombre< 15){
        echo "$nombre existe Et est plus grand que 5 Et plus petit que 15";
    }
    ?>
    <h2>else- Sinon</h2>
    <p>C'est l'exécution du code si jamais le if qui précède est false</p>
    <?php
    $temp =mt_rand (-20,20);
    echo "<h4>$temp ° dehors </h4>";
    if ($temp <= 0 ){
        echo "Attention il gèle à  $temp °! ";
    }
    else {
        echo "Il fait bon, t'inquiète ";
    }
    ?>

    <h2> else if- elseif - Sinon si </h2>
    <p>C'est l'exécution d'une vérification supplémentaire si jamais le if ou autre else if qui précède est false </p>
    <?php
    if ($temp <=-10){
        echo "il fait très froid";
    }
    else if ($temp <=0){
        echo "il fait juste froid";
    }
    elseif ($temp <=12){
        echo "Il fait frisquet";
    }
    else {
        echo "Il fait bon frère";
    }

    ?>
</body>
</html>