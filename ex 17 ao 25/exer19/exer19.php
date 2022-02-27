<?php
/*
19) Crie um algoritmo que leia o nome e as duas notas de um aluno, calcule a sua
média e mostre na tela. No final, analise a média e mostre se o aluno teve ou
não um bom aproveitamento (se ficou acima da média 7.0).*/

$nota1 = $_POST['num1'];
$nota2 = $_POST['num2'];

$media = ($nota1 + $nota2)/2;

if($media < 6.9){
    echo "Você não foi aprovado pela sua nota $media";
}else{
    echo "você foi aprovado pela sua nota $media";
}