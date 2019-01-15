<?php
function soma($a, $b) {
	$soma = $a + $b;
	return $soma;
}

function divisao($a, $b) {
	if ($a == 0 or $b == 0) {
		echo "Nao pode haver divisao por zero";
	} else {
		return $a / $b;		
	}
}

function divisao2($a, $b) {
	if ($a == 0 or $b == 0) {
		echo "Nao pode haver divisao por zero";
		return;
	}	
	return $a / $b;
}


$numA = 10;
$numB = 5;

$resultado = soma ( $numA, $numB );
echo $resultado;

echo "<br>";
echo divisao ( $numA, $numB );
echo "<br>";
echo divisao2 ( $numA, $numB );
