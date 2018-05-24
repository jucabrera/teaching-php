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
echo "<pre>";
print_r ( $numeros ); 

$funcao_anonima = function ($numero) {
	if ($numero % 2 == 0) {
		return true;
	}
};

// var_dump($funcao_anonima);// Closure ou função anonima

$array_filtrado = array_filter ( $numeros, $funcao_anonima );

// Outro formato
// $array_filtrado = array_filter ( $numeros, function ($numero) {
// 	if ($numero % 2 == 0) {
// 		return true;
// 	}
// } );

print_r($array_filtrado);
