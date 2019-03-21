<?php

// $nome = 'Juciellen';

// $nome2 = &$nome;

// $nome = 'Maria';
// $nome2 = 'Ana';

// echo '$nome '.$nome;
// echo "<br>";
// echo '$nome2 '.$nome2;

function dobrarNumero(&$numero)
{
// 	$numero = $numero * 2;
	$numero *=2;
}

$numero = 4;
dobrarNumero($numero);
echo $numero;
$numero = 5;
echo "<br>";
echo $numero;

// dobrarNumero('3'); // Erro
