<?php

interface IPessoa{
	public function darNome($nome);	
}

abstract class Pessoa implements IPessoa{
	
	protected $sexo;	
	public $nome;
	
	//public abstract function darNome($nome);
	public function darNome($nome) {
		$this->nome = $nome;
	
	}
	
	public function definirSexo($sexo) {
		$this->sexo = $sexo;
	}
}

class Mulher extends Pessoa {
	
	public function __construct() {
		parent::definirSexo ( 'feminino' );
	}
	
	
}

$maria = new Mulher();

class Registro{
	public function registrar(IPessoa $pessoa, $nome){
		$pessoa->darNome($nome);
	}
}

$registro = new Registro();
$registro->registrar($maria,'Maria');
echo "<pre>";
var_dump ($maria );


// var_dump($maria instanceof Mulher);
// var_dump($maria instanceof Pessoa);
// var_dump($maria instanceof IPessoa);





