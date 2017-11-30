<?php

echo "<h6>WHILE</h6>";
$numero = 11;
while ( $numero <= 10 ) {
	echo "$numero<br>";
	$numero ++;
}
echo "<h6>FOR</h6>";
for($numero = 11; $numero <= 10; $numero ++) {
	echo "$numero<br>";
}
	
echo "<h6>DO WHILE</h6>";
do{
	echo "$numero<br>";
	$numero ++;
}while($numero <= 10);

//foreach