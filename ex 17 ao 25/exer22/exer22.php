<?php
/*22) Escreva um programa que leia o ano de nascimento de um rapaz e mostre a sua
situação em relação ao alistamento militar.
 - Se estiver antes dos 18 anos, mostre em quantos anos faltam para o
alistamento.
 - Se já tiver depois dos 18 anos, mostre quantos anos já se passaram do
alistamento.*/

$ano = $_POST['nascimento'];

$calc = 2022 - $ano;

$falta = 18 - $calc;
$passou = $calc - 18;

if ($calc <= 18){
    echo "Falta $falta anos para alistar";
}else{
    echo "Já se passaram  $passou anos para alistar";
}