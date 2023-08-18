<?php

$peso = 62;
$altura = 1.73;
$imc = $peso / $altura ** 2;

if($peso < 18){
    echo "abaixo";
} elseif ($imc < 25){
    echo "dentro";
} else {
    echo "acima";
} 

echo " do recomendado";

