<?php
echo "<pre>";
print_r($_FILES);
echo "<br>";
print_r($_POST);
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
	Nome: <input type="text" name="nome">
	Arquivo: <input type="file" name="arquivo"><br> 	
	<input type="submit" value="ENVIAR" class="btn btn-success"> 
</form>
