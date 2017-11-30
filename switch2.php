<?php
$idade = 16;
$emancipado = true;

// if($idade >=18 or $emancipado)
// {
// 	echo "Pode viajar sozinho";
// }

switch (true){
	case $idade >=18 or $emancipado:
		echo "Pode viajar sozinho";
		break;
}