<?php

require_once "../config.php";

try{
    $baseDeDonnees = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT );
    //var_dump($baseDeDonnees);
    mysqli_set_charset($baseDeDonnees, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UFT-8', 'ISO-8859-1'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Exo 29</title>
</head>
<body>
    <?php
    
$requeteSql = "SELECT ad.nomadresses, ad.prenomadresses, ad.mailadresses, ad.dateadresses FROM adresses ad ORDER BY dateadresses DESC" ;

$recupBaseDeDonnees = mysqli_query($baseDeDonnees, $requeteSql) or die('Erreur de $recupBaseDeDonnees');
$nbAdresse = mysqli_num_rows($recupBaseDeDonnees);

$resultatAdresses = mysqli_fetch_all($recupBaseDeDonnees, MYSQLI_ASSOC);

//var_dump($requeteSql, $recupBaseDeDonnees, $nbAdresse, $resultatAdresses);

if (empty($resultatAdresses)): 
?>
<h2>Pas encore d'adresse enregistrée </h2>
<?php
else:
?>
<h2>Nombre d'adresses dans la database : <?=$nbAdresse?></h2>
<?php
        foreach ($resultatAdresses as $item):
            /* $mailMasque = explode(",",$item['mailadresses']);
            for ($i = 0; $i < 6; $i++){
            $mailMasque = str_replace($mailMasque,5,'*');
            }
            foreach ($mailMasque as $itemMail):
            
            /*foreach ($mailMasque as $itemMail):
            $i = 0;
            if( $i<6 ){str_replace($itemMail,5, "*" );
            }
            endforeach;*/
            $item['mailadresses'] = substr_replace($item['mailadresses'], "*****", 0, 5);
            $item['nomadresses'] = substr($item['nomadresses'], 0, 1) ;
            $item['nomadresses'] = strtoupper($item['nomadresses']);
            $item['nomadresses'] .= "."

           
?>
<div class="conteneur">
<div class="adressmail"><h1>Nom:</h1><h2><?=$item['nomadresses']?></h2></div>
<div class="adressmail"><h1>Prénom:</h1><h2><?=$item['prenomadresses']?></h2></div>
<div class="adressmail"><h1>Mail:</h1><h2><?=$item['mailadresses']?></h2></div>
<div class="adressmail"><h1>Date:</h1><h2><?=$item['dateadresses']?></h2></div>
</div>
<hr>

<?php
endforeach;
       
endif;
?>
<form action="" method="POST">
    <label for="nomadresses"> Nom:</label>
    <input type="text" name="nomadresses" placeholder="votre nom" required>
    <br>
    <label for="prenomadresses"> Prénom:</label>
    <input type="text" name="prenomadresses" placeholder="votre prénom" required>
    <br>
    <label for="mailadresses"> Mail:</label>
    <input type="text" name="mailadresses" placeholder="votre mail" required>
    <br>
    <input type="submit" value="Envoyer">

</form>

<?php

if(isset($_POST['nomadresses'],$_POST['mailadresses'],$_POST['prenomadresses'])){
    $nom = htmlspecialchars(strip_tags(trim($_POST['nomadresses'])),ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['mailadresses'])),ENT_QUOTES);
    $prenom = htmlspecialchars(strip_tags(trim($_POST['prenomadresses'])),ENT_QUOTES);
    
    
    

    if(!empty($nom)&&!empty($mail)&&!empty($prenom)&&filter_var($mail,FILTER_VALIDATE_EMAIL)):
        $envoiSql = "INSERT INTO adresses (nomadresses,prenomadresses, mailadresses) VALUES ('$nom','$prenom','$mail');";
        try{
            mysqli_query($baseDeDonnees,$envoiSql);
        } catch (Exception $e) {
            exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
        }
     
        header("Location: ./");
    
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)):
    ?> <h2>"Veuillez renseigner un mail valide";</h2>
    <?php
    endif;

}
/*str_split*/
?>


</body>
</html>