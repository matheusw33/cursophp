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


echo "<ul>";
foreach($contasCorrentes as $cpf => $conta) {
    exibeConta($conta); 
};
echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Bancárias</h1>
    <ul>
        <?php foreach( $contasCorrentes as $cpf => $conta){ ?> 
        
         <h4>Titular: <?= $conta['titular'] ?>  Saldo: <?= $conta['saldo'] ?></h4>
        <?php } ?>
        
    </ul>
</body>
</html>

