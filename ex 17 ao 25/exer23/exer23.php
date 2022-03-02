<?php
/*23) Numa promoção exclusiva para o Dia da Mulher, uma loja quer dar descontos
para todos, mas especialmente para mulheres. Faça um programa que leia nome,
sexo e o valor das compras do cliente e calcule o preço com desconto. Sabendo
que:
 - Homens ganham 5% de desconto
 - Mulheres ganham 13% de desconto*/

 $nome = $_POST['nome'];
 $genero = $_POST['sex'];
 $compra = $_POST['compra'];

 if($_POST['sex'] == 'Feminino')
 {
    $DesMulher = $compra - ($compra * 0.15) ;
    echo "Olá $nome seu genero sendo $genero sua compra teve 15% de desconto e ficou R$$DesMulher";
 }
if($_POST['sex'] == 'Masculino')
{
    $DesHomem = $compra - ($compra * 0.05);
    echo "Ola $nome seu genero sendo $genero sua compra teve 5% de desconto e ficou R$$DesHomem";
}

echo "<br><hr><br>";

