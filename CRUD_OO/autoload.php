<?php

function autoload($classe)
{
// 	echo __METHOD__."<br>";
// 	echo "Classe ".$classe."<br>";
// 	echo "<hr>";
	$classe = str_replace("\\","/",$classe);	
	require_once "$classe.php";
}
spl_autoload_register('autoload');