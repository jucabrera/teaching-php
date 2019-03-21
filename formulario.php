<?php
// $quantidade = "";
// $preco = "";
// $total = "";
// print_r ( $_POST );

if (! empty ( $_POST )) {
	if (array_key_exists ( 'quantidade', $_POST )) {
		$quantidade = ( int ) $_POST ['quantidade'];
	}
	$preco = ( float ) $_POST ['preco'];
	$total = $preco * $quantidade;
}
?>

<form action="formulario.php" method="post">
	Quantidade: <input type="text" name="quantidade"
		value="<?php echo (isset($quantidade))?$quantidade:''; ?>"><br> Preço:
	<input type="text" name="preco"
		value="<?php echo (isset($preco))?$preco:''; ?>"> <input type="submit"
		value="CALCULAR" class="btn btn-success"> <br> Total: <input
		type="text" value="<?php echo (isset($total))?$total:''; ?>">
</form>



