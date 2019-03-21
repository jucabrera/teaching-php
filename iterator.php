<?php
class Turma implements Iterator, Countable {
	private $alunos = [ 
			'Pedro',
			'Tiago',
			'João',
			'Wesley' 
	];
	
	private $posicao;
	
	public function rewind() {
		$this->posicao = 0;
	}
	
	public function key() {		
		return $this->posicao;
	}
	public function valid() {
		return array_key_exists($this->posicao, $this->alunos);
	}
	
	public function current() {
		return $this->alunos[$this->key()];
	}
	public function next() {
		$this->posicao++;
	}
	
	public function count () {
		return count($this->alunos);
	}
}


$alunos = new Turma();
// var_dump($alunos);
echo count($alunos)." itens <br>";

foreach ($alunos as $aluno)
{
	echo $aluno."<br>";
}
