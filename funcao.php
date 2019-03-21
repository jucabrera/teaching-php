<?php
$numero = 2;

function quadrado($numero)
{
	return  $numero * $numero;
}

function negrito($texto)
{
	echo "<b>$texto</b>";
}
function dizerOi()
{
	echo "<br>Oi";
}

function calcularTotal($preco, $quantidade=1)
{
	return $preco * $quantidade;
}

echo quadrado($numero);
echo "<br>";
negrito('Juciellen');
dizerOi();
echo "<br>";
echo calcularTotal(2,3);
echo "<br>";
echo calcularTotal(5);