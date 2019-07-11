<?php
    require_once "db.php";
    require_once "bootstrap.php";


    if($_POST){

        $nome = $_POST['nome'];
        $id = $_POST['id'];
        alterarAluno($nome,$id);
        header("Location: lista.php");
    }
?>

