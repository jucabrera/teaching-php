<?php
$i = 1;
for($i = 1; $i <= 5; $i++) {
	echo "<h6>começo iteração</h6>";
	echo '$i='.$i;
	echo "<br>";
	$teste = ($i -1);//0
	$i++;
	echo '$i='.$i;//2
	echo "<br>";
	echo '$teste='."$teste";
	echo "<br>";
	$var['n'] = $i * $teste;
	echo '$var[\'n\']='.$var['n'];
	echo "<br>";
	echo '$i='.$i;
}

//0824

// $i = 1;
// echo $i++;
// echo "<br>";
// echo $i;

// echo "<br>";
// $i = 1;
// echo ++$i;
// echo "<br>";
// echo $i;