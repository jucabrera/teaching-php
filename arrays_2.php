<?php
// $alunos = [
// 'Dom' => 'Domingo',
// 'Seg' => 'Segunda',
// 'Ter' => 'Terça',
// 'Quarta',
// 'Quinta',
// 'Sexta',
// 'Sábado'
// ];
$alunos = [ 
		'Domingo',
		'Segunda',
		'Terça',
		'Quarta',
		'Quinta',
		'Sexta',
		'Sábado' 
];

echo "<pre>";

print_r ( $alunos );

echo $alunos[6];
echo "<br>";
// foreach ($alunos as $diaDaSemana){ //Sintaxe sem chave
// 	echo $diaDaSemana;
// 	echo "<br>";
// }
foreach ($alunos as $chave => $diaDaSemana){ // Sintaxe com chave
	echo "$chave - $diaDaSemana";
	echo "<br>";
}
