<?php
//débogage de la variable superglobale POST
var_dump($_POST);

// si il existe la variable $_POST nommée temperature (utilisation de isset) - Dans notre cas? $_POST['temperature'] existe si on a envoyé le formulaire
if(isset($_POST['temperature'])){
    
    // on va créer une variable temporaire locale, et changer le typage de notre variable en entier en utilisant (int) pour integer, si ça fonctionne ça nous donne un numérique, en cas d'échec ça nous donne le numérique 0
    $temp = (int) $_POST['temperature'];
    var_dump($temp);
    /*
    if($temp===0){
        //mail("michael.pitz@cf2m.be","Je vous regarde !","Corinne, Voici un message du pape: Que Dieu vous bénisse !",'From: francois@vatican.va' . "\r\n" .
        //'Reply-To: francois@vatican.va' . "\r\n" .
        //'X-Mailer: PHP/' . phpversion());
        header("Location: https://www.topito.com/video/top-pires-photos-sites-rencontre-russes-putin-beau-gosse");
        exit();
    }
    */
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Températures</title>
</head>
<body>
    <h1>Températures</h1>
    <form name="name1" method="POST" action="13-interface-utilisateur-if.php">
        <p>Bonjour, quel est la température dehors?</p>
        <input type="number" min="-100" max="100" name="temperature" placeholder="Mettez la température"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>