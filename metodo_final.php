<?php
class Pessoa {
	
	public final function darNome($nome) {		
		echo "<br>" . __METHOD__;
	}
	
}
class Homem extends Pessoa {
	
// 	public function darNome($nome) {
// 		echo "<br>" . __METHOD__;
// 	}
}

$joao = new Homem ();
$joao->darNome('João');

echo "<pre>";
var_dump ( $joao );
