<?php
$alunos = [ 
		[ 
				'nome' => "Maria",
				'idade' => 25 
		],
		[ 
				'nome' => "José",
				'idade' => 30 
		],
		[ 
				'nome' => "Francisco",
				'idade' => 20 
		],
		[ 
				'nome' => "Ana",
				'idade' => 35 
		] 
];
echo "<pre>";
// print_r ( $alunos );

echo $alunos[3]['idade']; //Idade da Ana
echo "<br>";
echo $alunos[1]['nome']; 

echo "<br>";
foreach ($alunos as $aluno){
// 	print_r(array_keys($aluno));
	echo "Nome: ".$aluno['nome']." - Idade: ".$aluno['idade'];
	echo "<br>";
}
