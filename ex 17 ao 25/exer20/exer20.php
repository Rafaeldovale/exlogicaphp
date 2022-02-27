<?php
/*20) Desenvolva um programa que leia um número inteiro e mostre se ele é PAR ou
ÍMPAR.*/

$valor = $_POST['valor'];

$numero = $valor % 2;

if($numero == 0){
    echo "O número $valor é par";
}else{
    echo "O número $valor  é ímpar";
}