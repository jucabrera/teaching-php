<?php
class MyClass {
	public function helloWorld() {
		return 'Hallo Welt ' . print_r ( func_get_args () [0], true );
	}
}

try {
	$server = new SOAPServer ( NULL, [ 
			'uri' => 'http://localhost/soap/server.php' 
	] );
	
	$server->setClass ( 'MyClass' );
	$server->handle ();
} 

catch ( SOAPFault $f ) {
	print $f->faultstring;
}