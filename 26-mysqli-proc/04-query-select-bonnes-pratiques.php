<?php
require_once "config.php";


// connexion ancienne version

    // création d'une variable contenant la connexion
    $db = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

    // si erreur
    if(mysqli_connect_error()){
        die("Erreur numéro : ".mysqli_connect_errno()." Message : ".mysqli_connect_error());
    }
    // mettre le charset à la connexion
    mysqli_set_charset($db, DB_CHARSET);


$sql = "SELECT * FROM statistiques ORDER BY nom ASC";

// requête sans try catch
$query = mysqli_query($db,$sql) or die("Erreur numéro : ".mysqli_errno($db)." Message : ".mysqli_error($db));

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
    
</body>
</html>