<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Exo 29</title>
</head>
<body>
    <h1 class="header">Veuillez compléter le formulaire pour ajouter votre adresse mail:</h1>
    <form id="monFormulaire" action="" method="POST">
    <div class="conteneurNom">
        <div class="nom">
            <label for="nomadresses"> Nom:</label>
            <input type="text" name="nomadresses" placeholder="votre nom" autocomplete="family-name" id="nom" required>
        </div>
    <br>
        <div class="nom">
            <label for="prenomadresses"> Prénom:</label>
            <input type="text" name="prenomadresses" placeholder="votre prénom" autocomplete="given-name" required>
        </div>
    <br>
    </div>
        <div class="mail">
            <label for="mailadresses"> Mail:</label>
            <input type="text" name="mailadresses" placeholder="votre mail" autocomplete="email" required>
        </div>
    <br>
        <div class="captcha">
            <p id="captcha"></p></br></br>
            <button id="captchaRefresh" type="button">Refresh</button>
            <input id="captchaInput" type="text" placeholder="Entrez le captcha"><span></span></br></br>
        </div>
    
    <br>
        <input type="button" id="captchaValidate" value="Envoyer">
    
      
    </form>
<script src="./Js/script.js"></script>
    
<?php
if (empty($resultatAdresses)): 
?>

    <h1>Pas encore d'adresse enregistrée </h1>
<?php
    else:
?>
    <h2 class="titre">Adresses présentes dans la database :</h2>
<?php
    foreach ($resultatAdresses as $item):
        $item['mailadresses'] = substr_replace($item['mailadresses'], "*****", 0, 5);
        $item['nomadresses'] = substr($item['nomadresses'], 0, 1) ;
        $item['nomadresses'] = strtoupper($item['nomadresses']);
        $item['nomadresses'] .= ".";
    
?>

<table>
    <tr>
        <th><h2>Nom:</h2></th>
        <th><h2>Prénom:</h2></th>
        <th><h2>Adresse mail:</h2></th>
        <th><h2>Date:</h2></th>
    </tr>
    <tr>
        <td><h3><?=$item['nomadresses']?></h3></td>
        <td><h3><?=$item['prenomadresses']?></h3></td>
        <td><h3><?=$item['mailadresses']?></h3></td>
        <td><h3><?=$item['dateadresses']?></h3></td>
    </tr>
</table>
<hr>
<?php
       
    endforeach;
?>
    <h1>Nombre d'adresses dans la database : <?=$nbAdresse?></h1>
<?php

endif;
            // !! Type button necessaire pour pas rafraichir la page ! 
?>

</body>
</html>