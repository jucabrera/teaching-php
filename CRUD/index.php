<?php
require 'cdn_bootstrap.html';
require 'banco_dados.php';

if ($_POST) {
	$email = $_POST ['email'];
	$senha = $_POST ['senha'];
	$id = $_POST ['id'] ?? null;
	
	if ($id) {
		alterAluno($id, $email, $senha);
		echo "<h6>Registro alterado com sucesso<h6>";
	} else {	
		insertAluno($email, $senha);
	}
}

if ($_GET) {
	$acao = $_GET ['acao'] ?? '';
	$id = ( int ) $_GET ['id'];
	if (! $id) {
		echo "ID vazio";
	}
	switch ($acao) {
		case 'excluir' :
			deleteAluno($id);
			echo "<h6>Registro excluído com sucesso<h6>";
			break;
		case 'alterar' :
			$aluno = getAluno($id);
			$id = $aluno ['id'];
			$email = $aluno ['email'];
			$senha = $aluno ['senha'];
	}
}

require 'formulario_aluno.php';

$alunos = listAlunos();
require 'lista_alunos.php';
?>


