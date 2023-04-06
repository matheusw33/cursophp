<?php

$conta1 = [
    'titular' => 'Matheus Cruz',
    'Saldo' => 12000
];

$conta2 = [
    'titular' => 'Lorena',
    'Saldo' => 1200
];

$conta3 = [
    'titular' => 'Adriane',
    'Saldo' => 3500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for( $i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}

