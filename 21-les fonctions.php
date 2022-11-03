<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions utilisateurs</title>
</head>
<body>
    <h1>Les fonctions utilisateurs</h1>
    <p>En PHP, on peut créer une nouvelle fonction en utilisant le mot clé 'function' suivit d'un nom (utilisation du même nommage que les variables sans le $) et de parenthèses qui peuvent contenir des arguments/ paramètres , et le contenu de la fonction dans les ouvertures et fermetures d'accolades </p>
    <pre><code>
        function creeDesTensionsDansLeGroupe (){
            return date ("Y-m-d H:i:s");
        }
    </code></pre>
    <?php
    // création de la fonction sans argument 
    function creeDesTensionsDansLeGroupe (){
        // retour d'une valeur, ici le day time par un return
        return date ("Y-m-d H:i:s");
    }
    echo creeDesTensionsDansLeGroupe();
    ?>
</body>
</html>