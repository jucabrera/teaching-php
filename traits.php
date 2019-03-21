<?php
class Mae{
	public $corDosOlhos='castanho';
}

class Filha extends Mae{
	use Pai;
}

trait Pai{
	public $corDoCabelo = 'preto';
}

$filha = new Filha();
var_dump($filha);