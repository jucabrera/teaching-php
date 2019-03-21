<?php
$client = new SoapClient ( null, [ 
		'location' => "http://localhost/teaching-php/SOAP/server.php",
		'uri' => "http://localhost/teaching-php/SOAP/server.php",
		'trace' => 1 
] );

echo $return = $client->__soapCall ( "helloWorld", array (
		"world" 
) );
echo "<br>";
echo $client->helloWorld('Jucy');