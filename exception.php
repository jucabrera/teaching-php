<?php
class SaqueAltoException extends Exception {
}
class Conta {
	public $saldo;
	const LIMITE_SAQUE = 8000;
	public function sacar($valor) {
		if ($this->saldo < $valor) {
			throw new Exception ( 'Sem saldo<br>' );
		}
		
		if ($valor >= self::LIMITE_SAQUE) {
			throw new SaqueAltoException ();
		}
		
		$this->saldo -= $valor;
		echo "Saque efetuado com sucesso<br>";
		return true;
	}
}

$conta = new Conta ();

try {
	$conta->saldo = 1000;
	$conta->sacar ( 200 ); // OK
	$conta->sacar ( 801 ); // NOK
	
} catch ( SaqueAltoException $e ) {
	echo "Notificar gerente<br>";
} catch ( Exception $e ) {
	echo $e->getMessage ();
}

try {
	$conta->saldo = 9000;
	$conta->sacar(8000);
} catch ( SaqueAltoException $e ) {
	echo "Notificar gerente<br>";
} catch ( Exception $e ) {
	echo $e->getMessage ();
}

