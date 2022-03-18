<?php
/*25) [DESAFIO] Crie um programa que leia o tamanho de três segmentos de reta.
Analise seus comprimentos e diga se é possível formar um triângulo com essas
retas. Matematicamente, para três segmentos formarem um triângulo, o comprimento
de cada lado deve ser menor que a soma dos outros dois.*/

$retaA = $_POST['A'];
$retaB = $_POST['B'];
$retaC = $_POST['C'];


if ($retaA == 0 || $retaB == 0 || $retaC == 0){
    echo "Não é um triângulo uma reta não pode ser igual a zero";
}elseif ($retaA + $retaB < $retaC || $retaA + $retaC < $retaB || $retaB + $retaC < $retaA){
    echo "A soma de duas retas não pode ser menor que uma reta";
}else{
    echo "Essa condição satifaz para ser um triângulo";
}