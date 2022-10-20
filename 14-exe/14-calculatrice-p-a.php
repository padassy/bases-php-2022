<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
<body>
<form method="POST" >
<input type="text" name="n1">
<select name="op" >                       
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
         <option value="/">/</option>
        </select> 
<input type="text" name="n2">
<input type="submit" name="b1" value="Calculer">
</form>
<?php
	 $n1=$_POST['n1'];
	$op=$_POST['op'];
	$n2=$_POST['n2'];
		if (isset($op)){
    echo("Resultat du calcul ".$n1.$op.$n2." : ");
    if ($_POST['op'] === 'divi' && $op_2 == 0) {
        $result = "impossible de diviser par zéro!";
    } else if ($op=="+") {
        echo $n1+$n2;
    } elseif ($op=="-") {
        echo $n1-$n2;
    } elseif ($op=="*") {
        echo $n1*$n2;
    } else {
        echo "Mettez 2 valeurs valides";
    }
}
if (isset($result)) :
    echo $result;
endif;
?>
<hr>
<?php
var_dump($_POST);
?>
</body>
</html>