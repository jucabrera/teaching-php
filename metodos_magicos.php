<?php
class Aluno{
	public $nome;
	public function __construct(){
		echo __METHOD__."<br>";
	}
	
	public function __clone(){
		echo __METHOD__."<br>";
	}
	
	public function __call($metodo, $atributos){
		
		echo __METHOD__."<br>";
		echo $metodo."<br>";
		print_r($atributos);
	}
}

$joao = new Aluno();
$joao->nome = 'João';

$maria = clone $joao;
$maria->nome = 'Maria';

echo "<pre>";
var_dump($joao, $maria);

$maria->findOneByNome('Maria');