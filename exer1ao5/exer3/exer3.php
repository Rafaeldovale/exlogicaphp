<?php
/*
3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
final uma mensagem.
Ex:
Nome do Funcionário: Maria do Carmo
Salário: 1850,45
O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho.
*/

$nome = $_POST['nome'];
$salario = $_POST['salario'];

echo "O funcinário $nome tem um salário de R$ $salario em Junho.";
?>
