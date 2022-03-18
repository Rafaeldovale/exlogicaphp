<?php
/*31) [DESAFIO] Crie um jogo de JoKenPo
 (Pedra-Papel-Tesoura)*/

$jogador1 = $_POST['jokenpo1'];
$jogador2 = $_POST['jokenpo2'];

//echo "$jogador1 <br> $jogador2";

if ($jogador1 === $jogador2){
    echo "empate";
}
elseif (($jogador1 === 'pedra') && ($jogador2 === 'tesoura')){
    echo "pedra";
}
elseif (($jogador1 === 'tesoura') && ($jogador2 === 'papel')){
    echo "tesoura";
}
elseif (($jogador1 === 'papel') && ($jogador2 === 'pedra')){
    echo "papel";
}
elseif (($jogador2 === 'pedra') && ($jogador1 === 'tesoura')){
    echo "pedra";
}
elseif (($jogador2 === 'tesoura') && ($jogador1 === 'papel')){
    echo "tesoura";
}
elseif (($jogador2 === 'papel') && ($jogador1 === 'pedra')){
    echo "papel";
}