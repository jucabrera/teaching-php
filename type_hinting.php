<?php
declare(strict_types=1);

interface IPessoa{
	public function darNome($nome);

}

class Pessoa implements IPessoa{
	public function darNome($nome){
		$this->nome = $nome;
	}
}

class Mulher extends Pessoa{

}

class Apartamento{

	public $comodos=5;// Propriedade / Atributo
	public $numeroMoradores = 3;
	public $moradores;
	public $temMorador = false;

	// Método
	public function setarComodos(int $comodos){
		$this->comodos=$comodos;
	}
	
	public function setarTemMorador(bool $temMorador)
	{
		$this->temMorador = $temMorador;
	}
	
	public function adicionarMorador(IPessoa $morador){	
		$this->setarTemMorador(true);
		$this->moradores[] = $morador;
	}
	
	public function adicionarMoradores(array $moradores){
		
		foreach ($moradores as $morador)
		{
			$this->adicionarMorador($morador);
		}
	}
	
	public function retornarMoradores():array
	{
// 		return $this->moradores[1];// não vai funcionar pois é uma instancia de classe portanto não array
		
		return $this->moradores;
	}
}



$apto1 = new Apartamento();
$morador = new Pessoa();
$maria = new Mulher();
$apto1->adicionarMoradores([$morador, $maria]);
// $apto1->setarComodos('6'); // Não vai funcionar precisa ser inteiro
$apto1->setarComodos(6); // Invocando método
echo "<h6>Moradores:</h6>";
print_r($apto1->retornarMoradores());
$apto1->numeroMoradores = 4;// Atribuindo propriedade
echo "<br><br>";
echo "Esse apto tem {$apto1->numeroMoradores} moradores"; //Acessando propriedade
echo "<pre>";
var_dump($apto1);
