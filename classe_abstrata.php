<?php
abstract class Pessoa {
	public $corDosOlhos;
	protected $sexo;
	public $corDoCabelo;
	public $nome;
	
	public function darNome($nome) {
		$this->nome = $nome;
		echo "<br>" . __METHOD__;
	}
	public function definirSexo($sexo) {
		$this->sexo = $sexo;
	}
}
class Homem extends Pessoa {
	public function __construct($nome) {
		$this->definirSexo ( 'masculino' );
		parent::darNome ( $nome );
	}	
}
class Mulher extends Pessoa {
	private $estaGravida = 'false';
	public function __construct() {
		parent::definirSexo ( 'feminino' );
	}
	public function engravidar() {
		$this->estaGravida = true;
	}
}

$joao = new Homem ( 'João' );
$maria = new Mulher();
$maria->darNome('Maria');

// $pessoa = new Pessoa(); // Nao pode ser instanciada

echo "<pre>";
var_dump ( $joao,$maria );
