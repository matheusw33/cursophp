<?php

require_once 'funcoes.php';

$idadelist = [21, 34, 32, 14, 65, 56, 34];



/*for ( $i = 0; $i < count($idadelist); $i++){
    echo $idadelist[$i] . PHP_EOL;
}
*/
list ($idadeMatheus, $idadeBeatriz, $idadeGuilherme) = $idadelist;

mostraMensagem($idadeMatheus);