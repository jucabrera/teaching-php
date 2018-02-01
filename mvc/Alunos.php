<?php
require 'BancoDeDados.php';
class Alunos{
	
	private $pdo;
	
	public function __construct()
	{
		$bd = new BancoDeDados();
		$this->pdo = $bd->getPdo();
	}
	
	public function listar()
	{
		$sql = "SELECT * FROM alunos ORDER BY id";		
		
		$pdoStatement = $this->pdo->query($sql);
		
		$alunos = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
		return $alunos;
	}
}


?>

