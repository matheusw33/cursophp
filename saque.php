<?php
function mostraMensagem($mensagem){
    echo $mensagem . PHP_EOL;
};

function sacar($conta, $valor){

    if($valor > $conta['saldo']){
        echo "Você não tem saldo suficiente." . PHP_EOL;
    } else{
        echo "Saque realizado com sucesso! Valor disponivel no momento ";
        echo $conta['saldo'] - $valor;
    }
    return;
};


$contasCorrentes = [
    '16397379795' => [
        'titular' => 'Matheus Cruz',
        'saldo' => 12000
    ],
    12345678910 => [
        'titular' => 'Lorena',
        'saldo' => 1200
    ],
    12365498711 => [
        'titular' => 'Adriane',
        'saldo' => 3500
    ]
];

$contasCorrentes['16397379795'] = sacar($contasCorrentes['16397379795'], 500);




/*if( $valorSaque < $contasCorrentes['16397379795']['saldo']){
    echo "Saque realizado com sucesso! Seu saldo agora é de ";
    mostraMensagem($contasCorrentes['16397379795'] ['saldo'] - $valorSaque);
}*/
