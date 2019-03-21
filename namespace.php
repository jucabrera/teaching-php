<?php
namespace MinhaAplicacao;
class Test{
	
}

namespace Biblioteca;
class Test{
	
}


$test_biblioteca = new Test;
echo get_class($test_biblioteca);
echo "<br>";
$test_minha_aplicacao = new \MinhaAplicacao\Test;
echo get_class($test_minha_aplicacao);