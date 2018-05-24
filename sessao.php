<?php
// Dados setados em form_login.php
session_start ();
if (isset ( $_SESSION['usuario_logado'] )) {
	echo "SESSÃO - Usuario logado: {$_SESSION['usuario_logado']}";
}

if (isset ( $_COOKIE['ultimo_acesso'] )) {
	echo "<br>COOKIE - Ultimo login em {$_COOKIE['ultimo_acesso']}";
}
