<?php

// while ( $numero <= 10 ) {
// 	echo "$numero<br>";
// 	$numero ++;
// }
function repetir($numero) {
	if ($numero <= 10) {
		echo "$numero<br>";
		$numero ++;
		repetir($numero);
	}
}

repetir(0);
