<?php
/*21) Faça um algoritmo que leia um determinado ano e mostre se ele é ou não
BISSEXTO.*/

$ano = $_POST['ano'];

$bissexto =  $ano % 4;

if ($bissexto == 0){
    echo "O ano escolhido $ano é bissexto";
}else{
    echo "O ano escolhido $ano não é bissexto";
}