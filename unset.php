<?php

require_once 'funcoes.php';

$contasCorrentes = [
    16397379795 =>[
        'titular' => 'Matheus Cruz',
        'saldo' => 12000
    ],
    12345678910 =>[
        'titular' => 'Lorena',
        'saldo' => 1200
    ],
    12345678911 => [
        'titular' => 'Adriane',
        'saldo' => 3500
    ]    
];


$contasCorrentes[16397379795] = sacar($contasCorrentes[16397379795], 500);
$contasCorrentes[12345678910] = depositar($contasCorrentes[12345678910], 800);
deixarLetraMaiuscula( $contasCorrentes[16397379795]);

unset($contasCorrentes[16397379795]);

foreach($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular , 'saldo' => $saldo] = $conta;
    mostraMensagem("$cpf $titular $saldo");
};

