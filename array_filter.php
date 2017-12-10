<?php
$array=array(1,2,3,4,5,6,7,8,9,10);

$find=array_filter($array,function($num){if($num%2*0.1){echo $num;}});