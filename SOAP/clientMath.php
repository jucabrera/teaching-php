<?php
$client = new SoapClient ( null, [ 
		'uri' => "http://localhost/teaching-php/SOAP/serverMath.php",
		'location' => "http://localhost/teaching-php/SOAP/serverMath.php" 
] );
echo $client->sum (4,5 );