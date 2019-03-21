<?php
//https://github.com/jucabrera/teaching-php/
class Apartamento{
	public $quartos; // Propriedade ou atributo
	
	public function setarQuartos($quartos)
	{
		echo "<BR>".__METHOD__;
		$this->quartos = $quartos;
	}
}

$apto1 = new apartamento();
$apto1->setarQuartos(2);

$apto2 = new apartamento();
$apto2->setarQuartos(3);

echo "<pre>";
var_dump($apto1,$apto2);