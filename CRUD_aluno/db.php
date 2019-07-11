<?php

function conectar()
{
    //psql -h localhost -U juciellen -p 5432 -d cursophp
    $conexao = pg_connect("host=localhost user=juciellen port=5432 dbname=cursophp password=123456");
    if(!$conexao){
        echo "Não foi possível conectar ao banco de dados";
        die;
    }

    return $conexao;
}

function listarAlunos()
{
    global $conexao;

    $sql = "select * from alunos";
    $query = pg_query($conexao, $sql); // retorna recurso
    $alunos = pg_fetch_all($query);

    return $alunos;
}

function buscarAluno($id)
{
    global $conexao;

    $sql = "select * from alunos where id = {$id}";
    $query = pg_query($conexao, $sql); // retorna recurso
    $aluno = pg_fetch_assoc($query);

    //Array ( [id] => 1 [nome] => Juciellen Cabrera [ativo] => f )
    return $aluno;
}
function inserirAluno($nome)
{
    //insert into alunos (nome, ativo) values ('Juciellen Cabrera', 't');
    global $conexao;
    $sql = "insert into alunos (nome, ativo) values ('{$nome}', 't')";
    return pg_query($conexao, $sql);
}

function alterarAluno($nome, $id)
{
    //update alunos set ativo = 'f' where id = 1
    global $conexao;
    $sql = "update alunos set nome= '{$nome}' where id = {$id}";
    return pg_query($conexao, $sql);
}

function excluirAluno($id)
{
    global $conexao;
    $sql = "DELETE FROM alunos WHERE id = {$id}";
    return pg_query($conexao, $sql);
}

$conexao = conectar();
//inserirAluno('João das Neves');
//alterarAluno('Maria da Silva', 2);
//excluirAluno(4);
//$alunos = listarAlunos();
//
//print_r($alunos);