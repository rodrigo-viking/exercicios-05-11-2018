<?php

$contador = 1;
$divisor = 2;

while($contador <= 100)
{
    $resto = $contador % $divisor;
    if($resto == 0)
    {
        echo $contador."<br>";
    }
    $contador ++; 
}