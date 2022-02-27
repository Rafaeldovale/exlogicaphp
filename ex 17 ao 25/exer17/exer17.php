<?php
/*17) Escreva um programa que pergunte a velocidade de um carro. Caso ultrapasse
80Km/h, exiba uma mensagem dizendo que o usuário foi multado. Nesse caso, exiba
o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.*/

$velo = $_POST['velocidade'];

$multa = ($velo - 80 ) * 5;

$velocidadeAcima = $velo - 80;

if($velo > 80){
    echo "Você foi multado pela velocidade acima do permitido! velocidade = $velo km<br>";
    echo "Sua multa ficou em R$$multa por ter ultrapassado a velocidade permitida acima de $velocidadeAcima km";
}