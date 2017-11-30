<?php
// echo "<pre>";
$alunos = ["Maria","Jose","Francisco","Ana"];
echo $alunos[2]."<br>";
echo $alunos[0]."<br>";
// print_r($alunos);
// var_dump($alunos);
// echo $alunos;

echo "<h6>FOREACH</h6>";
foreach ($alunos as $aluno){
	echo $aluno."<br>";
}
echo "<h6>FOREACH COM INDICE</h6>";
foreach ($alunos as $indice => $aluno)
{
	echo "$indice - $aluno<br>";
}

