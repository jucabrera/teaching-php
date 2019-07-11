<?php

require_once "db.php";
require_once "bootstrap.php";

$id = $_GET['id'];
$aluno = buscarAluno($id);

?>

<form method="post" action="atualizar.php">
    Nome do Aluno:
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="text" name="nome" value="<?=$aluno['nome']?>">
    <input type="submit" class="btn btn-primary" value="Atualizar">
</form>