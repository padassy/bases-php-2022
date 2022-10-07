<?php
     $tab = [
        5,
        8,
        "coucou",
        false,
        27.12,
        [ "coucou", 
          "vous", 
          "allez", 
          "bien", 
          [
            9, 
            "yes",
            "je vais bien",
            ]
            ]
            ]
 print_r 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <p>les tableaux sont la base de gestion des données en php comme dan sla plupart des languages, on pourra également untiliser des objets, des fichiers json ou xml pour faire la même chose, mais en php le tableau restera le principal format pour gérer toutes les données</p>
    <p>en php il existe 2 maniere de créer des tableaux</p>
    <pre><code>
    $tab = array (); // maniere longue 
    $tab = []; // manière courte 
    </code></pre>
    <h2>Les tableau indexes </h2>
    <p>Tableaux dont la clé ne sont pas créées par le developpeur, mais par PHP</p>
    <pre><code>
        $tab = [
            5,
            8,
            "coucou"
            false,
            27.12,
            [ "coucou", 
              "vous", 
              "allez", 
              "bien", 
              [
                9, 
                "yes",
                "je vais bien",
                ]
                ]
                ]
    </code></pre>
</body>
</html>