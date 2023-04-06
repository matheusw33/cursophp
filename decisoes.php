<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Entrada proibida para menos de 18 anos não acompanhados." . PHP_EOL;
if($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar!" . PHP_EOL;
    echo "Boa festa!";
} else if ( $idade < 18 && $numeroDePessoas > 1){
    echo "Menor de 18 com acompanhante. Pode entrar!" . PHP_EOL;
    echo "Boa festa!";
} else{
    echo "Você tem apenas $idade anos e não está acompanhado. Não pode entrar." . PHP_EOL;
    echo "Volte com um acompanhante.";
}
