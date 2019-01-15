<?php
$i = 1;

for ($i = 1; $i <= 5; $i ++) {

    $ual['n'] = $i * $i - 1;
    
    echo $ual['n'];
}
;

// A saída é 0381524 devido ao seguinte:
// 1ª passagem
// $i=0
// $ual['n'] = 0 resultado de 1 * 1 = 1 e 1 -1 = 0
// 2ª passagem
// $i= 2
// $ual['n'] = 3 resultado de 2 * 2= 4 e 4-1 = 3
// 3ª passagem$i= 3
// $ual['n'] = 8 resultado de 3 * 3 = 9 e 9-1 = 8
// 4ª passagem
// $i = 4
// $ual['n'] = 15 resultado de 4 * 4 = 16 e 16-1 = 15
// 5ª passagem
// $i = 5
// $ual['n'] = 25 resultado de 5 * 5 = 25 e 25-1 = 24


