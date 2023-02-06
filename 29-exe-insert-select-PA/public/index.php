<?php

require_once "../config.php";

try{
    $baseDeDonnees = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT );
    //var_dump($baseDeDonnees);
    mysqli_set_charset($baseDeDonnees, DB_CHARSET);
}catch(Exception $e){
    exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
}
    
$requeteSql = "SELECT ad.nomadresses, ad.prenomadresses, ad.mailadresses, ad.dateadresses FROM adresses ad ORDER BY dateadresses DESC" ;

$recupBaseDeDonnees = mysqli_query($baseDeDonnees, $requeteSql) or die('Erreur de $recupBaseDeDonnees');
$nbAdresse = mysqli_num_rows($recupBaseDeDonnees);

$resultatAdresses = mysqli_fetch_all($recupBaseDeDonnees, MYSQLI_ASSOC);

//var_dump($requeteSql, $recupBaseDeDonnees, $nbAdresse, $resultatAdresses);


if(isset($_POST['nomadresses'],$_POST['mailadresses'],$_POST['prenomadresses'])){
    $nom = htmlspecialchars(strip_tags(trim($_POST['nomadresses'])),ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['mailadresses'])),ENT_QUOTES);
    $prenom = htmlspecialchars(strip_tags(trim($_POST['prenomadresses'])),ENT_QUOTES);
    
    
    

    if(!empty($nom)&&!empty($mail)&&!empty($prenom)&&filter_var($mail,FILTER_VALIDATE_EMAIL)):
        $envoiSql = "INSERT INTO adresses (nomadresses,prenomadresses, mailadresses) VALUES ('$nom','$prenom','$mail')";
        try{
            mysqli_query($baseDeDonnees,$envoiSql);
            $message= "Merci pour votre inscription!";
?>
    <div id="boxMessage">
       <h3 id="goodMessage" class="message"><?=$message?></h3>
    </div>
<?php

        } catch (Exception $e) {
            if($e->getCode()==1406):
                $message = "Un champs est trop long";
?>
    <div id="boxMessage">
        <h3 class="message"><?=$message?></h3>
    </div>
<?php

            elseif($e->getCode()==1062):
                    //exit(mb_convert_encoding($e->getMessage(), 'UTF-8', 'ISO-8859-1'));
                    $message = "Cette adresse est dèjà présente dans la base de données";
?>
    <div id="boxMessage">
        <h3 class="message"><?=$message?></h3>
    </div>
<?php
        endif;
        }
     
       
    
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)):
    ?> 
    <div id="boxMessage">
	<h3 class="message">Veuillez renseigner un mail valide</h3>
    </div>
    <?php
    else:
        $message = "Il y a eu un problème lors de votre inscription, veuillez réessayer";
?>
    <div id="boxMessage">
    <h3 class="message"><?=$message?></h3>
    </div>
<?php
    endif;

}
include "../view/indexView.php";
/*str_split*/
