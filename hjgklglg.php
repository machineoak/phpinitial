<?php

$idade = 16;
$numeroDePessoas = 1;

echo "você só pode entrar se tiver apartir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;


if ($idade >= 18){
    echo "você tem $idade anos, pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "você só tem $idade anos, não pode entrar.";
    echo PHP_EOL . "é uma pena";
}

echo PHP_EOL;
echo "adeus!";