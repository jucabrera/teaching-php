<?php
session_start();
if ($_POST) {
	$email = $_POST ['email'];
	$_SESSION['usuario_logado'] = $email;
	//print_r($_SESSION);
	setcookie('ultimo_acesso',date('Y-m-d H:i:s'),time()+3600);
	
}
if (isset ( $_SESSION ['usuario_logado'] )) {
	echo "Usuario logado: {$_SESSION['usuario_logado']}";
}
?>

<form action="form_login.php" method="post">
	Email: <input type="text" name="email"> <br>
	Senha: <input type="password">
	<input type="submit" value="LOGIN">
</form>
