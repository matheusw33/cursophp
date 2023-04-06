<?php

$contasCorrentes = [
    '16397379795' => [
        'titular' => 'Matheus Cruz',
        'saldo' => 12000
    ],
    12345678910 => [
        'titular' => 'Lorena',
        'Saldo' => 1200
    ],
    12365498711 => [
        'titular' => 'Adriane',
        'Saldo' => 3500
    ]
];

function mostraMensagem($mensagem){
    echo $mensagem . PHP_EOL;
};

$valorSaque = 5060;

if( $valorSaque < $contasCorrentes['16397379795']['saldo']){
    echo "Saque realizado com sucesso! Seu saldo agora é de ";
    mostraMensagem($contasCorrentes['16397379795'] ['saldo'] - $valorSaque);
};