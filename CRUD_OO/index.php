<?php
require 'autoload.php';

$aluno = new Aplicacao\Alunos('email@email.com','123');
$aluno2 = clone $aluno;
$aluno2->setEmail('email2@email.com');
echo $aluno;
echo "<br>";
echo $aluno2;
echo "<br>";
$professor = new Aplicacao\ Professores();
echo $professor;


// $teste = new AbstractUser();