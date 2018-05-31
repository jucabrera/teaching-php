<?php
$connection = null;
function connect() {
	$connection = $GLOBALS ['connection'];
	if (empty ( $connection )) {
		$config = require 'config_db.php';
		$connection = pg_connect ( "host={$config['host']} port={$config['port']} dbname={$config['dbname']} user={$config['user']} password={$config['password']}" );
	}
	return $connection;
}
function insertAluno($email, $senha) {
	$connection = connect ();
	$sql = "INSERT INTO alunos (email, senha) VALUES ('$email', '$senha')";
	return pg_query ( $connection, $sql );
}
function alterAluno($id, $email, $senha) {
	$connection = connect ();
	$sql = "UPDATE alunos SET email='$email', senha='$senha' WHERE id = $id";
	return pg_query ( $connection, $sql );
}
function deleteAluno($id) {
	$connection = connect ();
	$sql = "DELETE FROM alunos WHERE id = $id";
	return pg_query ( $connection, $sql );
}
function getAluno($id) {
	$connection = connect ();
	$sql = "SELECT * FROM alunos WHERE id = $id";
	$aluno = pg_query ( $connection, $sql );
	$aluno = pg_fetch_assoc ( $aluno ); // Apenas um registro
	return $aluno;
}
function listAlunos() {
	$connection = connect ();
	$query = "SELECT * FROM alunos ORDER BY email";
	$alunos = pg_query ( $connection, $query );
	$alunos = pg_fetch_all ( $alunos ); // varios registros
	return $alunos;
}

