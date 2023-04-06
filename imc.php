<?php

$peso = 95;
$altura = 1.87;

$imc = $peso / ($altura * $altura);

echo "Seu imc é: " . $imc = number_format($imc, 2, '.', '') . PHP_EOL;
echo "Você está ";

if( $imc < 18.5){
     echo "abaixo do peso ideal.";
} else if($imc < 24.9) {
    echo "no peso ideal. (Parabéns) ";
} else {
    echo "acima do peso ideal";
}
