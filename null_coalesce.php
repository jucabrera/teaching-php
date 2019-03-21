<?php
// Obtém o valor de $_GET['user'] e retorna 'nobody'
// se ele não existir.
$username = $_GET['user'] ?? 'nobody';
// Isto equivale a:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
