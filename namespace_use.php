<?php

namespace Estado;
class SaoPaulo{

}

namespace Cidade;
use Estado\SaoPaulo;

class RioDeJaneiro{

}

$sp = new SaoPaulo();
$rj = new RioDeJaneiro();
echo get_class($sp);
echo "<br>";
echo get_class($rj);

