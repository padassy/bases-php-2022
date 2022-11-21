<?php
// Nos paramètres de connexion
require_once "config.php";

// Notre connexion    
try {
    // connexion à la DB mysql "statistiques"
    $mysqliConnect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

    // application du charset à notre connexion
    mysqli_set_charset($mysqliConnect, DB_CHARSET);

// capture de l'erreur plutôt que son affichage immédiat
}catch(Exception $e){

    // affichage de l'erreur encodée en utf8 avec utf8_encode()
    echo utf8_encode($e->getMessage());

}

// création d'une variable contenant du string, qui est en réalité du SQL
$sql = "SELECT * FROM `statistiques` ORDER BY `nom` ASC ;";

// exécution de la requête avec mysqli_query
$query = mysqli_query($mysqliConnect,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Première requête</title>
</head>
<body>
    <h1>Première requête</h1>

</body>
</html>
<?php
// bonne pratique, fermeture de connexion (inutile pour mysql et mariaDB)
mysqli_close($mysqliConnect);