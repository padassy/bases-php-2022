<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil de tous nos articles</title>
</head>
<body>
    <h1>Page d'accueil de tous nos articles</h1>
    
    <?php
    // pas d'articles
    if(empty($nbarticles)):
    ?>
    <h2>Pas encore d'articles sur ce site</h2>
    <?php
    // au moins un article
    else:
    ?>
    <h2>Nombre d'articles: <?=$nbarticles?></h2>
    <?php
    endif;
    ?>
</body>
</html>