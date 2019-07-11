<?php
    require_once "db.php";
    require_once "bootstrap.php";


    if($_POST){

        $nome = $_POST['nome'];
        inserirAluno($nome);
        header("Location: lista.php");
    }
?>

<form method="post" action="cadastro.php">
        Nome do Aluno:
        <input type="text" name="nome">
        <input type="submit" class="btn btn-primary" value="Cadastrar">
</form>
