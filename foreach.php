<?php

$contasCorrentes = [
    16397479795 => [
        'titular' => 'Matheus Cruz',
        'Saldo' => 12000
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

foreach ( $contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
    //echo $conta['titular'] . PHP_EOL;
}