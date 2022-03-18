<?php
/*32) [DESAFIO] Crie um jogo onde o computador vai sortear
um número entre 1 e 5 
o jogador vai tentar descobrir qual foi o valor sorteado.*/

$jogador = $_POST['escolha'];

$computador = rand(1,5);

if($jogador == $computador){
    echo "Acertou!!!seu nº$jogador --> nºcomputador $computador ";
}else{
    echo "Não foi dessa vez!!!seu nº$jogador --> nºdo computador $computador";
}