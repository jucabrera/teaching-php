<?php
require 'Alunos.php';
class Controller
{
	private $modelAlunos;
	
	public function __construct()
	{
		$this->modelAlunos = new Alunos();
	}
	
	public function rotear()
	{
		$acao = $_GET['acao'];
		switch ($acao){
			case 'listar':
				$this->listar();
		}
	}
	
	private function listar()
	{
		$this->modelAlunos->listar();
		$alunos = new Alunos();
		$lista = $alunos->listar();
		require 'lista-alunos.phtml';
	}
	
	
}