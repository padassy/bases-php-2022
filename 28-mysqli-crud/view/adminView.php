<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - envoi d'un article</title>
</head>
<body>
    <h1>Administration - envoi d'un article</h1>
    <?php
    include "inc/menuPublicView.php";
    ?>
    
    
    <div class="article">
        <form name='insertArticle' method="POST" action="">
    <input name='art_title' type="text" placeholder="votre titre" required /><br>
    <?php
    // si on a des rubriques
if (!empty($resultatArticles['idrubriques'])):
    // conversion des chaînes de caractères contenant les id des sections et leurs noms en tableaux
    $idsection = explode(",", $resultatArticles['idrubriques']);
    $nomsection = explode("|||", $resultatArticles['rub_title']);

    // variable pour les rubriques
    $rubriques = "";
    // tant que l'on a des rubriques
    foreach ($idsection as $clef => $valeur) {
        $rubriques .= "<a href='?section=$valeur'>{$nomsection[$clef]}</a> | ";
    }

    ?>
    <h4><?=$rubriques?></h4>
    <?php
endif;
    ?>
    <p><?=nl2br($resultatArticles['art_text'])?></p>
    <h4>Ecrit par <a href="?auteur=<?=$resultatArticles['idusers']?>"><?=$resultatArticles['user_login']?></a> le <?=$resultatArticles['art_date']?></h4>
    <hr>

    </form>
    </div>

</body>
</html>