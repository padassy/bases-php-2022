<?php
include "22-functions-p-a.php";
if(isset($_POST['num1']) & isset($_POST['choix']) & isset($_POST['num2'])){
$result = calculBasic( $_POST['num1'],$_POST['choix'],$_POST['num2']);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
</head>
<body>
    
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>

    <form name="formulaire" method="post" action="">
            <p>nombre1:<input name="num1"></p>
            <p>nombre2:<input name="num2"></p>
 
    <select name="choix">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
  
        <input type="submit" value="calculer">

    </form>
    <?php
    if (isset ($result))
    echo "$result";
    
    ?>
</body>
</html>