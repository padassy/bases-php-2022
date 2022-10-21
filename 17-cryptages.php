<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypages</title>
</head>
<body>
    <h1>Cryptage</h1>
    <form action="" method="post" name="pwd">
        <input type="password" name="aPassword" required /><br>
        <input type="submit" value="envoyer"/>
    </form>
    <?php
    var_dump($_POST);
    ?>
    <h2>MD5</h2>
    <p>à ne plus utiliser, trop rapide et donc peu sécurisé (déjà cassé)</p>
    <p><?php
    echo md5($_POST['aPassword'])
    ?></p>
</body>
</html>