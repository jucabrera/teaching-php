<?php
declare ( strict_types = 1 );

use PHPUnit\Framework\TestCase;
final class BilheteUnicoTest extends TestCase {
	
	public function testBilheteValido() {
		$data = new Datetime();		
		$data->sub ( new DateInterval ( 'P5D' ) );		
		$bilheteUnico = new BilheteUnico ();
		$bilheteUnico->setCreatedAt ( $data );
		$isValid = $bilheteUnico->isValid ();
		$this->assertTrue ( $isValid );
	}
	
	public function testBilheteInvalido() {
		$data = new Datetime();	
		$data->sub(new DateInterval('P5Y'));
		$bilheteUnico = new BilheteUnico();
		$bilheteUnico->setCreatedAt ( $data );
		$isValid = $bilheteUnico->isValid ();
		$this->assertFalse ( $isValid );
	}
	
	public function testBilheteVencendoNaData() {
		$data = new Datetime();
		$data->sub(new DateInterval(BilheteUnico::PRAZO));
		$bilheteUnico = new BilheteUnico();
		$bilheteUnico->setCreatedAt ( $data );
		$isValid = $bilheteUnico->isValid ();
		$this->assertFalse ( $isValid );
	}
}
