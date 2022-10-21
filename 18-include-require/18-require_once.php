<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Require_one</title>
</head>
<body>
    <h1>require_once</h1>
    <p>require_once() est une fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP),une seule fois l'interêt étant d'éviter des chargements multiples non-nécessaires !! Erreur grave et arrêt du script! </p>
    <?php
    // appel le footer
    require_once "18-footer-1.php"; 
    require_once "18-config.php";
    echo $lulu;
    $lulu=25;
    echo "<br>$lulu";
    // erreur
    //require_once "18-footer-1.php2"; 
    // malgré l'erreur, le code ne s'arrête pas, on ne recharge PAS le footer 
    //require_once "18-footer-1.php"; 
    echo "<h3>je suis PAS exécuté</h3>";
    ?>
</body>
</html>