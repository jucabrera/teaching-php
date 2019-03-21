<?php

namespace MinhaAplicacao;
class Test{

}

namespace Biblioteca;
use MinhaAplicacao\Test as TestMinhaAplicacao;
class Test{

}


$test_biblioteca = new Test;
echo get_class($test_biblioteca);
echo "<br>";
$test_minha_aplicacao = new TestMinhaAplicacao;
echo get_class($test_minha_aplicacao);