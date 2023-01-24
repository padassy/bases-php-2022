<?php

require_once "../config.php";

try{
    $baseDeDonnees = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT );
    //var_dump($baseDeDonnees);
    mysqli_set_charset($baseDeDonnees, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UFT-8', 'ISO-8859-1'));
}

    
$requeteSql = "SELECT ad.nomadresses, ad.prenomadresses, ad.mailadresses, ad.dateadresses FROM adresses ad ORDER BY dateadresses DESC" ;

$recupBaseDeDonnees = mysqli_query($baseDeDonnees, $requeteSql) or die('Erreur de $recupBaseDeDonnees');
$nbAdresse = mysqli_num_rows($recupBaseDeDonnees);

$resultatAdresses = mysqli_fetch_all($recupBaseDeDonnees, MYSQLI_ASSOC);

//var_dump($requeteSql, $recupBaseDeDonnees, $nbAdresse, $resultatAdresses);
	include "../view/indexView.php";

if(isset($_POST['nomadresses'],$_POST['mailadresses'],$_POST['prenomadresses'])){
    $nom = htmlspecialchars(strip_tags(trim($_POST['nomadresses'])),ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['mailadresses'])),ENT_QUOTES);
    $prenom = htmlspecialchars(strip_tags(trim($_POST['prenomadresses'])),ENT_QUOTES);
    
    
    

    if(!empty($nom)&&!empty($mail)&&!empty($prenom)&&filter_var($mail,FILTER_VALIDATE_EMAIL)):
        $envoiSql = "INSERT INTO adresses (nomadresses,prenomadresses, mailadresses) VALUES ('$nom','$prenom','$mail');";
        try{
            mysqli_query($baseDeDonnees,$envoiSql);
			header("Location: ./");
        } catch (Exception $e) {
            exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
        }
     
       
    
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)):
    ?> 
	<h2>"Veuillez renseigner un mail valide";</h2>
    <?php
    endif;

}
/*str_split*/
