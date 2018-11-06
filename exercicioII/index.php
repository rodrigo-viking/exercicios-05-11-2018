<?php

$valor = 3;
$divisores = array(10, 5, 2);
$resultado;
foreach ($divisores as $divisor) {
    if($valor % $divisor == 0){
        $resultado .= "{$valor} é divisivel por {$divisor} <br>";
    }
}

if(isset($resultado)){
    echo $resultado;
}else{
    echo "{$valor} não é divisivel por 10, 5, 2";
}
