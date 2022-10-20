<?php
$a = mt_rand(1,5);
if ($a===1){
    echo "premier";
} elseif($a===2){
    echo "deuxieme";
} elseif($a===3){
    echo "troisieme";
} elseif($a===4){
    echo "quatrieme";
} elseif($a===5){
    echo "cinquieme";
}else{
    echo "erreur";
}


?>
<h3>Avec un switch </h3>
<?php
    switch ($a){
        case 1:
            echo "$a premier";
        break;
        case 2:
            echo "$a deuxieme";
        break;
        case 3:
            echo "$a troisieme";
        break;
        case 4: 
            echo "$a quatrieme";
        break;
        case 5:
            echo "$a cinquieme";
        break;
        default: 
        echo "ok ";
    }
?>