<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <h1>include_once</h1>
    <p>include_once() est une fonction qui va permettre d'importer n'importe quoi (en général un autre fichier PHP),une seule fois l'interêt étant d'éviter des chargements multiples non-nécessaires et sans erreur grave en cas d'échec</p>
    <?php
    // appel le footer
    include_once "18-footer-1.php"; 
    // erreur
    include_once "18-footer-1.php2"; 
    // malgré l'erreur, le code ne s'arrête pas, on ne recharge PAS le footer 
    include_once "18-footer-1.php"; 
    echo "<h3>je suis quand même exécuter</h3>";
    ?>
</body>
</html>