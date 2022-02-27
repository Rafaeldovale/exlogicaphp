

<?php
/*12) Crie um programa que leia o preço de um produto, calcule e mostre o seu
PREÇO PROMOCIONAL, com 5% de desconto.*/
$valor = $_POST['produto'];

$novoPreco = (($valor * 5)/100) + $valor;

echo "O valor do produto é de R$ $valor reais e com o desconto ele ficou no total de R$ $novoPreco reais.";