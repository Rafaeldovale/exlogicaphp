<?php
/*9) Faça um algoritmo que leia quanto dinheiro uma pessoa tem na carteira (em R$)
e mostre quantos dólares ela pode comprar. Considere US$1,00 = R$3,45.*/

$dinheiro = $_POST['dinheiro'];

$conversor = $dinheiro / 3.45;

echo "Você poderá comprar em dólares US$ $conversor";
