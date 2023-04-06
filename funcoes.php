<?php

function mostraMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
};

function sacar( array $conta, float $valor): array 
{
    if($valor > $conta['saldo']){
        mostraMensagem("Você não tem saldo suficiente.");
    } else{
        mostraMensagem("Saque realizado com sucesso! Valor disponivel no momento " . $conta['saldo'] - $valor);
    }
    return $conta;
};


function depositar( array $conta, float $valor): array 
{
    if($valor > 0){
        mostraMensagem("Deposito efetuado com sucesso! Seu saldo agora é de " .  $conta['saldo'] += $valor);
    } else{
        mostraMensagem("O valor precisa ser maior que zero!");
    }
    return $conta;
};

function deixarLetraMaiuscula( array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
};

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
 echo("<li>Nome: $titular . Saldo:  $saldo . </li>");
}