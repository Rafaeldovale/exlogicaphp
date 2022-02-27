<?php
/*16) [DESAFIO] Escreva um programa para calcular a redução do tempo de vida de um
fumante. Pergunte a quantidade de cigarros fumados por dias e quantos anos ele
já fumou. Considere que um fumante perde 10 min de vida a cada cigarro. Calcule
quantos dias de vida um fumante perderá e exiba o total em dias.*/

$cigarro = $_POST['cigarro'];
$anos = $_POST['anos'];

$fumouNaVida = ($cigarro * 365) * $anos;
$minutodeFumo = (($cigarro * 365 )* $anos)*10;
$diasPerdido = $minutodeFumo/ 1440;

echo "Você fumou $fumouNaVida cigarros na sua vida.<br>
        Você chegou a fumar em minutos com os cáculos $minutodeFumo<br>
        Então com isso você perdeu $diasPerdido dias    da sua vida";