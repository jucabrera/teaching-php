<?php
$nome = 'Juciellen';
// Importando uma variavel global
function teste() {
	global $nome; // igual a $nome = $GLOBALS['nome'];
	echo "$nome<br>";
}

teste ();
function receberTexto($texto) {
	echo "$texto<br>";
}

receberTexto ( 'PHP' );
receberTexto ( $nome );
function fornecerTexto() {
	$texto = "Desenvolvimento Web";
	return $texto;
}

$texto = fornecerTexto ();
var_dump ( $texto );
function numeroPar($numero) {
	// if($numero % 2 === 0)
	// {
	// return true;
	// }else{
	// return false;
	// }
	if ($numero % 2 === 0) {
		return true;
	}
	
	return false;
}

var_dump ( numeroPar ( 2 ) );
var_dump ( numeroPar ( 5 ) );
function dizerOi($nome = null) {
	echo "Oi $nome<br>";
}

dizerOi ();
dizerOi ( 'Juciellen' );

$funcaoAnonimaQuadrado = function ($numero){
	return $numero * $numero;
};

echo "Quadrado ".$funcaoAnonimaQuadrado(4);
echo "<br>";

$numeros = [1,2,3,4];

$arrayAposExecucao = array_map($funcaoAnonimaQuadrado,$numeros);
var_dump($funcaoAnonimaQuadrado);
echo "<br>";
print_r($arrayAposExecucao);








