<?php


function adicionarSobrenomeSilva(&$nome)
{
	$nome .= " Silva";
	return $nome;
}

$nome = "Maria";
$nomeAlterado = adicionarSobrenomeSilva($nome);

echo '$nome='.$nome;
echo "<br>";
echo '$nomeAlterado='.$nomeAlterado;


