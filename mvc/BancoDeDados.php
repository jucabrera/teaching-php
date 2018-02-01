<?php
class BancoDeDados {
	private $pdo;
	public function __construct() {
		try {
			$pdo = new PDO ( "pgsql:host=localhost;dbname=curso", "curso", "123456" );
			$pdo->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$this->pdo = $pdo;
		} catch ( \Exception $e ) {
			echo $e->getMessage ();
			echo $e->getTraceAsString ();
		}
	}
	
	public function getPdo(){
		return $this->pdo;
	}
	
}


