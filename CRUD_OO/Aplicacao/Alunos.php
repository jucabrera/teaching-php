<?php
declare(strict_types=1);
namespace Aplicacao;

class Alunos extends AbstractUser
{	
	
	public function __toString()
	{
		return "Email: {$this->getEmail()}";
	}
	
	public function __clone(){
		echo __METHOD__."<br>";
	}
}






