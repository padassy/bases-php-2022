<?php 
/* le concept de boucle est important dans tous les languages, en PHP il existe diverses manières de créer des boucles :

foreach => boucles sur les tableaux et objets 
for => boucles de types numériques 
while => boucle de vérification true 
do while => boucle de vérification true avce un exécution obligatoire 
fonctions récursives => Vous créez vos propres boucles 

Les boucles ne doivent jamais être infinis .
*/
$tab1 = ["un", "deux", "trois","quatre", "cinq",];

foreach ($tab1 as $value) {
    echo $value. " ";
}

echo "<hr>";

// idem avec un for ( ca ne fonctionne qu'avec des tableaux indexés)
for($i=0;$i<count($tab1);$i++) {
    echo $tab1[$i]. " ";
}
echo "<hr>";

foreach ($tab1 as $key => $value) {
    echo $key. " ->". $value; "<br>";

}
echo "<hr>";

foreach ($tab1 as $cle => $value) {
    echo $cle. " ->". $value; "<br>";

}

echo "<hr>";
// tableau associatif 

$tab2 = [
    "un"=>1,
    "deux"=>2, 
    3 => 3,
    "yep" => "ca va ?",
    4 => "quatre",
];
echo "<p>Tableau associatif, le foreach est préférable à toutes les autres boucles (90%)</p>";

foreach ($tab2 as $value){
    echo $value. " ";
}

echo "<hr>";

foreach($tab2 as $key => $value){
    //echo $key. " -> ".$value. "<br>";
    echo "$key -> $value<br>";
    //echo $key
}

?>