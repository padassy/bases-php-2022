<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cryptage</h1>
    <form action="" method="$_POST" name="pwd">
        <input type="password" name="aPassword" required /> <br>
        <input type="submit" value="envoyer"/>
    </form>

    <?php
    var_dump($_POST);
    ?>

    <h2>MD5</h2>
    <p>A ne plus utiliser, trop rapide et donc peu sécurisé (déjà cassé)</p>
    <?php
    echo md5($_POST['aPassword']);
    ?>
</body>
</html>
