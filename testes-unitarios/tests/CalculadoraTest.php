<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{
	
	public function testSoma1(){
		$a = 2;
		$b = 3;
		
		$soma = Calculadora::soma($a,$b);
		$this->assertEquals(5, $soma);
	}
	
	public function testSoma2(){
		$a = 0;
		$b = 3;
		
		$soma = Calculadora::soma($a,$b);
		$this->assertEquals(3, $soma);
	}
	
	public function testSoma3(){
		$a =-1;
		$b = -5;
		
		$soma = Calculadora::soma($a,$b);
		$this->assertEquals(-6, $soma);
	}

}
