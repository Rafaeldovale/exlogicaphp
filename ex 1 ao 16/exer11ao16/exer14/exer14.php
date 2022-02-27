<?php
/*14) A locadora de carros precisa da sua ajuda para cobrar seus serviços. Escreva
um programa que pergunte a quantidade de Km percorridos por um carro alugado e a
quantidade de dias pelos quais ele foi alugado. Calcule o preço total a pagar,
sabendo que o carro custa R$90 por dia e R$0,20 por Km rodado.*/
$km = $_POST['km'];
$dia = $_POST['dias'];


$precoKm = $km * 0.2;
$precoDia = $dia * 90;

$totalPagar = $precoKm + $precoDia;

echo "Você percorrreu $km km e utilizou por $dia dias, o total a pagar será $totalPagar";
