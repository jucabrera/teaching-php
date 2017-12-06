<?php
/*
Array
(
    [quantidade] => 10
    [preco] => 5
    )
    */


$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
// echo $quantidade ."<BR>".$preco;

$total = $quantidade * $preco;
 echo "$quantidade * $preco = $total";