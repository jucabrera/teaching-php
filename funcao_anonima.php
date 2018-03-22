<?php
$numeros = [ 
		1,
		2,
		3,
		4,
		5,
		6,
		7,
		8,
		9,
		10 
];

$par = function ($numero) {
	if ($numero % 2 == 0) {
		return $numero;
	}
};

$pares = array_filter($numeros,$par);
echo "<pre>";
print_r($pares);