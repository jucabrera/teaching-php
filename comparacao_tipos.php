<?php

// // comparacao com ==
// var_dump(2 == '2');// conteudo
// var_dump(2 == "dois");
// var_dump(2 == "2dois");

// echo "<br>";
// // comparacao com ===
// var_dump(2 === '2'); // conteudo e tipo


$texto = "PHP";

$retorno = strpos($texto,'A');
var_dump($retorno);

if($retorno === false){
	echo "Não foi encontrado";
}else{
	echo "Foi encontrado na posição $retorno";
}