<?php
var_dump($_POST);
// Débigage de la variable POST
// si il existe la variable $_POST nommée temperature - Dans notre cas $_POST existe que si on a envoyé le formulaire
if (isset($_POST['temperature'])){
    echo "ok";}
    // on va créer une variable temporaire locale et changer le typage de notre variable en entier en utilisant (int) pour integer, si ca fonctionne ca nous donne un numérique, en cas d'echec ca nous donne le numérique 0
    $temp =(int)$_POST['temperature'];
    var_dump($temp);
    if ($temp ===0)/*$to      = 'padassy@gmail.com';
        $subject = 'Message du pape';
        $message = 'Tu as été touché par la grace du dieu ';
        $headers = 'From: francois@vatican.va' . "\r\n" .
            'Reply-To: francois@vatican.va' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        mail($to, $subject, $message, $headers);
        //mail ("padassy@gmail.com", "Salut couillon", "Voici un message du pape", "from:francois@vatican.va". "\r\n" .'Reply-To: francois@vatican.va' . "\r\n" .'X-Mailer: PHP/' . phpversion();)
        //header("Location :https://cdn4.vectorstock.com/i/1000x1000/13/93/no-stupid-people-beyond-this-point-vintage-rusty-vector-35281393.jpg");
        //exit ();*/;
    
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
    <form name="name1" method="POST" action="">
        <p>Bonjour, quel est la température dehors?</p>
        <input type="number" name="temperature" placeholder="Mettez la temperature" min="-100" max="100">
        <input type="submit" value="Envoyez">
    </form>
</body>
</html>