<?php
class Calculadora{
	
	public $a;
	public static $instancias;
	
	public function __construct()
	{
		self::$instancias++;
	}
	
	public static function soma($a,$b)
	{
// 		echo $this->a; // Não pode referenciar $this
		return $a+$b;
	}
	
	
}

echo Calculadora::soma(2,2);
$calc1 = new Calculadora();
$calc1->a = 1;

$calc2 = new Calculadora();
$calc2->a = 2;

$calc3 = new Calculadora();

echo "<pre>";
var_dump($calc1,$calc2);

echo "A classe Calculadora contem ".Calculadora::$instancias." instancias";





