<?php
function exibirOla($nome = 'Juciellen') {
	$nome .=" da Silva";
	echo "<h1>Olá $nome!</h1>";
}

$nome = 'Joana';

exibirOla ();
exibirOla ( 'Maria' );
exibirOla ( 'João' );
exibirOla ( $nome );

echo $nome;
echo "<br>";

function quadrado($numero) {
	$quadrado = $numero * $numero;
	return $quadrado;	
}

$q1 = quadrado(2);
echo $q1;
echo "<br>";

function calcularTotal($valor, $quantidade = 1) {
	return $valor * $quantidade;
}

calcularTotal ( 10, 2 );
calcularTotal ( 5 );

function retornaLista() {
	return [ 
			'Ana',
			'Bruno',
			'Carla' 
	];
}

print_r ( retornaLista () );

// Passagem por referencia
function exibirOla2(&$nome = 'Juciellen') {
	$nome .=" da Silva";
	echo "<h1>Olá $nome!</h1>";
}

$nome = 'Joana';
exibirOla2 ( $nome );

echo $nome;
echo "<br>";
