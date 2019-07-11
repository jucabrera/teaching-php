<?php

require_once "db.php";
require_once "bootstrap.php";

$alunos = listarAlunos();

?>
<h1>Alunos</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Ativo</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($alunos as $aluno):
        $ativo = ($aluno['ativo']) ? 'ativo' : 'inativo';
        $id = $aluno['id'];
    ?>
    <tr>
        <th scope="row"><?=$id?></th>
        <td><?=$aluno['nome']?></td>
        <td><?=$ativo?></td>
        <td><a href="verAluno.php?id=<?=$id?>">Editar</a></td>
    </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>


