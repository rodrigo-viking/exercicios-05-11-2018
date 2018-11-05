<?php

$inicial = 1;
$final = 100;

$divisor = 6;

while($inicial <= $final)
{
    $resto = $inicial % $divisor;
    if($resto == 0)
    {
        echo $inicial."<br>";
    }
    $inicial ++; 
}