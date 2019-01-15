<?php
$alunos = [ 
		[ 
				'nome' => "Maria",
				'idade' => 25 
		],
		[ 
				'nome' => "Jose",
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
// echo "<pre>";
//  print_r($alunos);
echo $alunos[1]['nome']."<br>";
echo $alunos[3]['idade']."<br>";

foreach ($alunos as $aluno){
	echo "Nome: {$aluno['nome']} - Idade: {$aluno['idade']}<br>"; 
}

