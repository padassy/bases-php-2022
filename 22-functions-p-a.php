<?php

function calculBasic($num1, $num2, $op = "+"){
    // on inverse la condition avec !, attention le && devient ||
    if(!is_numeric($num1)||!is_numeric($num2)){
        return "Attention, les 2 premiers paramètres doivent être numériques";
    }
    switch ($op){
        case "*":
            return $result = $num1*$num2; // le return arrête la fonction et renvoie le résultat
            break; // break facultatif dans ce cas particulier
        case "-":
            return $result = $num1-$num2;
            break;
        case "/":
            // si division par 0 affichage de l'erreur et arrêt du script
            if($num2==0) return "Division par 0 interdite";
            return $result = $num1/$num2;
            break;
        default:
            return $result = $num1+$num2;
        }
}
?>