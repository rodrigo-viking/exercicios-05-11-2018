<?php

$valor1 = 10;
$valor2 = 15;

$soma = $valor1 + $valor2;

if($soma > 20){
    $soma += 8;
}else{
    $soma -= 5;
}

echo $soma;